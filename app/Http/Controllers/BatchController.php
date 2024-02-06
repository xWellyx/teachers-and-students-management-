<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Illuminate\Http\RedirectResponse;
use Illuminate\Http\response;
use App\Models\Batch;
use App\Models\cource;
use Illuminate\view\view;

class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): view
    {
        $batches = batch::all();
        return view ('batches.index')->with('batches', $batches);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): view
    {
        $courses = cource::pluck('name' , 'id');
        return view ('batches.create' , compact('courses'));
              
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
        $input = $request->all();
        batch::create($input);
        return redirect('batches')->with('flash_message', 'batch Addedd!');  
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): view
    {
        $batch = batch::find($id);
        return view('batches.show')->with('batches', $batch);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): view
    {
        $batches = batch::find($id);
        return view('batches.edit')->with('batches', $batches);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id):RedirectResponse
    {
        $batches = batch::find($id);
        $input = $request->all();
        $batches->update($input);
        return redirect('batches')->with('flash_message', 'batch Updated!');  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id):RedirectResponse
    {
        batch::destroy($id);
        return redirect('batches')->with('flash_message', 'batch deleted!');  
    }
}
