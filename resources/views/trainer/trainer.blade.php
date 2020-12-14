
@extends('layouts.master')

@section('title' , 'All Trainers')


@section('breadcome-area')
    
<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pull-right">
                            <div class="breadcome-heading pull-right">
                                <form role="search" class="sr-input-func">
                                    <input type="text" placeholder="...search " class="search-int form-control"
                                        style="text-align:right" name="branch_search">
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pull-left">
                            <ul class="breadcome-menu pull-left" style="direction: ltr;">
                                <li>
                                <a href="{{url('/')}}"> Home </a><span class="bread-slash"> / </span>
                                </li>
                                <li>
                                    <span class="bread-blod"> Trainers </span>
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
<div class="contacts-area mg-b-15">
    <div class="container">


        <div style="direction:ltr!important" class="text-left">
            <!-- <button  data-toggle="modal" data-target="#r">Add</button> -->
            <a href=" {{url('trainer/create')}} " class="btn btn-primary waves-effect waves-light mg-b-15">Add</a>
        </div>


      
        <div class="row res-ltr " >

            @if ( $trainers->count() > 0 )
            @foreach ($trainers as $trainer)
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="student-inner-std res-mg-b-30">
                    <div class="student-img">
                        <img src="{{$trainer->image_path}}" alt="" /> 
                    </div>
                    <div class="student-dtl">
                        <h2> {{$trainer->trainer_en_name}} </h2>
                        <h2> {{$trainer->trainer_ar_name}} </h2>
                        <p class="dp">{{$trainer->trainer_mobile}}</p>
                        <div id="socialbtn"> 
                            <a href="{{$trainer->trainerLinkedinUrl}}" class="fa fa-linkedin"></a>
                            <a href="{{$trainer->trainerFbUrl}}" class="fa fa-facebook"></a>
                            <a href="{{$trainer->trainerYoutubeUrl}}" class="fa fa-youtube"></a>
                        </div>
                        <br />
                        <div class="product-buttons text-center">

                            
                       
                            <a href="{{route('trainer.show' ,$trainer->id)}}"><button data-toggle="tooltip" title="View"
                                    class="pd-setting-ed"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                           


                            <a href="{{route('trainer.edit' , $trainer->id)}}"><button data-toggle="tooltip" title="Edit"
                                    class="pd-setting-ed"><i class="fa fa-pencil-square-o"
                                        aria-hidden="true"></i></button></a>

                                
                            <button data-toggle="modal" data-target="#del{{$trainer->id}}" title="Trash"
                                    class="pd-setting-ed"><i class="fa fa-trash-o"
                                        aria-hidden="true"></i></button>


                                
 


                                <div id="del{{$trainer->id}}" class="modal modal-edu-general fullwidth-popup-InformationproModal fade" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header header-color-modal bg-color-2">
                                            <h4 class="modal-title" style="text-align:left">Delete Trainer</h4>
                                            <div class="modal-close-area modal-close-df">
                                                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                            </div>
                                        </div>
                                        <div class="modal-body">
                                            <span class="educate-icon educate-danger modal-check-pro information-icon-pro"> </span>
                                            <h2> {{$trainer->trainer_en_name}} </h2>
                                            <h2> {{$trainer->trainer_ar_name}} </h2>
                                            <h4>Do you want to delete this Trainer</h4>
                                        </div>
                                        <div class="modal-footer info-md">


                                        
                                            <button data-dismiss="modal" href="#">cancel</button>

                                            <form action="{{route('trainer.destroy',$trainer->id)}}" method="post" style="display: inline-block">
                                                {{csrf_field()}}
                                                {{method_field('delete')}}
                                                
                                                <button type="submit">delete</button>
                                            </form>

                                            
                                        </div>
                                    </div>
                                </div>
                                </div>



                                
                                       
                        </div>
                    </div>

                    
                </div>
            </div>

            @endforeach
            @else
                
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="student-inner-std res-mg-b-30">
                    <h2> There is no Trainer Data Entered yet </h2>
                </div>
            </div>


            @endif



        </div>

    </div>
</div>
@endsection

