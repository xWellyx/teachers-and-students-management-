<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Illuminate\Http\RedirectResponse;
use Illuminate\Http\response;
use App\Models\Payment;
use App\Models\Enrollment;
use Illuminate\view\view;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): view
    {
        $payments = Payment::all();
        return view ('payments.index')->with('payments', $payments);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): view
    {
        $enrollments = enrollment::pluck('enroll_no' , 'id')->all();
        return view ('payments.create' , compact('enrollments'));
              
              
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
        $input = $request->all();
        payment::create($input);
        return redirect('payments')->with('flash_message', 'payment Addedd!');  
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): view
    {
        $payment = payment::find($id);
        return view('payments.show')->with('payments', $payment);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): view
    {
        $payments= payment::find($id);
        return view('payments.edit')->with('payments', $payments);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id):RedirectResponse
    {
        $payments = payment::find($id);
        $input = $request->all();
        $payments->update($input);
        return redirect('payments')->with('flash_message', 'payment Updated!');  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id):RedirectResponse
    {
        payment::destroy($id);
        return redirect('payments')->with('flash_message', 'payment deleted!');  
    }
}
