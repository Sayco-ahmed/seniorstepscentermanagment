<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
                'coursePdf'      => 'file|max:51200|mimes:doc,docx,pdf',
                'courseImg'      => 'image',
                'courseNotes'    => 'required',
                'active'         => 'required'
            ]
        );

        $request_data = $request->except(['courseImg' , 'coursePdf']);



        if($request->courseImg){

            Image::make($request->courseImg)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();

        })->save(public_path('uploads/courses/' . $request->courseImg->getClientOriginalName()));

        $request_data['courseImg'] = $request->courseImg->getClientOriginalName();
        }

        if($request->file('coursePdf')){
            $destinationPath = 'uploads/courses/course_files/'; 
            $profilefile =  $request->file('coursePdf')->getClientOriginalName();
            $request->file('coursePdf')->move($destinationPath, $profilefile);
            $request_data['coursePdf'] = $request->coursePdf->getClientOriginalName();
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
        $requested_course = $course ;
        return view('courses.course_view' , compact('requested_course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(course $course)
    {
        $requested_course = $course ;
        return view('courses.course_edit',compact('requested_course'));
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
        $request->validate
        (
            [
                'courseEnName'   => 'required',
                'courseArName'   => 'required',
                'courseArDesc'   => 'required',
                'courseEnDesc'   => 'required',
                'courseHours'    => 'required',
                'courseFees'     => 'required',
                'coursePdf'      => 'file|max:51200|mimes:doc,docx,pdf',
                'courseImg'      => 'image',
                'courseNotes'    => 'required',
                'active'         => 'required'
            ]
        );

        $request_data = $request->except(['courseImg' , 'coursePdf']);

        if($request->courseImg){

            if($request->courseImg != 'default_course.png'){

                Storage::disk('public_uploads')->delete('/courses/' . $request->courseImg);          
                
                }

                Image::make($request->courseImg)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();

        })->save(public_path('uploads/courses/' . $request->courseImg->getClientOriginalName()));

        $request_data['courseImg'] = $request->courseImg->getClientOriginalName();
        }


        if($request->file('coursePdf')){
            
            if($request->file('coursePdf')->getClientOriginalName() != $course->coursePdf){
                Storage::disk('public_uploads')->delete('/courses/course_files/' . $course->coursePdf);
                $destinationPath = 'uploads/courses/course_files/'; 
                $profilefile =  $request->file('coursePdf')->getClientOriginalName();
                $request->file('coursePdf')->move($destinationPath, $profilefile);
                $request_data['coursePdf'] = $request->coursePdf->getClientOriginalName();
            }
           
        }
       
        $course->fill($request_data)->save();

        session()->flash('success',('course Edited successfully'));


        return redirect()->route('courses.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(course $course)
    {
        
        if($course->courseImg != 'default_course.png'){

            Storage::disk('public_uploads')->delete('/courses/' . $course->courseImg);

        }
        Storage::disk('public_uploads')->delete('/courses/course_files/' . $course->coursePdf);

        $course->delete();

        session()->flash('success',('course Deleted successfully'));


        return redirect('/courses');
    }
}
