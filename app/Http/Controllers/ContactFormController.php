<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;
use App\Models\FormEntry; // Import your FormEntry model

class ContactFormController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(ContactFormRequest $request)
    {
        // Create a new instance of the FormEntry model
        $formEntry = new FormEntry();

        // Fill the model instance with validated form data
        $formEntry->fill($request->validated());

        // Save the model instance to the database
        $formEntry->save();

        // Redirect back with success message
        return back()->with('success', 'Success! Your form has been submitted successfully.');
    }
}
