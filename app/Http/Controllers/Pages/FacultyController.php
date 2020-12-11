<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\faculty;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faculty = faculty::all();

        return view('faculty.faculty' , compact('faculty'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate
        (
            [

                'facultyName'      => 'required',
                'universityId'     => 'required',
                
            ]
        );

        faculty::create($request->all());

        session()->flash('success',('faculty added successfully'));

        return redirect('/faculty');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function show(faculty $faculty)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function edit(faculty $faculty)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, faculty $faculty)
    {
        $request->validate
        (
            [

                'facultyName'      => 'required',
                'universityId'     => 'required',
                
            ]
        );

        $faculty->fill($request->all())->save();

        session()->flash('success',('faculty Edited successfully'));


        return redirect()->route('faculty.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function destroy(faculty $faculty)
    {
        $faculty->delete();

        session()->flash('success',('faculty Deleted successfully'));


        return redirect('/faculty');
    }
}
