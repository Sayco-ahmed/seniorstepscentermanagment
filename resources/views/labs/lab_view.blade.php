@extends('layouts.master')

@section('title' , 'Course View')

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
                        
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pull-left">
                            <ul class="breadcome-menu pull-left" style="direction: ltr;">
                                <li>
                                    <a href="{{route('courses.index')}}"> All Courses </a><span class="bread-slash"> / </span>
                                </li>
                                <li>
                                    <span class="bread-blod"> Course View </span>
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
                            <div class="row res-ltr" >
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    
                                        <div class="profile-img">
                                            <img src="{{asset('uploads/courses/' . $requested_course->courseImg)}}" height="100%" width="100%" alt=""/>
                                        </div>
            
                                   
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="profile-info-inner">
                                      
                                        <div class="profile-details-hr">
                                            
                                            <div class="row text-left">
                                                
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="address-hr">
                                                        <p><b>Course EN Name</b><br /> {{$requested_course->courseEnName}} </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="address-hr ">
                                                        <p><b>Course EN Discription</b><br />{{$requested_course->courseEnDesc}}</p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="address-hr">
                                                        <p><b>Course EN Name</b><br /> {{$requested_course->courseArName}} </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="address-hr ">
                                                        <p><b>Course EN Discription</b><br />{{$requested_course->courseArDesc}}</p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="address-hr ">
                                                        <p><b>Course Hours</b><br /> {{$requested_course->courseHours}} </p>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="row">
            
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-left">
                                                    <div class="address-hr ">
                                                        <p><b>Course Cost</b><br />{{$requested_course->courseFees}}</p>
                                                    </div>
                                                </div>

                                                @if ($requested_course->coursePdf)
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-left">
                                                    <div class="address-hr ">
                                                        <p><b>Course PDF</b></p>

                                                    <a href="{{asset('uploads/courses/course_files/' . $requested_course->coursePdf)}}"> Download <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span> </a>
                                                        

                                                    </div>
                                                </div>
                                                @endif
                                                
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-left">
                                                    <div class="address-hr ">
                                                        <p><b>Course Status</b><br />{{$requested_course->active}}</p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-left" style="padding: 10px 3px;">
                                                    <div class="address-hr ">
                                                        <p><b>Notes : </b>{{$requested_course->courseNotes}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                
                                <a href="{{route('courses.index')}}" class="btn btn-primary waves-effect waves-light mg-b-15" >Back</a>
                                
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
                                    <li ><a href="#Rounds">Rounds</a></li>
                                    <li class="active"><a href="#Trainers"> Trainers</a></li>

                                </ul>
                                <div id="myTabContent" class="tab-content custom-product-edit st-prf-pro">

                                    <div class="product-tab-list tab-pane fade " id="Rounds">
                                        <div class="data-table-area mg-b-15">
                                            <div class="container-fluid">

                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="sparkline13-list">

                                                            <div class="sparkline13-graph">
                                                                <div
                                                                    class="datatable-dashv1-list custom-datatable-overright ">
                                                                    <table class="table-striped col-sm-12"
                                                                        id="table" data-toggle="table"
                                                                        data-pagination="true" data-search="true"
                                                                        data-show-columns="true"
                                                                        data-show-pagination-switch="true"
                                                                        data-show-refresh="true"
                                                                        data-key-events="true"
                                                                        data-resizable="false" data-cookie="true"
                                                                        data-cookie-id-table="saveId"
                                                                        data-show-export="true"
                                                                        data-click-to-select="true"
                                                                        data-toolbar="#toolbar"
                                                                        style="direction:ltr;">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>#</th>
                                                                                <th>Round</th>
                                                                                <th data-field="id">Start Date</th>
                                                                                <th>Trainer</th>
                                                                                <th>Branch</th>
                                                                                <th>Lab</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>1</td>
                                                                                <td>Front End Cairo</td>

                                                                                <td>19-09-2020</td>


                                                                                <td>Abdallah Khalaf</td>


                                                                                <td>Makram Branch</td>

                                                                                <td>Lab A</td>


                                                                            </tr>

                                                                            <tr>
                                                                                <td>1</td>
                                                                                <td>Front End Cairo</td>

                                                                                <td>19-09-2020</td>


                                                                                <td>Abdallah Khalaf</td>


                                                                                <td>Makram Branch</td>

                                                                                <td>Lab A</td>


                                                                            </tr>

                                                                            <tr>
                                                                                <td>1</td>
                                                                                <td>Front End Cairo</td>

                                                                                <td>19-09-2020</td>


                                                                                <td>Abdallah Khalaf</td>


                                                                                <td>Makram Branch</td>

                                                                                <td>Lab A</td>


                                                                            </tr>

                                                                            <tr>
                                                                                <td>1</td>
                                                                                <td>Front End Cairo</td>

                                                                                <td>19-09-2020</td>


                                                                                <td>Abdallah Khalaf</td>


                                                                                <td>Makram Branch</td>

                                                                                <td>Lab A</td>


                                                                            </tr>

                                                                            <tr>
                                                                                <td>1</td>
                                                                                <td>Front End Cairo</td>

                                                                                <td>19-09-2020</td>


                                                                                <td>Abdallah Khalaf</td>


                                                                                <td>Makram Branch</td>

                                                                                <td>Lab A</td>


                                                                            </tr>

                                                                            <tr>
                                                                                <td>1</td>
                                                                                <td>Front End Cairo</td>

                                                                                <td>19-09-2020</td>


                                                                                <td>Abdallah Khalaf</td>


                                                                                <td>Makram Branch</td>

                                                                                <td>Lab A</td>


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

                                                        
                                                  
                                                    <!-- Modal -->
                                                   

                                                 
                                                                        
                                                            <div class="sparkline13-graph">
                                                                <div
                                                                    class="datatable-dashv1-list custom-datatable-overright ">
                                                                    <table class="table-striped col-sm-12"
                                                                        id="table" data-toggle="table"
                                                                        data-pagination="true" data-search="true"
                                                                        data-show-columns="true"
                                                                        data-show-pagination-switch="true"
                                                                        data-show-refresh="true"
                                                                        data-key-events="true"
                                                                        data-resizable="false" data-cookie="true"
                                                                        data-cookie-id-table="saveId"
                                                                        data-show-export="true"
                                                                        data-click-to-select="true"
                                                                        data-toolbar="#toolbar"
                                                                        style="direction:ltr;">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>#</th>
                                                                                <th>Picture</th>

                                                                                <th>Trainer</th>
                                                                                <th>Mobile</th>
                                                                                <!-- <th>View Profile</th> -->
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>1</td>


                                                                                <td><img src="img/user/4.jpg" alt=""
                                                                                        srcset=""
                                                                                        style="border-radius: 50%;"
                                                                                        width="40px"
                                                                                        height="40px"></td>


                                                                                <td>Abdallah Khalaf</td>


                                                                                <td>01005323668</td>

                                                                                <!-- <td><button data-toggle="modal"
                                                                                        data-target="#vw"
                                                                                        class="pd-setting-ed"><i
                                                                                            class="fa fa-eye"
                                                                                            aria-hidden="true"></i></button>
                                                                                </td> -->


                                                                            </tr>

                                                                            <tr>
                                                                                <td>1</td>


                                                                                <td><img src="img/user/4.jpg" alt=""
                                                                                        srcset=""
                                                                                        style="border-radius: 50%;"
                                                                                        width="40px"
                                                                                        height="40px"></td>


                                                                                <td>Abdallah Khalaf</td>


                                                                                <td>01005323668</td>

                                                                                <!-- <td><button data-toggle="modal"
                                                                                        data-target="#vw"
                                                                                        class="pd-setting-ed"><i
                                                                                            class="fa fa-eye"
                                                                                            aria-hidden="true"></i></button>
                                                                                </td> -->


                                                                            </tr>

                                                                            <tr>
                                                                                <td>1</td>


                                                                                <td><img src="img/user/4.jpg" alt=""
                                                                                        srcset=""
                                                                                        style="border-radius: 50%;"
                                                                                        width="40px"
                                                                                        height="40px"></td>


                                                                                <td>Abdallah Khalaf</td>


                                                                                <td>01005323668</td>

                                                                                <!-- <td><button data-toggle="modal"
                                                                                        data-target="#vw"
                                                                                        class="pd-setting-ed"><i
                                                                                            class="fa fa-eye"
                                                                                            aria-hidden="true"></i></button>
                                                                                </td> -->


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
            <br>

        </form>
    </div>
</div>
@endsection

