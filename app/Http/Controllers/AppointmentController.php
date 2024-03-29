<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;


class AppointmentController extends Controller
{


    protected $columns =[
        'guardianName',
        'guardianEmail',
        'childName',
        'childAge',
        'message'
    ];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $appointments = Appointment::get();
        return view('admin/appointment/appointments', compact('appointments'));
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
       // $messages = $this->messages();
       $appointment = $request->validate([
        'guardianName' => 'required|string|max:50',
        'guardianEmail' => 'required|string',
        'childName' => 'required|string',
        'childAge' => 'required|numeric',
        'message' => 'required|string',
    ]); //
    $appointment = $request->only($this->columns);
    Appointment::create($appointment);
    return redirect('appointment')->with('success', 'Your appointment has been recorded successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $appointment = Appointment::findOrFail($id);
        return view('admin.appointment.viewAppointment', compact('appointment'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Appointment::where('id', $id)->delete();
        return redirect('appointments');
    }
}
