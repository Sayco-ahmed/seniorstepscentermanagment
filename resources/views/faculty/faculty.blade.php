@extends('layouts.master')

@section('title' , 'Faculty')

@section('this_page_links')
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- favicon
    ============================================ -->
<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
<!-- Google Fonts
    ============================================ -->
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
<!-- Bootstrap CSS
    ============================================ -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Bootstrap CSS
    ============================================ -->
<link rel="stylesheet" href="css/font-awesome.min.css">
<!-- owl.carousel CSS
    ============================================ -->
<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="css/owl.theme.css">
<link rel="stylesheet" href="css/owl.transitions.css">
<!-- animate CSS
    ============================================ -->
<link rel="stylesheet" href="css/animate.css">
<!-- normalize CSS
    ============================================ -->
<link rel="stylesheet" href="css/normalize.css">
<!-- meanmenu icon CSS
    ============================================ -->
<link rel="stylesheet" href="css/meanmenu.min.css">
<!-- main CSS
    ============================================ -->
<link rel="stylesheet" href="css/main.css">
<!-- educate icon CSS
    ============================================ -->
<link rel="stylesheet" href="css/educate-custon-icon.css">
<!-- morrisjs CSS
    ============================================ -->
<link rel="stylesheet" href="css/morrisjs/morris.css">
<!-- mCustomScrollbar CSS
    ============================================ -->
<link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
<!-- metisMenu CSS
    ============================================ -->
<link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
<link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
<!-- calendar CSS
    ============================================ -->
<link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
<link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
<!-- x-editor CSS
    ============================================ -->
<link rel="stylesheet" href="css/editor/select2.css">
<link rel="stylesheet" href="css/editor/datetimepicker.css">
<link rel="stylesheet" href="css/editor/bootstrap-editable.css">
<link rel="stylesheet" href="css/editor/x-editor-style.css">
<!-- normalize CSS
    ============================================ -->
<link rel="stylesheet" href="css/data-table/bootstrap-table.css">
<link rel="stylesheet" href="css/data-table/bootstrap-editable.css">
<!-- select2 CSS
    ============================================ -->
<link rel="stylesheet" href="css/select2/select2.min.css">
<!-- chosen CSS
    ============================================ -->
<link rel="stylesheet" href="css/chosen/bootstrap-chosen.css">
<!-- modals CSS
    ============================================ -->
<link rel="stylesheet" href="css/modals.css">
<!-- style CSS
    ============================================ -->
<link rel="stylesheet" href="style.css">
<!-- responsive CSS
    ============================================ -->
<link rel="stylesheet" href="css/responsive.css">
<!-- modernizr JS
    ============================================ -->
<script src="js/vendor/modernizr-2.8.3.min.js"></script>
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
        text-align: left;
    }

    .shadow {
        -webkit-box-shadow: 10px 10px 5px -9px rgba(0, 0, 0, 0.75);
        -moz-box-shadow: 10px 10px 5px -9px rgba(0, 0, 0, 0.75);
        box-shadow: 10px 10px 5px -9px rgba(0, 0, 0, 0.75);

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
                    <span class="bread-blod"> Faculty </span>
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
               
                            <h3 >Faculty Data</h3>
                            <button data-toggle="modal" data-target="#addFaculty" data-whatever="@mdo" class="btn_add_item">Add Faculty</button>


                                    <!-- بداية جزء الموديل الخاص باضافة المدينه -->
                            <div class="modal fade" id="addFaculty" tabindex="-1" role="dialog" aria-labelledby="addFacultyLabel">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                      <h4 class="modal-title" id="addFacultyLabel">New Faculty</h4>
                                    </div>
                                    <div class="modal-body">
                                      <form action="{{url('faculty')}}" method="post" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        {{ method_field('POST') }}
                                        {{-- <div class="form-group">
                                          <label for="Faculty-id" class="control-label">Faculty ID:</label>
                                          <input type="text" class="form-control" id="Faculty-id">
                                        </div> --}}
                                        <div class="form-group">
                                            <label for="Faculty-name" class="control-label">Faculty name:</label>
                                        <input type="text" class="form-control" id="Faculty-name" name="facultyName" value="{{old('facultyName')}}">
                                        </div>
                                        <div class="form-group">
                                           
                                            <div class="input-mark-inner mg-b-22">
                                                <label for="univ-name" class="control-label">University Name :</label>

                                                <select data-placeholder="Choose a University..." class="chosen-select" name="universityId">

                                                    <option value="">Select</option>
                                                    <option value="111"      @if(old('universityId') == "111") selected @endif>Cairo</option>
                                                    <option value="222"     @if(old('universityId') == "222") selected @endif>Fayoum</option>
                                                    <option value="333"  @if(old('universityId') == "333") selected @endif>Ain Shams</option>
                                                    <option value="444"     @if(old('universityId') == "444") selected @endif>Helwan</option>
                                                    <option value="555" @if(old('universityId') == "555") selected @endif>Bani Swaif</option>
                                                    <option value="666"      @if(old('universityId') == "666") selected @endif>Sueiz</option>
                                                    <option value="777"      @if(old('universityId') == "777") selected @endif>Sinai</option>
                                                    <option value="888"       @if(old('universityId') == "888") selected @endif>alex</option>
                                                   
                                                   
                                                </select>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light mg-b-15">Save</button>
                                        </div>
                                      </form>
                                    </div>

                                  </div>
                                </div>
                              </div>
                                    <!-- نهاية جزء الموديل الخاص باضافة المدينه -->

                            
                            <table class="table-striped" id="table" data-toggle="table" data-pagination="true"
                                data-search="true" data-show-columns="true" data-show-pagination-switch="true"
                                data-show-refresh="true" data-key-events="true" data-resizable="false"
                                data-cookie="true" data-cookie-id-table="saveId" data-show-export="true"
                                data-click-to-select="true" data-toolbar="#toolbar" style="direction:ltr;">
                                <thead>
                                    <tr>
                                        
                                        <th>Faculty Id</th>
                                        <th>Faculty Name</th>
                                        <th>University Name</th>
                                        
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @if ($faculty->count() > 0)
                                         @foreach ($faculty as $faclty)
                                    <tr>
                                       
                                        
                                        <td>{{ $faclty->id }}</td>
                                        <td>{{ $faclty->facultyName }}</td>
                                        <td>{{ $faclty->universityId }}</td>
                                       
                                        <td>
                                            <div class="product-buttons">
                                                <button  data-toggle="modal" data-target="#edtFaculty{{ $faclty->id }}" data-whatever="@mdo"
                                                    class="pd-setting-ed"><i class="fa fa-pencil-square-o"
                                                        aria-hidden="true"></i></button>
                                                
                                                <button data-toggle="modal" data-target="#del{{ $faclty->id }}" title="Trash"
                                                    class="pd-setting-ed"><i class="fa fa-trash-o"
                                                        aria-hidden="true"></i></button>
                                            </div>
                                        </td>
                                    </tr>

                                    <!-- بداية جزء الموديل الخاص بتعديل المدينه -->
                                    <div class="modal fade" id="edtFaculty{{ $faclty->id }}" tabindex="-1" role="dialog" aria-labelledby="addFacultyLabel">
                                        <div class="modal-dialog" role="document">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                              <h4 class="modal-title" id="editFacultyLabel">Edit Faculty</h4>
                                            </div>

                                            <form action="{{route('faculty.update' , $faclty->id  )}}" method="post" enctype="multipart/form-data">
                                                {{ csrf_field() }}
                                                {{ method_field('put') }}
                                            <div class="modal-body">
                                              <form>
        
                                                {{-- <div class="form-group">
                                                  <label for="Faculty-id" class="control-label">Faculty ID:</label>
                                                  <input type="text" class="form-control" id="Faculty-id">
                                                </div> --}}
                                                <div class="form-group">
                                                    <label for="Faculty-name" class="control-label">Faculty name:</label>
                                                    <input type="text" class="form-control" id="Faculty-name" name="facultyName" value="{{ $faclty->facultyName }}">
                                                </div>
                                                <div class="form-group">
                                                   
                                                    <div class="input-mark-inner mg-b-22">
                                                        <label for="univ-name" class="control-label">University Name :</label>
        
                                                        <select data-placeholder="Choose a University..." class="chosen-select" name="universityId">

                                                            <option value="" >Select</option>
                                                            <option value="111"      @if($faclty->universityId == "111") selected @endif>Cairo</option>
                                                            <option value="222"     @if($faclty->universityId == "222") selected @endif>Fayoum</option>
                                                            <option value="333"  @if($faclty->universityId == "333") selected @endif>Ain Shams</option>
                                                            <option value="444"     @if($faclty->universityId == "444") selected @endif>Helwan</option>
                                                            <option value="555" @if($faclty->universityId == "555") selected @endif>Bani Swaif</option>
                                                            <option value="666"      @if($faclty->universityId == "666") selected @endif>Sueiz</option>    
                                                            <option value="777"      @if($faclty->universityId == "777") selected @endif>Sinai</option> 
                                                            <option value="888"       @if($faclty->universityId == "888") selected @endif>alex</option>  
                                                    
                                                        </select>
                                                    </div>
                                                </div>
                                           
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                              <button type="submit" class="btn btn-primary waves-effect waves-light mg-b-15">Edit</button>
                                            </div>
                                               
                                              </form>
                                            </div>
                                            
                                          </div>
                                        </div>
                                      </div>
                                            <!-- نهاية جزء الموديل الخاص بتعديل المدينه -->
        
                                    <script>
                                        // سكريبت الخاص باضافة مدينة
                                      $('#addFaculty').on('show.bs.modal', function (event) {
                                        var button = $(event.relatedTarget) // Button that triggered the modal
                                        var recipient = button.data('whatever') // Extract info from data-* attributes
                                        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                                        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
                                        var modal = $(this)
                                        modal.find('.modal-title').text('New message to ' + recipient)
                                        modal.find('.modal-body input').val(recipient)
                                      })
        
                                        // سكريبت الخاص بالتعديل في مدينة
                                      $('#edtFaculty'{{ $faclty->id }}).on('show.bs.modal', function (event) {
                                        var button = $(event.relatedTarget) // Button that triggered the modal
                                        var recipient = button.data('whatever') // Extract info from data-* attributes
                                        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                                        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
                                        var modal = $(this)
                                        modal.find('.modal-title').text('New message to ' + recipient)
                                        modal.find('.modal-body input').val(recipient)
                                      })
                                    </script>
                                    <!--Delete-->
                                    <div id="del{{ $faclty->id }}" class="modal modal-edu-general fullwidth-popup-InformationproModal fade" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header header-color-modal bg-color-2">
                                                    <h4 class="modal-title" styleft">Delete Faculty</h4>
                                                    <div class="modal-close-area modal-close-df">
                                                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                                    </div>
                                                </div>
                                                <div class="modal-body">
                                                    <span class="educate-icon educate-danger modal-check-pro information-icon-pro"> </span>
                                                    <h2>{{ $faclty->facultyName }}</h2>
                                                    <h4>Do you want to delete this Faculty</h4>
                                                </div>
                                                <div class="modal-footer info-md">
                                                    <form action="{{route('faculty.destroy',$faclty->id)}}" method="post" style="display: inline-block">
                                                        {{csrf_field()}}
                                                        {{method_field('delete')}}
                                                        
                                                        <button type="submit">delete</button>
                                                    </form>
                                                    <a data-dismiss="modal" href="#">cancel</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/Delete-->


                                    @endforeach

                                    @else 
                                    <h2> There is no Faculty data yet </h2>
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

   
           
        <script src="js/wow.min.js"></script>
        <!-- price-slider JS
            ============================================ -->
        <script src="js/jquery-price-slider.js"></script>
        <!-- meanmenu JS
            ============================================ -->
        <script src="js/jquery.meanmenu.js"></script>
        <!-- owl.carousel JS
            ============================================ -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- sticky JS
            ============================================ -->
        <script src="js/jquery.sticky.js"></script>
        <!-- scrollUp JS
            ============================================ -->
        <script src="js/jquery.scrollUp.min.js"></script>
        <!-- mCustomScrollbar JS
            ============================================ -->
        <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
        <!-- metisMenu JS
            ============================================ -->
        <script src="js/metisMenu/metisMenu.min.js"></script>
        <script src="js/metisMenu/metisMenu-active.js"></script>
        <!-- data table JS
            ============================================ -->
        <script src="js/data-table/bootstrap-table.js"></script>
        <script src="js/data-table/tableExport.js"></script>
        <script src="js/data-table/data-table-active.js"></script>
        <script src="js/data-table/bootstrap-table-editable.js"></script>
        <script src="js/data-table/bootstrap-editable.js"></script>
        <script src="js/data-table/bootstrap-table-resizable.js"></script>
        <script src="js/data-table/colResizable-1.5.source.js"></script>
        <script src="js/data-table/bootstrap-table-export.js"></script>
        <!--  editable JS
            ============================================ -->
        <script src="js/editable/jquery.mockjax.js"></script>
        <script src="js/editable/mock-active.js"></script>
        <script src="js/editable/select2.js"></script>
        <script src="js/editable/moment.min.js"></script>
        <script src="js/editable/bootstrap-datetimepicker.js"></script>
        <script src="js/editable/bootstrap-editable.js"></script>
        <script src="js/editable/xediable-active.js"></script>
        <!-- Chart JS
            ============================================ -->
        <script src="js/chart/jquery.peity.min.js"></script>
        <script src="js/peity/peity-active.js"></script>
        <!-- chosen JS
            ============================================ -->
        <script src="js/chosen/chosen.jquery.js"></script>
        <script src="js/chosen/chosen-active.js"></script>
        <!-- select2 JS
            ============================================ -->
        <script src="js/select2/select2.full.min.js"></script>
        <script src="js/select2/select2-active.js"></script>
        <!-- tab JS
            ============================================ -->
        <script src="js/tab.js"></script>
        <!-- plugins JS
            ============================================ -->
        <script src="js/plugins.js"></script>
        <!-- main JS
            ============================================ -->
        <script src="js/main.js"></script>
        <!-- tawk chat JS
            ============================================ -->
        <script src="js/tawk-chat.js"></script>
    
@endsection



