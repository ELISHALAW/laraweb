<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// Get route example
Route::get('/home', function () {
    return view('home');
})->name('home');


// Grouped routes Portfolio related routes
Route::get('/portfolio', function () {
    return view('portfolio');
});
// prefix is to tell the browser that all the routes inside the group will have the same prefix which is portfolio in this case, so we don't have to write it again and again for each route
Route::prefix("portfolio")->group(function () {

    Route::get('/company', function () {
        return view('company');
    });

    Route::get('/organization', function () {
        return view('organization');
    });
});

Route::post("/formsubmitted", function (Request $request) {
    $request->validate([
        "fullname" => "required | min:3| max:30",
        "email" => "required|min:3|max:30|email"
    ]);

    $fullname = $request->input("fullname");
    $email = $request->input("email");

    return "Your full name is {$request->input('fullname')} and your email is {$request->input('email')}";
})->name("formsubmitted");



// Parameter using routes
// Route::get('/portfolio/{firstname}/{lastname}', function ($firstname, $lastname) {
//     return $firstname . " " . $lastname;
// });

// Route::get('/test', function () {
//     return "This is a test";
// })->name('testpage');
