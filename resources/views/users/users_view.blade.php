@extends('layouts.master')

@section('title' , 'User View')


@section('breadcome-area')
    <div class="breadcome-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcome-list">
                        <div class="row">

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pull-left">
                                <ul class="breadcome-menu pull-left" style="direction: ltr;">
                                    <li>
                                    <a href="{{url('/')}}"> Home </a><span class="bread-slash"> / </span>
                                    </li>
                                    <li>
                                    <a href="{{route('user.index')}}"> users </a><span class="bread-slash"> / </span>
                                    </li>
                                    <li>
                                        <span class="bread-blod"> user view </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('maincontent')

<div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container">
        <!-- <button class="btn btn-primary waves-effect waves-light mg-b-15" data-toggle="modal" data-target="#r">Back</button> -->
        
        <div class="row res-ltr" >
            <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0">
                <div class="profile-info-inner">
                    <div class="profile-img">
                    <img src="{{$requested_user->image_path}}" alt=""  style="border-radius: 30px;"/>
                    </div>
                    <div class="profile-details-hr">
                        
                        <div class="row text-center">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <div class="address-hr">
                                    <p><b> User Id</b><br /> {{$requested_user->id}} </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <div class="address-hr">
                                    <p><b>User Name</b><br />{{$requested_user->userName}}</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <div class="address-hr">
                                    <p><b>Branch</b><br /> {{$requested_user->branch->branchName}} </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center">
                                <div class="address-hr">
                                    <p><b>User Full Name</b><br /> {{$requested_user->userFullName}}</p>
                                </div>
                            </div>
                            {{-- <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center">
                                <div class="address-hr">
                                    <p><b>User Hire Date</b><br /> 17-07-1990 </p>
                                </div>
                            </div> --}}
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center">
                                <div class="address-hr">
                                    <p><b>User Mobile</b><br /> {{$requested_user->userMobile}} </p>
                                </div>
                            </div>
                            {{-- <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center">
                                <div class="address-hr">
                                    <p><b>User Mobile 2</b><br /> 01005323668 </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center">
                                <div class="address-hr">
                                    <p><b>User Email</b><br /> a.sayed.xc@gmail.com </p>
                                </div>
                            </div> --}}
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center">
                                <div class="address-hr">
                                    <p><b>Role</b><br /> {{$requested_user->role->roleName}} </p>
                                </div>
                            </div>
                            {{-- <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center">
                                <div class="address-hr">
                                    <p><b>Active</b><br /> Active </p>
                                </div>
                            </div> --}}
                        </div>
                        
                       
                        
                    </div>
                </div>
            </div>
            
            
            
        </div>
        <br>
    <a href="{{route('user.index')}}" class="btn btn-primary waves-effect waves-light mg-b-15 col-lg-2 col-lg-offset-5 col-sm-6 col-sm-offset-3  col-xs-6 col-xs-offset-3">Back</a>

    </div>
</div>
@endsection

