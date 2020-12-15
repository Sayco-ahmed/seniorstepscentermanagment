<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\branch;
use App\Models\role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = user::all();
        return view("users.users" , compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $allbranches = branch::all();

       $allroles = role::all();

       return view('users.users_add' , compact('allbranches', 'allroles'));
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
                'userMobile'   => 'required',
                'userName'   => 'required',
                'userPassword'   => 'required',
                'userFullName'   => 'required',
                'branchId'    => 'required',
                'roleId'     => 'required',
               
                'userImg'      => 'image'
                
            ]
        );

        $request_data = $request->except(['userImg']);



        if($request->userImg){

            Image::make($request->userImg)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();

        })->save(public_path('uploads/users/' . $request->userImg->getClientOriginalName()));

        $request_data['userImg'] = $request->userImg->getClientOriginalName();
        }

        User::create($request_data);

        session()->flash('success',('user added successfully'));

        return redirect('/user');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $requested_user = $user ;
        $allbranches = branch::all();
        $allroles = role::all();
        return view('users.users_view' , compact('requested_user' ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $allbranches = branch::all();

        $allroles = role::all();

        $requested_user = $user ;
        return view('users.users_edit',compact('requested_user' ,'allbranches' , 'allroles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate
        (
            [
                'userMobile'   => 'required',
                'userName'   => 'required',
                'userPassword'   => 'required',
                'userFullName'   => 'required',
                'branchId'    => 'required',
                'roleId'     => 'required',
               
                'userImg'      => 'image'
                
            ]
        );

        $request_data = $request->except(['userImg']);
        if($request->userImg){

            if($request->userImg != 'default_user.png'){

                Storage::disk('public_uploads')->delete('/users/' . $request->userImg);          
                
                }

                Image::make($request->userImg)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();

        })->save(public_path('uploads/users/' . $request->userImg->getClientOriginalName()));

        $request_data['userImg'] = $request->userImg->getClientOriginalName();
        }

        $user->fill($request_data)->save();

        session()->flash('success',('user Edited successfully'));


        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if($user->userImg != 'default_user.png'){

            Storage::disk('public_uploads')->delete('/users/' . $user->userImg);

        }


        $user->delete();

        session()->flash('success',('user Deleted successfully'));


        return redirect('/user');
    }
}
