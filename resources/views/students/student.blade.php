
@extends('layouts.master')

@section('title' , 'All Students')
@section('this_page_links')
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
      .pagination-info {
        display: none !important;
      }

      .page-list {
        display: none !important;
      }

      .pagination ul li {
        float: left !important;
      }

      .search input:-ms-input-placeholder {
        color: white !important;
      }

      #table td,
      th {
        text-align: center;

      }

      .shadow {
        -webkit-box-shadow: 10px 10px 5px -9px rgba(0, 0, 0, 0.75);
        -moz-box-shadow: 10px 10px 5px -9px rgba(0, 0, 0, 0.75);
        box-shadow: 10px 10px 5px -9px rgba(0, 0, 0, 0.75);

      }
      .sales-report-stn-his button.product-btn-history, button.pd-setting-ed{
        background-color: darkgray;
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
                                        <span class="bread-blod"> Student </span>
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
<div class="data-table-area mg-b-15">
    <div class="container">

      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="sparkline13-list">

            <div class="sparkline13-graph">
              <div class="datatable-dashv1-list custom-datatable-overright">

                <h3 style="text-align:left">Students Data</h3>



                <div style="direction:ltr!important" class="text-left">
                    <a href="{{route('student.create')}}" class="btn btn-primary waves-effect waves-light mg-b-15">Add</a>

                </div>


                <table class="table-striped " id="table" data-toggle="table" data-pagination="true" data-search="true"
                  data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true"
                  data-key-events="true" data-resizable="false" data-cookie="true" data-cookie-id-table="saveId"
                  data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar" style="direction: ltr;">
                  <thead>

                    <tr>

                      
                      <th>Student Name</th>
                      <th>Student mobile</th>
                      <th>Student education</th>


                      <th>Student email</th>
                      <th>Student address</th>
                      <th>Options</th>

                    </tr>
                  </thead>
                  <tbody>
                        @if ( $student->count() > 0 )
                             @foreach ($student as $singlestudent)

                    <tr>


                    
                      <td>{{$singlestudent->fullNameEn}}</td>
                      <td>{{$singlestudent->mobile}}</td>
                      <td>{{$singlestudent->education}}</td>
                      <td>{{$singlestudent->email}}</td>
                      <td>{{$singlestudent->address}}</td>
                      <td> <a href="{{route('student.show' ,$singlestudent->id)}}"><button data-toggle="tooltip" title="View"
                        class="pd-setting-ed"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                    <!--<button data-toggle="modal" data-target="#add" title="New" class="pd-setting-ed"><i class="fa fa-file" aria-hidden="true"></i></button>-->
                    <a href="{{route('student.edit' , $singlestudent->id)}}"><button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i
                          class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                    <button data-toggle="modal" data-target="#del{{$singlestudent->id}}" title="Trash" class="pd-setting-ed"><i
                        class="fa fa-trash-o" aria-hidden="true"></i></button></td>

                    </tr>
                    <div id="del{{$singlestudent->id}}" class="modal modal-edu-general fullwidth-popup-InformationproModal fade" role="dialog">
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
                                    <h2> {{$singlestudent->fullNameEn}} </h2>
                                    
                                    <h4>Do you want to delete this Student</h4>
                                </div>
                                <div class="modal-footer info-md">


                                
                                    <button data-dismiss="modal" href="#">cancel</button>

                                    <form action="{{route('student.destroy',$singlestudent->id)}}" method="post" style="display: inline-block">
                                        {{csrf_field()}}
                                        {{method_field('delete')}}
                                        
                                        <button type="submit">delete</button>
                                    </form>

                                    
                                </div>
                            </div>
                        </div>
                        </div>
                    @endforeach
                    @else
                        
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="student-inner-std res-mg-b-30">
                            <h2> There is no Student Data Entered yet </h2>
                        </div>
                    </div>
        
        
                    @endif

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('this_page_scripts')
    
  
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
  <!-- select2 JS
		============================================ -->
  <script src="{{asset('js/select2/select2.full.min.js')}}"></script>
  <script src="{{asset('js/select2/select2-active.js')}}"></script>
  <!-- tab JS
		============================================ -->
  <script src="{{asset('js/tab.js')}}"></script>
  <!-- plugins JS
		============================================ -->
  <script src="{{asset('js/plugins.js')}}"></script>
  <!-- main JS
		============================================ -->
  <script src="{{asset('js/main.js')}}"></script>
  <!-- tawk chat JS
		============================================ -->
  <script src="{{asset('js/tawk-chat.js')}}"></script>
@endsection