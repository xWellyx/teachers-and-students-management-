<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Cource;
use App\Models\Batch;
use App\Models\Enrollment;
use App\Models\Payment;

class HomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            $totalstudent = Student::Count();
            $totalTeacher= Teacher::Count();
            $totalCource= Cource::Count();
            $totalBatch= Batch::Count();
            $totalEnrollment= Enrollment::Count();
            $totalPayment= Payment::Count();
        return view ('homepage.index' , compact('totalstudent' , 'totalTeacher' , 'totalCource' , 'totalBatch' , 'totalEnrollment' , 'totalPayment'));
        
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        //
    }
}
