<?php

namespace App\Http\Controllers\Pages;

use App\Country;
use App\Http\Controllers\Controller;
use App\Models\city;
use App\Models\faculty;
use App\Models\nationality;
use App\Models\reach_source;
use App\Models\student;
use App\Models\student_status;
use App\University;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = student::all();
        return view('students.student' , compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $universities = University::all();
        $allCountry = Country::all();
        $allcities = city::all();
        $allfaculty = faculty::all();
        $allnationality = nationality::all();
        $allstudentstatus = student_status::all();
        $allreachsource = reach_source::all();
        return view('students.student_add' , compact('allcities' , 'allfaculty' , 'allnationality' , 'allstudentstatus' , 'allreachsource' , 'allCountry' , 'universities'));
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
                'fullNameAr'   => 'required',
                'fullNameEn'   => 'required',
                'mobile'   => 'required',
                'whatsapp'   => 'required',
                'education'    => 'required',
                'cityId'     => 'required',
                'countryId'     => 'required',
                'facultyId'     => 'required',
                'studentStatusId'     => 'required',
                'unversityId'     => 'required',
                'nationalityId'     => 'required',
                'reachSourceId'     => 'required',
                'email'     => 'required',
                'job'     => 'required',
                'company'     => 'required',
                'address'     => 'required',
                'birthdate'     => 'required',
                'facebookAccnt'     => 'required',
                'notes'     => 'required',
               
            ]
        );

        student::create($request->all());

        session()->flash('success',('student added successfully'));

        return redirect('/student');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(student $student)
    {
        $requested_student = $student ;
        return view('students.student_view' , compact('requested_student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(student $student)
    {
        $universities = University::all();
        $allCountry = Country::all();
        $allcities = city::all();
        $allfaculty = faculty::all();
        $allnationality = nationality::all();
        $allstudentstatus = student_status::all();
        $allreachsource = reach_source::all();
        $requested_student = $student ;
        return view('students.student_edit' , compact('requested_student' , 'universities' , 'allcities' , 'allfaculty' , 'allnationality' , 'allstudentstatus' , 'allreachsource' , 'allCountry'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, student $student)
    {
        $request->validate
        (
            [
                'fullNameAr'   => 'required',
                'fullNameEn'   => 'required',
                'mobile'   => 'required',
                'whatsapp'   => 'required',
                'education'    => 'required',
                'cityId'     => 'required',
                'countryId'     => 'required',
                'facultyId'     => 'required',
                'studentStatusId'     => 'required',
                'unversityId'     => 'required',
                'nationalityId'     => 'required',
                'reachSourceId'     => 'required',
                'email'     => 'required',
                'job'     => 'required',
                'company'     => 'required',
                'address'     => 'required',
                'birthdate'     => 'required',
                'facebookAccnt'     => 'required',
                'notes'     => 'required',
               
            ]
        );

        $student->fill($request->all())->save();

        session()->flash('success',('student Edited successfully'));

        return redirect()->route('student.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(student $student)
    {
        $student->delete();

        session()->flash('success',('student Deleted successfully'));


        return redirect('/student');
    }
}
