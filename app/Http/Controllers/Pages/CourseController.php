<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\course;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $course = course::all();
        return view('courses.course' , compact('course'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('courses.course_add');
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
                'courseEnName'   => 'required',
                'courseArName'   => 'required',
                'courseArDesc'   => 'required',
                'courseEnDesc'   => 'required',
                'courseHours'    => 'required',
                'courseFees'     => 'required',
                'coursePdf'      => 'required',
                'courseImg'      => 'image',
                'courseNotes'    => 'required',
                'active'         => 'required'
            ]
        );

        $request_data = $request->except(['courseImg']);



        if($request->courseImg){

            Image::make($request->courseImg)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();

        })->save(public_path('uploads/courses/' . $request->courseImg->getClientOriginalName()));

        $request_data['courseImg'] = $request->courseImg->getClientOriginalName();
    }
        course::create($request_data);

        session()->flash('success',('course added successfully'));

        return redirect('/courses');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(course $course)
    {
        //
    }
}
