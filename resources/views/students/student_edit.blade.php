@extends('layouts.master')

@section('title' , 'Edit Student')

@section('this_page_links')
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <!-- owl.carousel CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.transitions.css')}}">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
    <!-- meanmenu icon CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('css/meanmenu.min.css')}}">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <!-- educate icon CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('css/educate-custon-icon.css')}}">
    <!-- morrisjs CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('css/morrisjs/morris.css')}}">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('css/scrollbar/jquery.mCustomScrollbar.min.css')}}">
    <!-- metisMenu CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('css/metisMenu/metisMenu.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/metisMenu/metisMenu-vertical.css')}}">
    <!-- calendar CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('css/calendar/fullcalendar.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/calendar/fullcalendar.print.min.css')}}">
    <!-- select2 CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('css/select2/select2.min.css')}}">
    <!-- chosen CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('css/chosen/bootstrap-chosen.css')}}">
    <!-- duallistbox CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('css/duallistbox/bootstrap-duallistbox.min.css')}}">
    <!-- selection filter -->
    <link href="{{asset('css/select.min.css')}}" rel="stylesheet">
    <!-- modals CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('css/modals.css')}}">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <!-- x-editor CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('css/editor/select2.css')}}">
    <link rel="stylesheet" href="{{asset('css/editor/datetimepicker.css')}}">
    <link rel="stylesheet" href="{{asset('css/editor/bootstrap-editable.css')}}">
    <link rel="stylesheet" href="{{asset('css/editor/x-editor-style.css')}}">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('css/data-table/bootstrap-table.css')}}">
    <link rel="stylesheet" href="{{asset('css/data-table/bootstrap-editable.css')}}">
    <!-- select2 CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('css/select2/select2.min.css')}}">
    <!-- chosen CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('css/chosen/bootstrap-chosen.css')}}">
    <!-- modernizr JS
        ============================================ -->
    <script src="{{asset('js/vendor/modernizr-2.8.3.min.js')}}"></script>
@endsection

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
                                    <a href="{{route('student.index')}}"> All Students </a><span class="bread-slash"> / </span>
                                    </li>
                                    
                                    <li>
                                        <span class="bread-blod"> Edit student </span>
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

        @include('errors.errors')
        <form action="{{route('student.update' , $requested_student->id)}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="row res-ltr">
                
                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                    <div class="sparkline14-list">
                        <div class="sparkline14-hd">
                            <div class="main-sparkline14-hd">
                                <h1 style="text-align:left"> student Data </h1>
                            </div>
                        </div>
                        <div class="sparkline16-hd">
                            <div class="main-sparkline16-hd">
                                <h1 style="text-align:left">Main Data </h1>
                                <br />
                            </div>
                        </div>
                        <div class="sparkline16-graph">
                            <div class="date-picker-inner" style="text-align:left">
                                
                                
                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <label class="">Student AR Name</label>
                                <input name="fullNameAr" type="text" class="form-control" placeholder="Student AR Name" value="{{$requested_student->fullNameAr}}">
                                </div>
                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <label class="">student EN Name</label>
                                    <input name="fullNameEn" type="text" class="form-control" placeholder="student EN Name" value="{{$requested_student->fullNameEn}}">
                                </div>
                                
                               
                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <label>Student Mobile</label>
                                    <div class="input-mark-inner mg-b-22">
                                        <input type="number" name="mobile" class="form-control" placeholder="Student Mobile" value="{{$requested_student->mobile}}">
                                    </div>
                                </div>
                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <label>Student Whatsapp</label>
                                    <div class="input-mark-inner mg-b-22">
                                        <input type="number" name="whatsapp" class="form-control" placeholder="Student Whatsapp" value="{{$requested_student->whatsapp}}">
                                    </div>
                                </div>
                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <label>Student Education</label>
                                    <div class="input-mark-inner mg-b-22">
                                        <input type="text" name="education" class="form-control" placeholder="Student Education" value="{{$requested_student->education}}">
                                    </div>
                                </div>



                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <div class="input-mark-inner mg-b-22">
                                        <label class="">City Name</label>

                                        
                                     
                                        <select  name="cityId" class="select2" >

                                            <option value="">City Name</option>

                                            @foreach ($allcities as $city)
                                                <option value="{{$city->id}}" {{$city->id == $requested_student->cityId ? 'select' : ''}} >{{$city->cityName}}</option>
                                            @endforeach
                                            
                                          
                                        </select>
                                    
                                     </div>
                                </div>

                                {{-- <div class="form-group data-custon-pick" style="text-align:left">
                                    <div class="input-mark-inner mg-b-22">
                                        <label class="">Country Name</label>

                                        
                                     
                                        <select  name="countryId" class="select2" >

                                            <option value="">Country Name</option>

                                            @foreach ($allCountry as $Country)
                                                <option value="{{$Country->id}}" {{$Country->id == $requested_student->countryId ? 'select' : ''}} >{{$Country->cityName}}</option>
                                            @endforeach
                                            
                                          
                                        </select>
                                    
                                     </div>
                                </div> --}}

                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <div class="input-mark-inner mg-b-22">
                                        <label class="">faculty Name</label>

                                        
                                     
                                        <select  name="facultyId" class="select2" >

                                            <option value="">faculty Name</option>

                                            @foreach ($allfaculty as $faculty)
                                                <option value="{{$faculty->id}}" {{$faculty->id == $requested_student->facultyId ? 'select' : ''}} >{{$faculty->facultyName}}</option>
                                            @endforeach
                                            
                                          
                                        </select>
                                    
                                     </div>
                                </div>

                                {{-- <div class="form-group data-custon-pick" style="text-align:left">
                                    <div class="input-mark-inner mg-b-22">
                                        <label class="">unversity Name</label>

                                        
                                     
                                        <select  name="unversityId" class="select2" >

                                            <option value="">unversity Name</option>

                                            @foreach ($allunversity as $unversity)
                                                <option value="{{$unversity->id}}" {{$unversity->id == $requested_student->unversityId ? 'select' : ''}} >{{$unversity->unversityName}}</option>
                                            @endforeach
                                            
                                          
                                        </select>
                                    
                                     </div>
                                </div> --}}


                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <div class="input-mark-inner mg-b-22">
                                        <label class="">nationality Name</label>

                                        
                                     
                                        <select  name="nationalityId" class="select2" >

                                            <option value="">nationality Name</option>

                                            @foreach ($allnationality as $nationality)
                                                <option value="{{$nationality->id}}" {{$nationality->id == $requested_student->nationalityId ? 'select' : ''}} >{{$nationality->nationalityName}}</option>
                                            @endforeach
                                            
                                          
                                        </select>
                                    
                                     </div>
                                </div>

                                <div>
                           
                                    <label>Student Status</label>
                                      <label class="radio-inline">
                                @foreach ($allstudentstatus as $studentstatus)
                                <input type="radio" name="studentStatusId" id="inlineRadio1" value="{{$studentstatus->id}}"  {{ $studentstatus->studentStatusId == $studentstatus->id ? 'checked' : ''}}> {{$studentstatus->statusName}} 
                                @endforeach

                                      </label>
                                      


                                </div>

                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <div class="input-mark-inner mg-b-22">
                                        <label class="">Reach Source Name</label>

                                        
                                     
                                        <select  name="reachSourceId" class="select2" >

                                            <option value="">Reach Source Name</option>

                                            @foreach ($allreachsource as $reachsource)
                                                <option value="{{$reachsource->id}}" {{$reachsource->id == $requested_student->reachSourceId ? 'select' : ''}} >{{$reachsource->reachSourceText}}</option>
                                            @endforeach
                                            
                                          
                                        </select>
                                    
                                     </div>
                                </div>




                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <label>Student Email</label>
                                    <div class="input-mark-inner mg-b-22">
                                        <input type="email" name="email" class="form-control" placeholder="student email" value="{{$requested_student->email}}">
                                    </div>
                                </div>
                                
                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <label>Student job</label>
                                    <div class="input-mark-inner mg-b-22">
                                        <input type="text" name="job" class="form-control" placeholder="Student job" value="{{$requested_student->job}}">
                                    </div>
                                </div>

                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <label>Student company</label>
                                    <div class="input-mark-inner mg-b-22">
                                        <input type="text" name="company" class="form-control" placeholder="Student company" value="{{$requested_student->company}}">
                                    </div>
                                </div>

                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <label>Student Address</label>
                                    <div class="input-mark-inner mg-b-22">
                                        <input type="text" name="address" class="form-control" placeholder="Student address" value="{{$requested_student->address}}">
                                    </div>
                                </div>

                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <label>Student Birthdate</label>
                                    <div class="input-mark-inner mg-b-22">
                                        <input type="date" name="birthdate" class="form-control" placeholder="Student birthdate" value="{{$requested_student->birthdate}}">
                                    </div>
                                </div>

                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <label>Student Facebook Account</label>
                                    <div class="input-mark-inner mg-b-22">
                                        <input type="text" name="facebookAccnt" class="form-control" placeholder="Student facebookAccnt" value="{{$requested_student->facebookAccnt}}">
                                    </div>
                                </div>               
                                
                                <div class="form-group data-custon-pick" style="text-align:left;margin-top: 20px;">
                                    <label>Student Notes</label>
                                    <div class="input-mark-inner mg-b-22">
                                        
                                        <textarea class="form-control" placeholder="Student Notes" name="notes"> {{$requested_student->notes}} </textarea>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="col-lg-6 col-lg-offset-3 col-md-6 col-lg-offset-3 col-sm-8 col-sm-offset-2 text-center ">
                                   
                <a href="{{route('student.index')}}" class="btn btn-primary waves-effect waves-light mg-b-15" >Back</a>
            
                <button type="submit"  class="btn btn-primary waves-effect waves-light mg-b-15"> save </button>
           
            </div>
           </form>    


    </div>
</div>
@endsection


@section('this_page_scripts')
<script>
 $(".image").change(function () {

     if (this.files && this.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('.image-preview').attr('src', e.target.result);
        }
       reader.readAsDataURL(this.files[0]);
    }

 });
</script>
@endsection