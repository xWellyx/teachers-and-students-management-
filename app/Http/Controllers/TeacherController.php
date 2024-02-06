<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\response;
use App\Models\teacher;
use Illuminate\view\view;


class teacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): view
    {
        $teachers = teacher::all();
        return view ('teachers.index')->with('teachers', $teachers);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): view
    {
      
        return view('teachers.create');    
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
        $input = $request->all();
        teacher::create($input);
        return redirect('teachers')->with('flash_message', 'teacher Addedd!');  
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): view
    
    {
        $teachers = teacher::find($id);
        return view('teachers.show')->with('teachers', $teachers);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): view
    {
        $teachers = teacher::find($id);
        return view('teachers.edit')->with('teachers', $teachers);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id):RedirectResponse
    {
        $teachers = teacher::find($id);
        $input = $request->all();
        $teachers->update($input);
        return redirect('teachers')->with('flash_message', 'teacher Updated!');  
    }

    /**
     * Remove the specified resource from 
     * orage.
     */
    public function destroy(string $id):RedirectResponse
    {
        teacher::destroy($id);
        return redirect('teachers')->with('flash_message', 'teacher deleted!');  
    }
}
