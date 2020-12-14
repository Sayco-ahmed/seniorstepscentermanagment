@extends('layouts.master')

@section('title' , 'Add Trainer')


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
                                        style="text-align:left" name="branch_search">
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
                                <a href="{{route('trainer.index')}}"> Trainers </a><span class="bread-slash"> / </span>
                                </li>
                                <li>
                                    <span class="bread-blod"> Trainer Add </span>
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
        <form action="{{url('trainer')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('POST') }}
            <div class="row res-ltr">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="sparkline16-list responsive-mg-b-30">
                        <div class="profile-img mg-b-23">
                            <img src="{{asset('uploads/trainer/default_trainer.png')}}" alt="" class="image-preview" />
                        </div>
                        <div class="file-upload-inner ts-forms mg-b-15">
                            <div class="input prepend-big-btn">
                           
                                <div class="file-button" style="background-color: transparent;">
                                  
                                <input type="file" name="trainerImg"  value="{{old('trainerImg')}}" class="image" >
                                </div>
                                
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                    <div class="sparkline14-list">
                        <div class="sparkline14-hd">
                            <div class="main-sparkline14-hd">
                                <h1 style="text-align:left"> Trainer Data </h1>
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
                                    <label class="">Trainer AR Name</label>
                                    <input name="trainer_ar_name" type="text" class="form-control" placeholder="Trainer AR Name" value="{{old('trainer_ar_name')}}">
                                </div>
                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <label class="">Trainer EN Name</label>
                                    <input name="trainer_en_name" type="text" class="form-control" placeholder="Trainer EN Name" value="{{old('trainer_en_name')}}">
                                </div>
                        
                               
                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <label>Trainer Mobile</label>
                                    <div class="input-mark-inner mg-b-22">
                                        <input type="number" name="trainer_mobile" class="form-control" placeholder="Trainer Mobile" value="{{old('trainer_mobile')}}">
                                    </div>
                                </div>
                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <label>Trainer Birthdate</label>
                                    <div class="input-mark-inner mg-b-22">
                                        <input type="date" name="trainer_birthdate" class="form-control" placeholder="Trainer Birthdate" value="{{old('trainer_birthdate')}}">
                                    </div>
                                </div>

                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <label>Trainer Mobile 2</label>
                                    <div class="input-mark-inner mg-b-22">
                                        <input type="number" name="trainer_mobile2" class="form-control" placeholder="Trainer Mobile 2" value="{{old('trainer_mobile2')}}">
                                    </div>
                                </div>

                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <label>Trainer Address</label>
                                    <div class="input-mark-inner mg-b-22">
                                        <input type="text" name="trainer_address" class="form-control" placeholder="Trainer Address" value="{{old('trainer_address')}}">
                                    </div>
                                </div>

                                <div class="file-upload-inner ts-forms mg-b-15">
                                            
                                    <div class="form-group file-area">
                                        <label >Trainer CV </label>
                                    <input type="file" name="trainerCV" id="trainerCV" multiple="multiple"  required="required" value="{{old('trainerCV')}}"  />
                                    <div class="file-dummy">
                                      <div class="success">Great, your files are selected. Keep on.</div>
                                      <div class="default">Please select some files</div>
                                    </div>
                                  </div>
                                  
                                  <!-- <div class="form-group">
                                    <button type="submit">Upload CV</button>
                                  </div> -->
                                  
                                </div>

                                <div class="file-upload-inner ts-forms mg-b-15">
                                    
                                    <div class="form-group file-area">
                                        <label >Trainer Senior CV </label>
                                    <input type="file" name="trainerSeniorCV" id="trainerSeniorCV" multiple="multiple" required="required"  value="{{old('trainerSeniorCV')}}"  />
                                    <div class="file-dummy">
                                      <div class="success">Great, your files are selected. Keep on.</div>
                                      <div class="default">Please select some files</div>
                                    </div>
                                  </div>
                                  
                                  <!-- <div class="form-group">
                                    <button type="submit">Upload CV</button>
                                  </div> -->
                                  
                                </div>

                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <label>Trainer Facebook URL</label>
                                    <div class="input-mark-inner mg-b-22">
                                        <input type="text" name="trainerFbUrl" class="form-control" placeholder="Facebook URL" value="{{old('trainerFbUrl')}}">
                                    </div>
                                </div>
                                
                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <label>Trainer youtube URL</label>
                                    <div class="input-mark-inner mg-b-22">
                                        <input type="text" name="trainerYoutubeUrl" class="form-control" placeholder="youtube URL" value="{{old('trainerYoutubeUrl')}}">
                                    </div>
                                </div>
                                
                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <label>Trainer linkedin URL</label>
                                    <div class="input-mark-inner mg-b-22">
                                        <input type="text" name="trainerLinkedinUrl" class="form-control" placeholder="linkedin URL" value="{{old('trainerLinkedinUrl')}}">
                                    </div>
                                </div>

                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <label>Trainer Job</label>
                                    <div class="input-mark-inner mg-b-22">
                                        <input type="text" name="trainerJob" class="form-control" placeholder="Trainer Job" value="{{old('trainerJob')}}">
                                    </div>
                                </div>

                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <label>Trainer Company</label>
                                    <div class="input-mark-inner mg-b-22">
                                        <input type="text" name="trainerCompany" class="form-control" placeholder="Trainer Company" value="{{old('trainerCompany')}}">
                                    </div>
                                </div>

                                <div>
                                   
                                    <label>Trainer Status</label>
                                    <label class="radio-inline">
                                        <input type="radio" name="active" id="inlineRadio1" value="1" {{old('active') == '1' ? 'checked' : ''}} > Active
                                      </label>
                                      <label class="radio-inline">
                                        <input type="radio" name="active" id="inlineRadio2" value="2" {{old('active') == '2' ? 'checked' : ''}}> Gropping
                                      </label>
                                      <label class="radio-inline">
                                        <input type="radio" name="active" id="inlineRadio3" value="3" {{old('active') == '3' ? 'checked' : ''}}> Not Active
                                      </label>


                                </div>

                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <label>Notes</label>
                                    <div class="input-mark-inner mg-b-22">
                                        
                                        <textarea class="form-control" placeholder="Course Notes" name="trainerNotes" > {{old('trainerNotes')}} </textarea>

                                    </div>
                                </div>
                                
                               

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="col-lg-6 col-lg-offset-3 col-md-6 col-lg-offset-3 col-sm-8 col-sm-offset-2 text-center ">
                                   
                <a href="{{route('trainer.index')}}" class="btn btn-primary waves-effect waves-light mg-b-15" >Back</a>
            
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