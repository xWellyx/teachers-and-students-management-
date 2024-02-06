<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Cource;
use Illuminate\view\view;

class CourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Cources = Cource::all();
        return view ('Cources.index')->with('Cources', $Cources);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cources.create');    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Cource::create($input);
        return redirect('cources')->with('flash_message', 'cource Addedd!');  
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Cource = Cource::find($id);
        return view('cources.show')->with('cources', $Cource);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Cource = Cource::find($id);
        return view('cources.edit')->with('cources', $Cource);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Cource = Cource::find($id);
        $input = $request->all();
        $Cource->update($input);
        return redirect('cources')->with('flash_message', 'Cource Updated!');  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Cource::destroy($id);
        return redirect('cources')->with('flash_message', 'cource deleted!');  
    }
}
