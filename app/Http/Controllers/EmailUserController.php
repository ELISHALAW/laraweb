<?php

namespace App\Http\Controllers;

use App\Models\Email_User;
use Illuminate\Http\Request;

class EmailUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $email_users = Email_User::all();
        return view('email_users.index', compact('email_users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('email_users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:email__users',
            'email' => 'required|email|unique:email__users'
        ]);

        Email_User::create($validated);
        return redirect()->route('email_users.index')->with('success', 'Email user created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Email_User $email_User)
    {
        //


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Email_User $email_user)
    {
        //
        $Email_users = Email_User::findOrFail($email_user->id);
        return view('email_users.edit', compact('email_user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Email_User $email_user)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:email__users,username,' . $email_user->id,
            'email' => 'required|email|unique:email__users,email,' . $email_user->id
        ]);

        $email_user->update($validated);
        return redirect()->route('email_users.index')->with('success', 'Email user updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Email_User $email_User)
    {
        $email_User->delete();
        return redirect()->route('email_users.index')->with('success', 'Email user deleted successfully.');
    }
}
