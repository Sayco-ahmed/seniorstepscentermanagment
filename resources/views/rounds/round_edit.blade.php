@extends('layouts.master')

@section('title' , 'Edit round')

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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


<style>
    th {
        text-align: center;
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
                                    <span class="bread-blod"> Rounds Edit </span>
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
                    <div class="sparkline16-graph">
                        <div class="date-picker-inner" style="text-align:left">

                            @include('errors.errors')
                            <form action="{{route('round.update' , $requested_round->id)}}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                {{ method_field('put') }}
                            <div class="form-group data-custon-pick" style="text-align:left">
                                <div class="input-mark-inner mg-b-22">
                                    <label class="">Course Name</label>


                                    
                                    <select  name="courseId" class="select2" >

                                        

                                        @foreach ($allcourses as $course)
                                            <option value="{{$course->id}}" {{$requested_round->courseId == $course->id ? 'selected' : ''}} >{{$course->courseEnName}}</option>
                                        @endforeach
                                        
                                      
                                    </select>

                                </div>
                            </div>
                            <div class="form-group data-custon-pick" style="text-align:left">
                                <label class="">Round Name</label>
                                <input name="roundName" value="{{$requested_round->roundName}}" type="text" class="form-control" placeholder="Round Name">
                            </div>
                            <div class="form-group data-custon-pick" style="text-align:left">
                                <label class="">Round Fees</label>
                                <input name="roundFees" value="{{$requested_round->roundFees}}" type="number" class="form-control" placeholder="Round Fees">
                            </div>

                            <div class="form-group data-custon-pick" style="text-align:left">
                                <label>Round Start Date</label>
                                <div class="input-mark-inner mg-b-22">
                                    <input type="date"  name="roundStartDate" value="{{$requested_round->roundStartDate}}" class="form-control" placeholder="Round Start Date">
                                </div>
                            </div>
                            <div class="form-group data-custon-pick" style="text-align:left">
                                <label>Round End Date</label>
                                <div class="input-mark-inner mg-b-22">
                                    <input type="date"  name="roundEndDate" value="{{$requested_round->roundEndDate}}" class="form-control" placeholder="Round end Date">
                                </div>
                            </div>

                            {{-- <div class="form-group data-custon-pick" style="text-align:left">

                                <div class="sparkline10-graph">
                                    <div class="dual-list-box-area mg-b-15" style="direction:ltr">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                                    <div class="form-group">
                                                        <label>Assigned Trainers</label>
                                                        <select class="select2" multiple="multiple"
                                                            data-placeholder="Select a trainer"
                                                            style="width: 100%;">
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
                            </div>


                            <div class="form-group data-custon-pick" style="text-align:left">
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
                                    <!-- <table >
                                            <thead>
                                              <tr>

                                                <th>Round Day</th>
                                               
                                              </tr>
                                            </thead>
                                            <tbody id="showndv" ></tbody>
                                          </table> -->

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


                                    // shown.innerHTML += 
                                    // `<tr ondblclick="del(this)">
                                    //     <td>${day.value}</td>
                                    //     <td> ${from.value} </td>
                                    //     <td> ${till.value} </td>
                                    //     <td class="text-right py-0 align-middle">
                                    //       <div class="btn-group btn-group-sm">
                                    //         <button type="button" class="btn btn-danger" ><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span></button>


                                    //       </div>
                                    //     </td>
                                    //   </tr>`



                                }

                                function del(ref) {
                                    ref.remove();
                                }


                            </script> --}}

                            <div class="form-group data-custon-pick" >

                                <div class="input-mark-inner mg-b-22" >
                                    <label class="">Lab number</label>

                                    <select  name="labId" class="select2">
                                       
                                    @foreach ($alllabs as $lab)
                                    <option value="{{$lab->id}}" {{$requested_round->labId == $lab->id ? 'selected' : ''}}> {{$lab->labNumber}} </option>                                           
                                    @endforeach
                                       
                                    </select>
                                </div>
                            </div>




                            <div>
                               
                                <label>Round Status</label>
                                    <label class="radio-inline">
                                        <input type="radio" name="roundStatusId" id="inlineRadio1"  value="1" {{ $requested_round->roundStatusId == '1' ? 'checked' : ''}} > Active
                                      </label>
                                      <label class="radio-inline">
                                        <input type="radio" name="roundStatusId" id="inlineRadio2" value="2" {{ $requested_round->roundStatusId == '2' ? 'checked' : ''}} > Gropping
                                      </label>
                                      <label class="radio-inline">
                                        <input type="radio" name="roundStatusId" id="inlineRadio3" value="3" {{ $requested_round->roundStatusId == '3' ? 'checked' : ''}} > Not Active
                                      </label>


                            </div>
                            

                            <div class="form-group data-custon-pick" style="text-align:left">
                                <label>Notes</label>
                                <div class="input-mark-inner mg-b-22">

                                    <textarea class="form-control" placeholder="Round Notes" name="roundNotes"> {{$requested_round->roundNotes}} </textarea>
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
        </div>

        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area mt-t-30 mg-b-15" style="margin-top: 25px;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st analysis-progrebar-ctn">
                            <ul id="myTabedu1" class="tab-review-design" style="direction:ltr">
                                <li><a href="#Students">Students</a></li>
                                <li class="active"><a href="#Trainers"> Trainers</a></li>

                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit st-prf-pro">

                                <div class="product-tab-list tab-pane fade " id="Students">
                                    <div class="data-table-area mg-b-15">
                                        <div class="container-fluid">
                                            <form class="example col-xs-6 " action="action_page.php" style="margin-top: 25px;">
                                                <input type="text" placeholder="Search with student name or mobile" name="search">
                                                <button type="submit"><i class="fa fa-search"></i></button>
                                              </form>


                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="sparkline13-list">


                                                     
                                                        <div class="sparkline13-graph">
                                                            <div
                                                                class="datatable-dashv1-list custom-datatable-overright ">
                                                                <table class="table-striped col-sm-12" id="table1"
                                                                    data-toggle="table" data-pagination="true"
                                                                    data-search="true" data-show-columns="true"
                                                                    data-show-pagination-switch="true"
                                                                    data-show-refresh="true" data-key-events="true"
                                                                    data-resizable="false" data-cookie="true"
                                                                    data-cookie-id-table="saveId"
                                                                    data-show-export="true"
                                                                    data-click-to-select="true"
                                                                    data-toolbar="#toolbar" style="direction:ltr;">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>#</th>
                                                                            <th>Student EN Name</th>
                                                                            <th data-field="id">Student AR Name</th>
                                                                            <th>Mobile</th>
                                                                            <th>option</th>

                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>



                                                                        <tr>
                                                                            <td>1</td>
                                                                            <td>Ahmed SAyed</td>

                                                                            <td>احمد سيد</td>


                                                                            <td>01005323668</td>


                                                                            <td><a href="#"><button
                                                                                        data-toggle="tooltip"
                                                                                        title="View"
                                                                                        class="pd-setting-ed"><i
                                                                                            class="fa fa-eye"
                                                                                            aria-hidden="true"></i></button></a>
                                                                                <!--<button data-toggle="modal" data-target="#add" title="New" class="pd-setting-ed"><i class="fa fa-file" aria-hidden="true"></i></button>-->

                                                                                <button data-toggle="modal"
                                                                                    data-target="#del" title="Trash"
                                                                                    class="pd-setting-ed"><i
                                                                                        class="fa fa-trash-o"
                                                                                        aria-hidden="true"></i></button>
                                                                            </td>




                                                                        </tr>


                                                                    </tbody>



                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="product-tab-list tab-pane fade active in" id="Trainers">
                                    <div class="data-table-area mg-b-15">
                                        <div class="container-fluid">

                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="sparkline13-list">
                                                        <button type="button" class="btn btn-primary btn-sm"
                                                            data-toggle="modal" data-target="#myModal">
                                                            Add Trainer
                                                        </button>

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="myModal" tabindex="-1"
                                                            role="dialog" aria-labelledby="myModalLabel">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal"
                                                                            aria-label="Close"><span
                                                                                aria-hidden="true">&times;</span></button>
                                                                        <h4 class="modal-title" id="myModalLabel">
                                                                            Choose Trainer</h4>
                                                                    </div>
                                                                    <form action="" method="get">

                                                                        <div class="modal-body">
                                                                            <div class="chosen-select-single mg-b-20" style="direction:ltr;">
                                                                                <div class="row">
                                                                                    
                                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="form-group">
                                                                                            <div class="chosen-select-single mg-b-20">
                                                                                                <label>Choose Trainer </label>
                                                                                                <select data-placeholder="Choose a Trainer..." class="chosen-select" tabindex="-1">
                                                                                                    <option value="">Select</option>
                                                                                                    <option value="Khalaf">Abdallah Khalaf</option>
                                                                                                    <option value="Gamal">Mohamed Gamal</option>
                                                                                                    <option value="Ahmed">Ahmed</option> 
                                                                                                    <option value="Khalaf">Abdallah Khalaf</option>
                                                                                                    <option value="Gamal">Mohamed Gamal</option>
                                                                                                    <option value="Ahmed">Ahmed</option>
                                                                                                    <option value="Khalaf">Abdallah Khalaf</option>
                                                                                                    <option value="Gamal">Mohamed Gamal</option>
                                                                                                    <option value="Ahmed">Ahmed</option>
                                                                                                  
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                class="btn btn-default"
                                                                                data-dismiss="modal">Close</button>
                                                                            <button type="button"
                                                                                class="btn btn-primary">Add
                                                                                Trainer</button>
                                                                        </div>


                                                                    </form>

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <script>
                                                            $('#exampleModal').on('show.bs.modal', function (event) {
                                                                var button = $(event.relatedTarget) // Button that triggered the modal
                                                                var recipient = button.data('whatever') // Extract info from data-* attributes
                                                                // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                                                                // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
                                                                var modal = $(this)
                                                                modal.find('.modal-title').text('New message to ' + recipient)
                                                                modal.find('.modal-body input').val(recipient)
                                                            })
                                                        </script>

                                                        <div class="sparkline13-graph">
                                                            <div
                                                                class="datatable-dashv1-list custom-datatable-overright ">
                                                                <table class="table-striped col-sm-12" id="table"
                                                                    data-toggle="table" data-pagination="true"
                                                                    data-search="true" data-show-columns="true"
                                                                    data-show-pagination-switch="true"
                                                                    data-show-refresh="true" data-key-events="true"
                                                                    data-resizable="false" data-cookie="true"
                                                                    data-cookie-id-table="saveId"
                                                                    data-show-export="true"
                                                                    data-click-to-select="true"
                                                                    data-toolbar="#toolbar" style="direction:ltr;">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>#</th>
                                                                            <th>Trainer img</th>
                                                                            <th data-field="id">Trainer name</th>
                                                                            <th>Mobile</th>
                                                                            <th>Social Media</th>

                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>


                                                                        <tr>
                                                                            <td>1</td>
                                                                            <td><img src="img/user/4.jpg" alt=""
                                                                                    srcset=""
                                                                                    style="border-radius: 50%;"
                                                                                    width="40px" height="40px"></td>

                                                                            <td>Abdallah Khalaf</td>


                                                                            <td>01005323668</td>


                                                                            <td>
                                                                                <div id="socialbtn">
                                                                                    <a href="#"
                                                                                        class="fa fa-linkedin"></a>
                                                                                    <a href="#"
                                                                                        class="fa fa-facebook"></a>
                                                                                    <a href="#"
                                                                                        class="fa fa-youtube"></a>
                                                                                </div>
                                                                            </td>




                                                                        </tr>


                                                                    </tbody>



                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Delete-->
        <div id="del" class="modal modal-edu-general fullwidth-popup-InformationproModal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header header-color-modal bg-color-2">
                        <h4 class="modal-title" style="text-align:left">Delete Student</h4>
                        <div class="modal-close-area modal-close-df">
                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                        </div>
                    </div>
                    <div class="modal-body">
                        <span class="educate-icon educate-danger modal-check-pro information-icon-pro"> </span>
                        <h2>Student Name</h2>
                        <h4>Do you want to delete this Student</h4>
                    </div>
                    <div class="modal-footer info-md">
                        <a href="#">delete</a>
                        <a data-dismiss="modal" href="#">cancel</a>

                    </div>
                </div>
            </div>
        </div>
        <!--/Delete-->

        <!-- Modal -->
        <div class="modal fade" id="addstudent" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">
                            Add Student</h4>
                    </div>
                    <form action="" method="get">

                        <div class="modal-body">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <label class="">Student EN Name</label>
                                    <input name="Student EN Name" type="text" class="form-control"
                                        placeholder="Student EN Name">
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <label class="">Student AR Name</label>
                                    <input name="Student AR Name" type="text" class="form-control"
                                        placeholder="Student AR Name">
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <label class="">Student Email</label>
                                    <input name="Student Email" type="text" class="form-control"
                                        placeholder="Student Email">
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <label class="">Student Mobile</label>
                                    <input name="Student Mobile" type="text" class="form-control"
                                        placeholder="Student Mobile">
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <label class="">Student Whatsapp</label>
                                    <input name="Student Whatsapp" type="text" class="form-control"
                                        placeholder="Student Whatsapp">
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <label class="">Student Facebook AC</label>
                                    <input name="Student FB" type="text" class="form-control"
                                        placeholder="Student FB">
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <label class="">Student DOB</label>
                                    <input name="Student DOB" type="date" class="form-control"
                                        placeholder="Student DOB">
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <label class="">Student address </label>
                                    <input name="Student address" type="text" class="form-control"
                                        placeholder="Student address">
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <label class="">Student Education </label>
                                    <input name="Student Education" type="text" class="form-control"
                                        placeholder="Student Education">
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <label class="">Student University </label>
                                    <input name="Student University" type="text" class="form-control"
                                        placeholder="Student University">
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <label class="">Student Faculty </label>
                                    <input name="Student Faculty" type="text" class="form-control"
                                        placeholder="Student Faculty">
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <label class="">Student Nationality </label>
                                    <input name="Student Nationality" type="text" class="form-control"
                                        placeholder="Student Nationality">
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <label class="">Student Job </label>
                                    <input name="Student Job" type="text" class="form-control"
                                        placeholder="Student Job">
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <label class="">Student Company </label>
                                    <input name="Student Company" type="text" class="form-control"
                                        placeholder="Student Company">
                                </div>
                                <div class="col-xs-12 col-sm-12">
                                    <label class="">Student Image </label>
                                    <input name="Student image" type="file" class="form-control"
                                        placeholder="Student image">
                                </div>
                                <div class="col-xs-12 col-sm-12">
                                <label>Notes</label>
                                        
                                            
                                            <textarea class="form-control" placeholder="Student Notes"></textarea>
                                        
                                   
                                </div>
                            </div>
                           

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Add
                                Student</button>
                        </div>


                    </form>

                </div>
            </div>
        </div>




        <br>
        <div class="col-lg-6 col-lg-offset-3 col-md-6 col-lg-offset-3 col-sm-8 col-sm-offset-2 text-center ">

            <a href="Courses.html" class="btn btn-primary waves-effect waves-light mg-b-15">Back</a>
            <a href="Courses.html" class="btn btn-primary waves-effect waves-light mg-b-15">Save</a>

        </div>

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
    
    
    
    
    
        <!-- data table JS
            ============================================ -->
        <script src="{{asset('js/data-table/bootstrap-table.js')}}"></script>
        <script src="{{asset('js/data-table/tableExport.js')}}"></script>
        <script src="{{asset('js/data-table/data-table-active.js')}}"></script>
        <script src="{{asset('js/data-table/bootstrap-table-editable.js')}}"></script>
        <script src="{{asset('js/data-table/bootstrap-editable.js')}}"></script>
        <script src="{{asset('js/data-table/bootstrap-table-resizable.js')}}"></script>
        <script src="{{asset('js/data-table/colResizable-1.5.source.js')}}"></script>
        <script src="{{asset('js/data-table/bootstrap-table-export.js')}}"></script>
        <!--  editable JS
            ============================================ -->
        <script src="{{asset('js/editable/jquery.mockjax.js')}}"></script>
        <script src="{{asset('js/editable/mock-active.js')}}"></script>
        <script src="{{asset('js/editable/select2.js')}}"></script>
        <script src="{{asset('js/editable/moment.min.js')}}"></script>
        <script src="{{asset('js/editable/bootstrap-datetimepicker.js')}}"></script>
        <script src="{{asset('js/editable/bootstrap-editable.js')}}"></script>
        <script src="{{asset('js/editable/xediable-active.js')}}"></script>
        <!-- Chart JS
            ============================================ -->
        <script src="{{asset('js/chart/jquery.peity.min.js')}}"></script>
        <script src="{{asset('js/peity/peity-active.js')}}"></script>
        <!-- chosen JS
            ============================================ -->
        <script src="{{asset('js/chosen/chosen.jquery.js')}}"></script>
        <script src="{{asset('js/chosen/chosen-active.js')}}"></script>
    
        <!-- tab JS
            ============================================ -->
        <script src="{{asset('js/tab.js')}}"></script>
    
    
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
    
        <script>
    
            $('#table1').bootstrapTable({
    
                formatNoMatches: function () {
                    return '<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#addstudent">Add Student</button>';
                }
            });
        </script>
@endsection