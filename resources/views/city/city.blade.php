@extends('layouts.master')

@section('title' , 'All Cities')

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
                    <span class="bread-blod"> Cities </span>
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
               
                            <h3 style="text-align:left">Cities Data</h3>
                            <button data-toggle="modal" data-target="#addcity" data-whatever="@mdo" class="btn_add_item">Add City</button>


                                    <!-- بداية جزء الموديل الخاص باضافة المدينه -->
                            <div class="modal fade" id="addcity" tabindex="-1" role="dialog" aria-labelledby="addcityLabel">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                      <h4 class="modal-title" id="addcityLabel">New city</h4>
                                    </div>
                                    <form action="{{url('cities')}}" method="post" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        {{ method_field('POST') }}
                                    <div class="modal-body">

                                      

                                      
                                            <div class="form-group">
                                                <label for="city-name" class="control-label">City name:</label>
                                            <input type="text" class="form-control" id="city-name" name="cityName" value="{{old('cityName')}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="country-name" class="control-label">Country Name:</label>
                                                <div class="input-mark-inner mg-b-22">
                                                        <select data-placeholder="Choose a Country..." class="chosen-select" name="countryId">

                                                            <option value=""    {{ old('countryId') == '' ? 'selected' : ''}}>Select</option>
                                                            <option value="112" {{ old('countryId') == '' ? 'selected' : ''}}>United States</option>
                                                            <option value="113" {{ old('countryId') == '' ? 'selected' : ''}}>United Kingdom</option>
                                                            <option value="114" {{ old('countryId') == '' ? 'selected' : ''}}>Afghanistan</option>
                                                            <option value="115" {{ old('countryId') == '' ? 'selected' : ''}}>Aland Islands</option>
                                                            <option value="116" {{ old('countryId') == '' ? 'selected' : ''}}>Albania</option>
                                                            <option value="117" {{ old('countryId') == '' ? 'selected' : ''}}>Algeria</option>
                                                            
                                                        </select>
                                                </div>
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
                                    <!-- نهاية جزء الموديل الخاص باضافة المدينه -->

                                    <!-- بداية جزء الموديل الخاص بتعديل المدينه -->
    
                            <table class="table-striped" id="table" data-toggle="table" data-pagination="true"
                                data-search="true" data-show-columns="true" data-show-pagination-switch="true"
                                data-show-refresh="true" data-key-events="true" data-resizable="false"
                                data-cookie="true" data-cookie-id-table="saveId" data-show-export="true"
                                data-click-to-select="true" data-toolbar="#toolbar" style="direction: ltr;" >
                                <thead>
                                    <tr >
                                        
                                        <th>City Id</th>
                                        <th>City Name</th>
                                        
                                        
                                        <th>Country Name</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>


                                <tbody>



                                    @foreach ($cities as $city)
                                        <tr>
                                       
                                        
                                        <td>{{ $city->id }}</td>
                                        <td>{{ $city->cityName }}</td>
                                        <td>{{ $city->countryId }}</td>
                                        <td>
                                            <div class="product-buttons">
                                                <button  data-toggle="modal" data-target="#edtcity{{ $city->id }}" data-whatever="@mdo"
                                                    class="pd-setting-ed"><i class="fa fa-pencil-square-o"
                                                        aria-hidden="true"></i></button>
                                                
                                                <button data-toggle="modal" data-target="#del{{ $city->id }}" title="Trash"
                                                    class="pd-setting-ed"><i class="fa fa-trash-o"
                                                        aria-hidden="true"></i></button>
                                            </div>
                                        </td>
                                        </tr>


                                    <div class="modal fade" id="edtcity{{ $city->id }}" tabindex="-1" role="dialog" aria-labelledby="addcityLabel">
                                        <div class="modal-dialog" role="document">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                              <h4 class="modal-title" id="addcityLabel">Edit city</h4>
                                            </div>
        
                                            <form action="{{route('cities.update' , $city->id )}}" method="post" enctype="multipart/form-data">
                                                    {{ csrf_field() }}
                                                    {{ method_field('put') }}
                                                <div class="modal-body">
                                                
            
                                                    {{-- <div class="form-group">
                                                    <label for="city-id" class="control-label">City ID:</label>
                                                    <input type="text" class="form-control" id="city-id">
                                                    </div> --}}
                                                    <div class="form-group">
                                                    
                                                        <label for="city-name" class="control-label">City name:</label>
                                                        <input type="text" class="form-control" id="city-name" name="cityName" value="{{ $city->cityName }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="country-name" class="control-label">Country Name:</label>
                                                        <div class="input-mark-inner mg-b-22">
                                                            <select data-placeholder="Choose a Country..." class="chosen-select" name="countryId">
                                                                <option value="" >Select</option>
                                                                <option value="112" @if($city->countryId == "112") selected @endif>United States</option>
                                                                <option value="113" @if($city->countryId == "113") selected @endif>United Kingdom</option>
                                                                <option value="114" @if($city->countryId == "114") selected @endif>Afghanistan</option>
                                                                <option value="115" @if($city->countryId == "115") selected @endif>Aland Islands</option>
                                                                <option value="116" @if($city->countryId == "116") selected @endif>Albania</option>
                                                                <option value="117" @if($city->countryId == "117") selected @endif>Algeria</option>                                                    --}}
                                                            </select>
                                                        </div>
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
                                            <!-- نهاية جزء الموديل الخاص بتعديل المدينه -->
        
                                    
                                    <script>
                                        // سكريبت الخاص باضافة مدينة
                                      $('#addcity').on('show.bs.modal', function (event) {
                                        var button = $(event.relatedTarget) // Button that triggered the modal
                                        var recipient = button.data('whatever') // Extract info from data-* attributes
                                        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                                        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
                                        var modal = $(this)
                                        modal.find('.modal-title').text('New message to ' + recipient)
                                        modal.find('.modal-body input').val(recipient)
                                      })
        
                                        // سكريبت الخاص بالتعديل في مدينة
                                      $('#edtcity'{{ $city->id }}).on('show.bs.modal', function (event) {
                                        var button = $(event.relatedTarget) // Button that triggered the modal
                                        var recipient = button.data('whatever') // Extract info from data-* attributes
                                        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                                        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
                                        var modal = $(this)
                                        modal.find('.modal-title').text('New message to ' + recipient)
                                        modal.find('.modal-body input').val(recipient)
                                      })
                                    </script>
                                
                                    <div id="del{{ $city->id }}" class="modal modal-edu-general fullwidth-popup-InformationproModal fade" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header header-color-modal bg-color-2">
                                                    <h4 class="modal-title" style="text-align:left">Delete City</h4>
                                                    <div class="modal-close-area modal-close-df">
                                                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                                    </div>
                                                </div>
                                                <div class="modal-body">
                                                    <span class="educate-icon educate-danger modal-check-pro information-icon-pro"> </span>
                                                    <h2>{{ $city->cityName }}</h2>
                                                    <h4>Do you want to delete this city</h4>
                                                </div>
                                                <div class="modal-footer info-md">
                                                    <form action="{{route('cities.destroy',$city->id)}}" method="post" style="display: inline-block">
                                                        {{csrf_field()}}
                                                        {{method_field('delete')}}
                                                        
                                                        <button type="submit">delete</button>
                                                    </form>
                                                    <a data-dismiss="modal" href="#">cancel</a>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    @endforeach
                                    


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