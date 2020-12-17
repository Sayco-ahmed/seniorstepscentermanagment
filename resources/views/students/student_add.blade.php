@extends('layouts.master')

@section('title' , 'Add Student')

@section('this_page_links')
<!-- Bootstrap CSS
		============================================ -->
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
        <!-- -------------------------------------------- -->
        <!-- modals CSS
            ============================================ -->
        <link rel="stylesheet" href="{{asset('css/modals.css')}}">
        <!-- style CSS
            ============================================ -->
        <link rel="stylesheet" href="{{asset('style.css')}}">
        <!-- responsive CSS
            ============================================ -->
        <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
        <!-- modernizr JS
            ============================================ -->
        <script src="{{asset('js/vendor/modernizr-2.8.3.min.js')}}"></script>
        
        <style>
    
    
            .select-pure__select {
              align-items: center;
              background: #f9f9f8;
              border-radius: 4px;
              border: 1px solid rgba(0, 0, 0, 0.15);
              box-shadow: 0 2px 4px rgba(0, 0, 0, 0.04);
              box-sizing: border-box;
              color: #363b3e;
              cursor: pointer;
              display: flex;
              font-size: 16px;
              font-weight: 500;
              justify-content: left;
              min-height: 44px;
              padding: 5px 10px;
              position: relative;
              transition: 0.2s;
              width: 100%;
            }
      
            .select-pure__options {
              border-radius: 4px;
              border: 1px solid rgba(0, 0, 0, 0.15);
              box-shadow: 0 2px 4px rgba(0, 0, 0, 0.04);
              box-sizing: border-box;
              color: #363b3e;
              display: none;
              left: 0;
              max-height: 221px;
              overflow-y: scroll;
              position: absolute;
              top: 50px;
              width: 100%;
              z-index: 5;
              justify-content: left;
            }
      
            .select-pure__select--opened .select-pure__options {
              display: block;
            }
      
            .select-pure__option {
              background: #fff;
              border-bottom: 1px solid #e4e4e4;
              box-sizing: border-box;
              height: 44px;
              line-height: 25px;
              padding: 10px;
            }
      
            .select-pure__option--disabled {
              color: #e4e4e4;
            }
      
            .select-pure__option--selected {
              color: #e4e4e4;
              cursor: initial;
              pointer-events: none;
            }
      
            .select-pure__option--hidden {
              display: none;
            }
      
            .select-pure__selected-label {
              align-items: 'center';
              background: #5e6264;
              border-radius: 4px;
              color: #fff;
              cursor: initial;
              display: inline-flex;
              justify-content: 'center';
              margin: 5px 10px 5px 0;
              padding: 3px 7px;
              justify-content: left;
            }
      
            .select-pure__selected-label:last-of-type {
              margin-right: 0;
            }
      
            .select-pure__selected-label i {
              cursor: pointer;
              display: inline-block;
              margin-left: 7px;
              
            }
      
            .select-pure__selected-label img {
              cursor: pointer;
              display: inline-block;
              height: 18px;
              margin-left: 7px;
              width: 14px;
            }
      
            .select-pure__selected-label i:hover {
              color: #e4e4e4;
            }
      
            .select-pure__autocomplete {
              background: #f9f9f8;
              border-bottom: 1px solid #e4e4e4;
              border-left: none;
              border-right: none;
              border-top: none;
              box-sizing: border-box;
              font-size: 16px;
              outline: none;
              padding: 10px;
              width: 100%;
            }
      
            .select-pure__placeholder--hidden {
              display: none;
            }
    
            .hid{
                display: block;
            }
            .dis{
                display: none;
            }
            .custom-datatable-overright table tbody tr td {
                text-align: center !important;
                padding: 0px;
            }
    
            .btn-primary {
                background-color: #AE4C4C;
            }
    
            .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th{
                padding: 3px;
            }
    
            .bootstrap-table .table:not(.table-condensed), .bootstrap-table .table:not(.table-condensed) > tbody > tr > th, .bootstrap-table .table:not(.table-condensed) > tfoot > tr > th, .bootstrap-table .table:not(.table-condensed) > thead > tr > td, .bootstrap-table .table:not(.table-condensed) > tbody > tr > td, .bootstrap-table .table:not(.table-condensed) > tfoot > tr > td{
                padding: 3px;
            }
    
            form.example input[type=text] {
            padding: 10px;
            font-size: 17px;
            border: 1px solid grey;
            float: left;
            width: 80%;
            background: #f1f1f1;
            }
    
            /* Style the submit button */
            form.example button {
            float: left;
            width: 20%;
            padding: 10px;
            background: #AB4A4B;
            color: white;
            font-size: 17px;
            border: 1px solid grey;
            border-left: none; /* Prevent double borders */
            cursor: pointer;
            }
    
            form.example button:hover {
            background: #974244;
            }
    
            /* Clear floats */
            form.example::after {
            content: "";
            clear: both;
            display: table;
            }
    
    
        </style>
    
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
                                        <span class="bread-blod"> Add student </span>
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
        <form action="{{url('student')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('POST') }}
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
                                <input name="fullNameAr" type="text" class="form-control" placeholder="Student AR Name" value="{{old('fullNameAr')}}">
                                </div>
                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <label class="">student EN Name</label>
                                    <input name="fullNameEn" type="text" class="form-control" placeholder="student EN Name" value="{{old('fullNameEn')}}">
                                </div>
                                
                               
                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <label>Student Mobile</label>
                                    <div class="input-mark-inner mg-b-22">
                                        <input type="number" name="mobile" class="form-control" placeholder="Student Mobile" value="{{old('mobile')}}">
                                    </div>
                                </div>
                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <label>Student Whatsapp</label>
                                    <div class="input-mark-inner mg-b-22">
                                        <input type="number" name="whatsapp" class="form-control" placeholder="Student Whatsapp" value="{{old('whatsapp')}}">
                                    </div>
                                </div>
                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <label>Student Education</label>
                                    <div class="input-mark-inner mg-b-22">
                                        <input type="text" name="education" class="form-control" placeholder="Student Education" value="{{old('education')}}">
                                    </div>
                                </div>



                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <div class="input-mark-inner mg-b-22">
                                        <label class="">City Name</label>

                                        
                                     
                                        <select  name="cityId" class="select2" >

                                            <option value="">City Name</option>

                                            @foreach ($allcities as $city)
                                                <option value="{{$city->id}}" {{old('cityId') == $city->id ? 'select' : ''}} >{{$city->cityName}}</option>
                                            @endforeach
                                            
                                          
                                        </select>
                                    
                                     </div>
                                </div>

                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <div class="input-mark-inner mg-b-22">
                                        <label class="">Country Name</label>

                                        
                                     
                                        <select  name="countryId" class="select2" >

                                            <option value="">Country Name</option>

                                            @foreach ($allCountry as $Country)
                                                <option value="{{$Country->id}}" {{old('countryId') == $Country->id ? 'select' : ''}} >{{$Country->name}}</option>
                                            @endforeach
                                            
                                          
                                        </select>
                                    
                                     </div>
                                </div> 

                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <div class="input-mark-inner mg-b-22">
                                        <label class="">faculty Name</label>

                                        
                                     
                                        <select  name="facultyId" class="select2" >

                                            <option value="">faculty Name</option>

                                            @foreach ($allfaculty as $faculty)
                                                <option value="{{$faculty->id}}" {{old('facultyId') == $faculty->id ? 'select' : ''}} >{{$faculty->facultyName}}</option>
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
                                                <option value="{{$unversity->id}}" {{old('unversityId') == $unversity->id ? 'select' : ''}} >{{$unversity->unversityName}}</option>
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
                                                <option value="{{$nationality->id}}" {{old('nationalityId') == $nationality->id ? 'select' : ''}} >{{$nationality->nationalityName}}</option>
                                            @endforeach
                                            
                                          
                                        </select>
                                    
                                     </div>
                                </div>

                                <div>
                           
                                    <label>Student Status</label>
                                      <label class="radio-inline">
                                @foreach ($allstudentstatus as $studentstatus)
                                <input type="radio" name="studentStatusId" id="inlineRadio{{$studentstatus->id}}" value="{{$studentstatus->id}}"  {{ old('studentStatusId') == $studentstatus->id ? 'checked' : ''}}> {{$studentstatus->statusName}} 
                                @endforeach

                                      </label>
                                      


                                </div>

                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <div class="input-mark-inner mg-b-22">
                                        <label class="">Reach Source Name</label>

                                        
                                     
                                        <select  name="reachSourceId" class="select2" >

                                            <option value="">Reach Source Name</option>

                                            @foreach ($allreachsource as $reachsource)
                                                <option value="{{$reachsource->id}}" {{ old('reachSourceId') == $reachsource->id ? 'select' : '' }} >{{$reachsource->reachSourceText}}</option>
                                            @endforeach
                                            
                                          
                                        </select>
                                    
                                     </div>
                                </div>




                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <label>Student Email</label>
                                    <div class="input-mark-inner mg-b-22">
                                        <input type="email" name="email" class="form-control" placeholder="student email" value="{{old('email')}}">
                                    </div>
                                </div>
                                
                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <label>Student job</label>
                                    <div class="input-mark-inner mg-b-22">
                                        <input type="text" name="job" class="form-control" placeholder="Student job" value="{{old('job')}}">
                                    </div>
                                </div>

                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <label>Student company</label>
                                    <div class="input-mark-inner mg-b-22">
                                        <input type="text" name="company" class="form-control" placeholder="Student company" value="{{old('company')}}">
                                    </div>
                                </div>

                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <label>Student Address</label>
                                    <div class="input-mark-inner mg-b-22">
                                        <input type="text" name="address" class="form-control" placeholder="Student address" value="{{old('address')}}">
                                    </div>
                                </div>

                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <label>Student Birthdate</label>
                                    <div class="input-mark-inner mg-b-22">
                                        <input type="date" name="birthdate" class="form-control" placeholder="Student birthdate" value="{{old('birthdate')}}">
                                    </div>
                                </div>

                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <label>Student Facebook Account</label>
                                    <div class="input-mark-inner mg-b-22">
                                        <input type="text" name="facebookAccnt" class="form-control" placeholder="Student facebookAccnt" value="{{old('facebookAccnt')}}">
                                    </div>
                                </div>               
                                
                                <div class="form-group data-custon-pick" style="text-align:left;margin-top: 20px;">
                                    <label>Student Notes</label>
                                    <div class="input-mark-inner mg-b-22">
                                        
                                        <textarea class="form-control" placeholder="Student Notes" name="notes"> {{old('notes')}} </textarea>
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


        
        <!-- wow JS
            ============================================ -->
            <script src="{{asset('js/wow.min.js')}}"></script>
            <!-- price-slider JS
                ============================================ -->
            <script src="{{asset('js/jquery-price-slider.js')}}"></script>
            <!-- meanmenu JS
                ============================================ -->
            <script src="{{asset('js/jquery.meanmenu.js')}}"></script>
            <!-- owl.carousel JS
                ============================================ -->
            <script src="{{asset('js/owl.carousel.min.js')}}"></script>
            <!-- sticky JS
                ============================================ -->
            <script src="{{asset('js/jquery.sticky.js')}}"></script>
            <!-- scrollUp JS
                ============================================ -->
            <script src="{{asset('js/jquery.scrollUp.min.js')}}"></script>
            <!-- mCustomScrollbar JS
                ============================================ -->
            <script src="{{asset('js/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
            <script src="{{asset('js/scrollbar/mCustomScrollbar-active.js')}}"></script>
            <!-- metisMenu JS
                ============================================ -->
            <script src="{{asset('js/metisMenu/metisMenu.min.js')}}"></script>
            <script src="{{asset('js/metisMenu/metisMenu-active.js')}}"></script>
            <!-- morrisjs JS
                ============================================ -->
            <script src="{{asset('js/sparkline/jquery.sparkline.min.js')}}"></script>
            <script src="{{asset('js/sparkline/jquery.charts-sparkline.js')}}"></script>
            <script src="{{asset('js/sparkline/sparkline-active.js')}}"></script>
            <!-- calendar JS
                ============================================ -->
            <script src="{{asset('js/calendar/moment.min.js')}}"></script>
            <script src="{{asset('js/calendar/fullcalendar.min.js')}}"></script>
            <script src="{{asset('js/calendar/fullcalendar-active.js')}}"></script>
            <!-- plugins JS
                ============================================ -->
            <script src="{{asset('js/plugins.js')}}"></script>
            <!-- main JS
                ============================================ -->
            <script src="{{asset('js/main.js')}}"></script>
            <!-- tawk chat JS
                ============================================ -->
            <script src="{{asset('js/tawk-chat.js')}}"></script>
    
                <!-- selection filter -->
        <script src="{{asset('js/select.min.js')}}"></script>
        <script>
            var mySelect = new Select('#demo');
            var mySelect = new Select('#demo2');
        </script>
            <!-- duallistbox JS
           ============================================ -->
        <script src="{{asset('js/duallistbox/jquery.bootstrap-duallistbox.js')}}"></script>
        <script src="{{asset('js/duallistbox/duallistbox.active.js')}}"></script>
        <script src="{{asset('js/bundle.min.js')}}"></script>
    
        <script src="{{asset('js/select2/select2-active.js')}}"></script>
        <script src="{{asset('js/select2/select2.full.min.js')}}"></script>
        <script>
            $(function () {
              //Initialize Select2 Elements
              $('.select2').select2()
          
              //Initialize Select2 Elements
              $('.select2bs4').select2({
                theme: 'bootstrap4'
              })
    
          
            })
          </script>
@endsection