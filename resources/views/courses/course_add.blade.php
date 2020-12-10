@extends('layouts.master')

@section('title' , 'Add Course')


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
                                <a href="{{route('courses.index')}}"> All Courses </a><span class="bread-slash"> / </span>
                                </li>
                                
                                <li>
                                    <span class="bread-blod"> Add Course </span>
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
        <form action="{{url('courses')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('POST') }}
            <div class="row res-ltr">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="sparkline16-list responsive-mg-b-30">
                        <div class="profile-img mg-b-23">
                            <img src="{{asset('uploads/courses/default_course.png')}}" alt="" class="image-preview" />
                        </div>
                        <div class="file-upload-inner ts-forms mg-b-15">
                            <div class="input prepend-big-btn">
                           
                                <div class="file-button" style="background-color: transparent;">
                                  
                                <input type="file" name="courseImg"  value="{{old('courseImg')}}" class="image" >
                                </div>
                                <!-- onchange="document.getElementById('prepend-big-btn').value = this.value;" -->
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                    <div class="sparkline14-list">
                        <div class="sparkline14-hd">
                            <div class="main-sparkline14-hd">
                                <h1 style="text-align:left"> Course Data </h1>
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
                                    <label class="">Course AR Name</label>
                                <input name="courseArName" type="text" class="form-control" placeholder="Course AR Name" value="{{old('courseArName')}}">
                                </div>
                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <label class="">Course EN Name</label>
                                    <input name="courseEnName" type="text" class="form-control" placeholder="Course EN Name" value="{{old('courseEnName')}}">
                                </div>
                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <label>Course AR Discription</label>
                                    <div class="input-mark-inner mg-b-22">
                                        
                                        <textarea class="form-control" placeholder="Course AR Discription" name="courseArDesc"  value="{{old('courseArDesc')}}"></textarea>
                                    </div>
                                </div>
                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <label>Course EN Discription</label>
                                    <div class="input-mark-inner mg-b-22">
                                        
                                        <textarea class="form-control" placeholder="Course EN Discription" name="courseEnDesc" value="{{old('courseEnDesc')}}"></textarea>
                                    </div>
                                </div>
                               
                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <label>Course Hours</label>
                                    <div class="input-mark-inner mg-b-22">
                                        <input type="text" name="courseHours" class="form-control" placeholder="Course Hours" value="{{old('courseHours')}}">
                                    </div>
                                </div>
                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <label>Course Cost</label>
                                    <div class="input-mark-inner mg-b-22">
                                        <input type="text" name="courseFees" class="form-control" placeholder="Course Cost" value="{{old('courseFees')}}">
                                    </div>
                                </div>
                                
                                <div class="file-upload-inner ts-forms mg-b-15">
                                    <label style="padding-bottom: 10px;"> <b>Course PDF </b></label>
                                    <div class="input prepend-big-btn">
                                        
                                        <div class="file-button" style="background-color: transparent;">
                                         
                                            <input type="file" name="coursePdf"  value="{{old('coursePdf')}}" accept="application/pdf,application" onchange="document.getElementById('prepend-big-btn').value = this.value;">
                                        </div>
                                        <!-- <input type="text" id="prepend-big-btn" placeholder="" autofocus type="button" > -->
                                    </div>
                                </div>

                                <div>
                           
                                    <label>Course Status</label>
                                    <label class="radio-inline">
                                        <input type="radio" name="active" id="inlineRadio1" value="Active"  {{ old('active') == 'Active' ? 'checked' : ''}}> Active
                                      </label>
                                      <label class="radio-inline">
                                        <input type="radio" name="active" id="inlineRadio2" value="Gropping"  {{ old('active') == 'Gropping' ? 'checked' : ''}}> Gropping
                                      </label>
                                      <label class="radio-inline">
                                        <input type="radio" name="active" id="inlineRadio3" value="NotActive"  {{ old('active') == 'NotActive' ? 'checked' : ''}}> Not Active
                                      </label>


                                </div>
                                
                                <div class="form-group data-custon-pick" style="text-align:left;margin-top: 20px;">
                                    <label>Course Notes</label>
                                    <div class="input-mark-inner mg-b-22">
                                        
                                        <textarea class="form-control" placeholder="Course Notes" name="courseNotes"  value="{{old('courseEnDesc')}}"></textarea>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="col-lg-6 col-lg-offset-3 col-md-6 col-lg-offset-3 col-sm-8 col-sm-offset-2 text-center ">
                                   
                <a href="{{route('courses.index')}}" class="btn btn-primary waves-effect waves-light mg-b-15" >Back</a>
            
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