@extends('layouts.master')

@section('title' , 'Round View')

@section('this_page_links')
<style>
    th {
        text-align: center;
    }

    .custom-datatable-overright table tbody tr td {
        text-align: center !important;
    }
    .btn-primary{
        background-color: #AE4C4C;
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
                                    <span class="bread-blod"> Rounds View </span>
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
        <form action="" method="post" enctype="multipart/form-data">

            <div class="row res-ltr">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sparkline14-list">
                        <div class="sparkline14-hd">
                            <div class="main-sparkline14-hd">
                                <h1 style="text-align:left"> Round Data </h1>
                            </div>
                        </div>
                        <div class="sparkline16-hd">
                            <div class="main-sparkline16-hd">
                                <h1 style="text-align:left"> Main Data </h1>
                                <br />
                            </div>
                        </div>
                        <div class="sparkline16-graph">
                            <div class="row res-ltr" >

                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="profile-img  ">
                                        <img src="{{$requested_round->course->image_path}}" alt=""/>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                                    <div class="profile-info-inner">
                                        
                                        <div class="profile-details-hr">
                                            
                                            <div class="row text-center">
                                                
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    <div class="address-hr">
                                                        <p><b>Course Name</b><br /> {{$requested_round->course->courseEnName}} </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    <div class="address-hr ">
                                                        <p><b>Round Name</b><br /> {{$requested_round->roundName}} </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    <div class="address-hr ">
                                                        <p><b>Round Fees</b><br /> {{$requested_round->roundFees}} </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    <div class="address-hr ">
                                                        <p><b>Round Start Date</b><br /> {{$requested_round->roundStartDate}} </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center">
                                                    <div class="address-hr ">
                                                        <p><b>Round End Date</b><br /> {{$requested_round->roundEndDate}} </p>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="row">
            
                                                
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center">
                                                    <div class="address-hr ">
                                                        <p><b>Assigned Trainers</b><br /> <ul>
                                                            
                                                            <li>
                                                                @foreach ($requested_round->trainers as $trainer)
                                                            <p>{{$trainer->trainer_en_name}}</p>
                                                                    
                                                                @endforeach
                                                            </li>
                                                            
                                                           

                                                        </ul> </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center">
                                                    <div class="address-hr ">
                                                        <p><b>Round Days</b><br /> <ul>
                                                            <li>
                                                                <p>Saturday from 10 am till 03 pm</p>
                                                            </li>
                                                            <li>
                                                                <p>Monday from 10 am till 03 pm</p>
                                                            </li>
                                                            <li>
                                                                <p>Wednesday from 10 am till 03 pm</p>
                                                            </li>
                                                        </ul> </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center">
                                                    <div class="address-hr ">
                                                        <p><b>Round Lab</b><br /> {{$requested_round->lab->labNumber}} </p>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center">
                                                    <div class="address-hr ">
                                                        <p><b>Status</b><br /> {{$requested_round->roundStatusId}} </p>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                                    <div class="address-hr ">
                                                        <p><b>Notes :</b><br /> {{$requested_round->roundNotes}} </p>
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
                                                                            

                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>1</td>
                                                                            <td>Ahmed SAyed</td>

                                                                            <td>احمد سيد</td>


                                                                            <td>01005323668</td>


                                                                            




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

            
           
        </form>
    </div>
</div>
@endsection

