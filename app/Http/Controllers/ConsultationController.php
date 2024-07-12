<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class ConsultationController extends Controller
{
    public function index()
    {
        // Your logic here, for example, returning a view
        return view('consultation');
    }

    // ConsultationController.php

public function store(Request $request)
{
    // Validate the request data
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'course' => 'required|string|max:255',
        'purpose' => 'required|string',
        'department' => 'required|string',
        'meeting_mode' => 'required|string',
        'online_preference' => 'nullable|string',
        'schedule' => 'required|date',


    ]);
   // Ensure all variables passed to the view are initialized
   $name = session('name', '');
   $course = session('course', '');

   // Add other variables as needed

   return view('consultation', compact('name', 'course'));
    // Save the data to the database
    Appointment::create($validated);

    // Return back with a success message
    return redirect()->back()->with('success', 'Appointment confirmed successfully.');
}

}

