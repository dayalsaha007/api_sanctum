<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Studend;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Studend::latest()->get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'city'=>'required',
            'fees'=>'required',
        ]);

        return Studend::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       return Studend::findorFail($id);
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
        $update = Studend::findorFail($id);
        $update->update($request->all());
        return $update;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete = Studend::findorFail($id);
        $delete->delete();
        return $delete;
    }



}
