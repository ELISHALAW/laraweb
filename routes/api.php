<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/save-heatmap', function (Request $request) {
    // Check if the file arrived
    if ($request->hasFile('heatmap_image')) {

        // Save the file
        $path = $request->file('heatmap_image')->store('heatmaps', 'public');

        // This JSON response is what makes the JavaScript "Success" alert work
        return response()->json([
            'message' => 'Image saved successfully!',
            'path' => $path
        ], 200);
    }

    return response()->json(['message' => 'No file uploaded'], 400);
});

