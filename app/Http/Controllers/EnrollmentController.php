<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\response;
use App\Models\Enrollment;
use App\Models\Student;
use App\Models\Batch;
use Illuminate\view\view;


class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): view
    {
        $enrollments = enrollment::all();
        return view ('enrollments.index')->with('enrollments', $enrollments);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): view
    {
        $students = Student::pluck('name' , 'id');
        $batches = Batch::pluck('name' , 'id');
        return view ('enrollments.create' , compact('students' ,'batches' ));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
        $input = $request->all();
        enrollment::create($input);
        return redirect('enrollments')->with('flash_message', 'enrollment Addedd!');  
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): view
    
    {
        $enrollment = enrollment::find($id);
        return view('enrollments.show')->with('enrollments', $enrollment);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): view
    {
        $enrollments = enrollment::find($id);
        return view('enrollments.edit')->with('enrollments', $enrollments);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id):RedirectResponse
    {
        $enrollment = enrollment::find($id);
        $input = $request->all();
        $enrollment->update($input);
        return redirect('enrollments')->with('flash_message', 'enrollment Updated!');  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id):RedirectResponse
    {
        enrollment::destroy($id);
        return redirect('enrollments')->with('flash_message', 'enrollment deleted!');  
    }
}
