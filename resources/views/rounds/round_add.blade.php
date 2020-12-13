@extends('layouts.master')

@section('title' , 'Add round')

@section('this_page_links')



    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
	<!-- Google Fonts
		============================================ -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
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
                                    <a href="{{route('round.index')}}"> Rounds </a><span class="bread-slash"> / </span>
                                </li>
                                <li>
                                    <span class="bread-blod"> Round Add </span>
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
      

            <div class="row res-ltr">
                {{-- <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="sparkline16-list responsive-mg-b-30">
                        <div class="profile-img mg-b-23">
                            <img src="img/items/00.jpg" alt="" />
                        </div>
                        <div class="file-upload-inner ts-forms mg-b-15">
                            <div class="input prepend-big-btn">
                           
                                <div class="file-button" style="background-color: transparent;">
                                  
                                    <input type="file" name="branch_image"  onchange="document.getElementById('prepend-big-btn').value = this.value;">
                                </div>
                                
                            </div>
                        </div>

                    </div>
                </div> --}}
                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                    <div class="sparkline14-list">
                        <div class="sparkline14-hd">
                            <div class="main-sparkline14-hd">
                                <h1 style="text-align:left"> Round Data </h1>
                            </div>
                        </div>
                        <div class="sparkline16-hd">
                            <div class="main-sparkline16-hd">
                                <h1 style="text-align:left">Main Data </h1>
                                <br />
                            </div>
                        </div>
                        @include('errors.errors')

                        <div class="sparkline16-graph">
                            <div class="date-picker-inner" style="text-align:left">
                                
                                <form action="{{url('round')}}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    {{ method_field('POST') }} 
                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <div class="input-mark-inner mg-b-22">
                                        <label class="">Course Name</label>

                                        
                                     
                                        <select  name="courseId" class="select2" >

                                            <option value="">Course Name</option>

                                            @foreach ($allcourses as $course)
                                                <option value="{{$course->id}}">{{$course->courseEnName}}</option>
                                            @endforeach
                                            
                                          
                                        </select>
                                    
                                     </div>
                                </div>
                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <label class="">Round Name</label>
                                <input type="text" class="form-control" placeholder="Round Name" name="roundName" value="{{old('roundName')}}">
                                </div>
                        
                               
                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <label>Round Start Date</label>
                                    <div class="input-mark-inner mg-b-22">
                                        <input type="date" class="form-control" placeholder="Round Start Date" name="roundStartDate" value="{{old('roundStartDate')}}">
                                    </div>
                                </div>
                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <label>Round End Date</label>
                                    <div class="input-mark-inner mg-b-22">
                                        <input type="date" class="form-control" placeholder="Round end Date" name="roundEndDate" value="{{old('roundEndDate')}}">
                                    </div>
                                </div>
{{-- 
                                <div class="form-group data-custon-pick" style="text-align:left">
                                    
                                    <div class="sparkline10-graph">
                                        <div class="dual-list-box-area mg-b-15" style="direction:ltr">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        
                                                        <div class="form-group">
                                                            <label>Assigned Trainers</label>
                                                            <select class="select2" multiple="multiple" data-placeholder="Select a trainer" style="width: 100%;">
                                                              <option>Abdallah Khalaf</option>
                                                              <option>Mohamed Gamal</option>
                                                              <option>Ahmed</option>
                                                              <option>Mohamed</option>
                                                              <option>Mahmoud</option>
                                                              
                                                            </select>
                                                          </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}


                                {{-- <div class="form-group data-custon-pick" style="text-align:left">
                                    <label>Choose Round Days</label>
                                    <div class="sparkline10-graph">
                                        <div class="dual-list-box-area mg-b-15" style="direction:ltr">
                                            <div class="container-fluid">
                                                <div class="row">

                                                        <div class="form-inline col-sm-12">
                                                            <div class="form-group  col-sm-12">
                                                              <label class="sr-only  col-sm-12" for="exampleInputAmount">Choose Round Days<</label>
                                                              <div class="input-group  col-sm-12">
                                                                <select name="" id="day" class="form-control  col-sm-4" style="width: 30%;">
                                                                    <option value="Saturday">Saturday</option>
                                                                    <option value="Sunday">Sunday</option>
                                                                    <option value="Monday">Monday</option>
                                                                    <option value="Tuesday">Tuesday</option>
                                                                    <option value="Wednesday">Wednesday</option>
                                                                    <option value="Thursday">Thursday</option>
                                                                    <option value="Friday">Friday</option>
                                                                </select>
                                                                <input type="time" id="from" class="form-control  col-sm-4" style="width: 30%;">
                                                                <input type="time" id="till" class="form-control  col-sm-4" style="width: 30%;">
                                                              </div>
                                                              <button onclick="post()" class="po btn btn-primary col-sm-4 col-sm-offset-4" > Add
                                                            </button>
                                                            </div>
                                                          
                                                        </div>
    


                                                      
                                                  

                                                   

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="roundnewdata">
    

                                        <select name="" multiple="" class="form-control" id="showndv">

                                            <option disabled="" value=""> Round days.... </option>

                                        </select>
                                    </div>
                                </div>
                                <script>




                                    var day = document.getElementById("day");

                                    var from = document.getElementById("from");

                                    var till = document.getElementById("till");





                                    var shown = document.getElementById("showndv");

                                    function post() {

                                        shown.innerHTML +=
                                            `
                                                <option  value="${day.value}" ondblclick="del(this)"> ${day.value} from ${from.value} till ${till.value} </option>
                                             
                                                
                                                
                                                `


                                    }

                                    function del(ref) {
                                        ref.remove();
                                    }


                                </script> --}}
                                <div class="form-group data-custon-pick " >

                                   
                                          
                                            
                                        
                                    <div class="input-mark-inner mg-b-22" >
                                        <label class="">Lab number</label>

                                        <select  name="labId" class="select2">
                                            <option value="">lab Name</option>
                                        @foreach ($alllabs as $lab)
                                        <option value="{{$lab->id}}" {{$lab->id == old('labId') ? 'selected' : ''}}> {{$lab->labNumber}} </option>                                           
                                        @endforeach
                                           
                                        </select>
                                    </div>
                                </div>
                                </div>


                              

                                <div>
                           
                                    <label>Round Status</label>
                                    <label class="radio-inline">
                                        <input type="radio" name="roundStatusId" id="inlineRadio1" value="1" {{'1' == old('roundStatusId') ? 'checked' : ''}}> Active
                                      </label>
                                      <label class="radio-inline">
                                        <input type="radio" name="roundStatusId" id="inlineRadio2" value="2" {{'2' == old('roundStatusId') ? 'checked' : ''}}> Gropping
                                      </label>
                                      <label class="radio-inline">
                                        <input type="radio" name="roundStatusId" id="inlineRadio3" value="3" {{'3' == old('roundStatusId') ? 'checked' : ''}}> Not Active
                                      </label>


                                </div>
                                
                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <label>Notes</label>
                                    <div class="input-mark-inner mg-b-22">
                                        
                                        <textarea class="form-control" placeholder="Round Notes" name="roundNotes"> {{old('roundNotes')}} </textarea>


                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-6 col-lg-offset-3 col-md-6 col-lg-offset-3 col-sm-8 col-sm-offset-2 text-center ">
                                   
                                <a href="{{route('round.index')}}" class="btn btn-primary waves-effect waves-light mg-b-15" >Back</a>
                            
                                <button type="submit"  class="btn btn-primary waves-effect waves-light mg-b-15"> save </button>
                           
                            </div>
                        </form>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
            <br>

    
    </div>
</div>
@endsection


@section('this_page_scripts')

<!-- jquery
		============================================ -->
        <script src="{{asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
        <!-- bootstrap JS
            ============================================ -->
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
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