<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            // other fields
        ]);

        $api = 'https://script.google.com/macros/s/AKfycbyM-oYx5f5VubXxQwT8qao85dyX8SPHhEowWD8MswL_7ADe6F4BrlA7FsCdRraEjprlhQ/exec';

        $response = Http::post($api, $validated);

        if ($response->successful()) {
            return back()->with('success', 'Data saved successfully!');
        }

        return back()->with('error', 'Failed to save data');
    }

    public function downloadSheet()
{
    $scriptUrl = 'https://script.google.com/macros/s/AKfycbyM-oYx5f5VubXxQwT8qao85dyX8SPHhEowWD8MswL_7ADe6F4BrlA7FsCdRraEjprlhQ/exec';
    
    return redirect($scriptUrl);
    
    // OR with authentication:
    /*
    $response = Http::withHeaders([
        'Authorization' => 'Bearer '.$googleToken
    ])->get($url);
    
    return response($response->body())
        ->header('Content-Type', 'text/csv')
        ->header('Content-Disposition', 'attachment; filename="sheet_data.csv"');
    */
}

    /**
     * Display the specified resource.
     */
    public function show(Form $form)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Form $form)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Form $form)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Form $form)
    {
        //
    }
}
