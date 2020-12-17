@extends('layouts.master')

@section('title' , 'Sutdent Round Option')

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
                                <a href="{{route('round.index')}}"> Rounds </a><span class="bread-slash"> / </span>
                                </li>
                                <li>
                                    <span class="bread-blod"> Student Round Options </span>
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
            <div class="">
              <div class="sparkline14-hd">
                <div class="main-sparkline14-hd">
                  <h1 style="text-align:left"> Student Name </h1>
                </div>
              </div>
              <div class="sparkline16-hd">
                <div class="main-sparkline16-hd">
                  <h1 style="text-align:left"> Round Name ( Front End Cairo GR-45 ) </h1>
                  <br />
                </div>
              </div>
              <div class="sparkline16-graph">
                <div class="date-picker-inner" style="text-align:left">


                  <div class="form-group data-custon-pick col-sm-12 col-md-4" style="text-align:left">
                    <label class="">Round Fees</label>
                    <input name="" type="text" class="form-control" placeholder="Round Fees " value="2750 LE" disabled>
                  </div>


                  <div class="form-group data-custon-pick col-sm-12 col-md-4" style="text-align:left">
                    <label class="">Round Paid</label>
                    <input name="" type="text" class="form-control" placeholder="Round Paid" value="750 LE" disabled>
                  </div>


                  <div class="form-group data-custon-pick col-sm-12 col-md-4" style="text-align:left">
                    <label>Round Remaining </label>
                    <input name="" type="text" class="form-control" placeholder="Round Remaining" value="2000 LE"
                      disabled>
                  </div>




                  <div class="form-group data-custon-pick  col-sm-12" style="text-align:left;margin-top: 20px;">
                    <label> Notes </label>
                    <div class="input-mark-inner mg-b-22">

                      <textarea class="form-control" placeholder=" Notes"
                        disabled> Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis sint provident, fugit itaque dolores expedita.</textarea>
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

    <div class="container">

      <div class="row">
        <div class=" col-xs-12" style="margin-top: 15px;">
          <div class="sparkline13-list">

            <div class="sparkline13-graph">
              <div class="datatable-dashv1-list custom-datatable-overright">

                <h3 style="text-align:left">Payment Table</h3>
                <button data-toggle="modal" data-target="#addpay" data-whatever="@mdo" class="btn_add_item">Add
                  Payment</button>


                <!-- بداية جزء الموديل الخاص باضافة المدينه -->
                <div class="modal fade" id="addpay" tabindex="-1" role="dialog" aria-labelledby="addpayLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="addcityLabel">New payment</h4>
                      </div>
                      <div class="modal-body">
                        <form>

                          <div class="form-group">
                            <label for="payment-date" class="control-label">Payment Date</label>
                            <input type="date" class="form-control" id="payment-date">
                          </div>
                          <div class="form-group">
                            <label for="amount" class="control-label">Amount (LE)</label>
                            <input type="number" class="form-control" id="amount">
                          </div>
                          <div class="form-group">
                            <label for="Paid-With" class="control-label">Paid With</label>
                            <div class="input-mark-inner mg-b-22">
                              <select data-placeholder="Choose a payment way " class="chosen-select">


                                <option value="">Select</option>
                                <option value="Cash">Cash</option>
                                <option value="Vodafone Cash">Vodafone Cash</option>
                                <option value="Afghanistan">Mobinil Cash</option>
                                <option value="Visa transfer">Visa transfer</option>
                                <option value="Meza">Meza</option>


                              </select>
                            </div>
                          </div>

                          <div class="form-group">
                            <label> Notes </label>
                            <div class="input-mark-inner mg-b-22">

                              <textarea class="form-control" placeholder=" Notes" style="height: 150px;"> </textarea>
                            </div>
                          </div>



                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary waves-effect waves-light mg-b-15">Save</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- نهاية جزء الموديل الخاص باضافة المدينه -->

                <!-- بداية جزء الموديل الخاص بتعديل المدينه -->
                <div class="modal fade" id="edtpay" tabindex="-1" role="dialog" aria-labelledby="addpayLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="addcityLabel">New payment</h4>
                      </div>
                      <div class="modal-body">
                        <form>

                          <div class="form-group">
                            <label for="payment-date" class="control-label">Payment Date</label>
                            <input type="date" class="form-control" id="payment-date">
                          </div>
                          <div class="form-group">
                            <label for="amount" class="control-label">Amount (LE)</label>
                            <input type="number" class="form-control" id="amount">
                          </div>
                          <div class="form-group">
                            <label for="Paid-With" class="control-label">Paid With</label>
                            <div class="input-mark-inner mg-b-22">
                              <select data-placeholder="Choose a payment way " class="chosen-select">


                                <option value="">Select</option>
                                <option value="Cash">Cash</option>
                                <option value="Vodafone Cash">Vodafone Cash</option>
                                <option value="Afghanistan">Mobinil Cash</option>
                                <option value="Visa transfer">Visa transfer</option>
                                <option value="Meza">Meza</option>


                              </select>
                            </div>
                          </div>

                          <div class="form-group">
                            <label> Notes </label>
                            <div class="input-mark-inner mg-b-22">

                              <textarea class="form-control" placeholder=" Notes" style="height: 150px;"> </textarea>
                            </div>
                          </div>



                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary waves-effect waves-light mg-b-15">Save</button>
                      </div>
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
                  $('#edtcity').on('show.bs.modal', function (event) {
                    var button = $(event.relatedTarget) // Button that triggered the modal
                    var recipient = button.data('whatever') // Extract info from data-* attributes
                    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
                    var modal = $(this)
                    modal.find('.modal-title').text('New message to ' + recipient)
                    modal.find('.modal-body input').val(recipient)
                  })
                </script>

                <table class="table-striped" id="table" data-toggle="table" data-pagination="true" data-search="true"
                  data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true"
                  data-key-events="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId"
                  data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar" style="direction: ltr;">
                  <thead>
                    <tr>
                      <th>#</th>

                      <th>Date</th>
                      <th>Amount</th>
                      <th>Paid With</th>
                      <th>Notes</th>
                      <th>Option</th>

                    </tr>
                  </thead>
                  <tbody>
                    <tr>

                      <td>1</td>

                      <td>19-09-2020</td>
                      <td>200 LE</td>
                      <td>Vodafone Cash</td>
                      <td>Lorem ipsum dolor sit amet consectetur</td>
                      <td>
                        <div class="product-buttons">
                          <button data-toggle="modal" data-target="#edtpay" data-whatever="@mdo"
                            class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>

                          <button data-toggle="modal" data-target="#delpayment" title="Trash" class="pd-setting-ed"><i
                              class="fa fa-trash-o" aria-hidden="true"></i></button>
                        </div>
                      </td>
                    </tr>
                    <tr>

                      <td>2</td>
                      <td>19-09-2020</td>
                      <td>200 LE</td>
                      <td>Vodafone Cash</td>
                      <td>Lorem ipsum dolor sit amet consectetur</td>
                      <td>
                        <div class="product-buttons">
                          <button data-toggle="modal" data-target="#edtpay" data-whatever="@mdo"
                            class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>

                          <button data-toggle="modal" data-target="#delpayment" title="Trash" class="pd-setting-ed"><i
                              class="fa fa-trash-o" aria-hidden="true"></i></button>
                        </div>
                      </td>
                    </tr>
                    <tr>

                      <td>3</td>
                      <td>19-09-2020</td>
                      <td>200 LE</td>
                      <td>Vodafone Cash</td>
                      <td>Lorem ipsum dolor sit amet consectetur</td>
                      <td>
                        <div class="product-buttons">
                          <button data-toggle="modal" data-target="#edtpay" data-whatever="@mdo"
                            class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>

                          <button data-toggle="modal" data-target="#delpayment" title="Trash" class="pd-setting-ed"><i
                              class="fa fa-trash-o" aria-hidden="true"></i></button>
                        </div>
                      </td>
                    </tr>



                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

        <div class=" col-xs-12" style="margin-top: 15px;">
          <div class="sparkline13-list">

            <div class="sparkline13-graph">
              <div class="datatable-dashv1-list custom-datatable-overright">

                <h3 style="text-align:left">Payment Schedual</h3>
                <button data-toggle="modal" data-target="#addsch" data-whatever="@mdo" class="btn_add_item">Add Payment
                  Schedual</button>


                <!-- بداية جزء الموديل الخاص باضافة المدينه -->
                <div class="modal fade" id="addsch" tabindex="-1" role="dialog" aria-labelledby="addschLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="addcityLabel">add payment Schedual</h4>
                      </div>
                      <div class="modal-body">
                        <form>

                          <div class="form-group">
                            <label for="payment-date" class="control-label">Payment Date</label>
                            <input type="date" class="form-control" id="payment-date">
                          </div>
                          <div class="form-group">
                            <label for="amount" class="control-label">Amount (LE)</label>
                            <input type="number" class="form-control" id="amount">
                          </div>
                          <div class="form-group">
                            <label for="Paid-With" class="control-label">Paid With</label>
                            <div class="input-mark-inner mg-b-22">
                              <select data-placeholder="Choose a payment way " class="chosen-select">


                                <option value="">Select</option>
                                <option value="Cash">Cash</option>
                                <option value="Vodafone Cash">Vodafone Cash</option>
                                <option value="Afghanistan">Mobinil Cash</option>
                                <option value="Visa transfer">Visa transfer</option>
                                <option value="Meza">Meza</option>


                              </select>
                            </div>
                          </div>

                          <div class="form-group">
                            <label> Notes </label>
                            <div class="input-mark-inner mg-b-22">

                              <textarea class="form-control" placeholder=" Notes" style="height: 150px;"> </textarea>
                            </div>
                          </div>



                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary waves-effect waves-light mg-b-15">Save</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- نهاية جزء الموديل الخاص باضافة المدينه -->

                <!-- بداية جزء الموديل الخاص بتعديل المدينه -->
                <div class="modal fade" id="edtpaysch" tabindex="-1" role="dialog" aria-labelledby="addpayLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="addcityLabel">edit payment schedual</h4>
                      </div>
                      <div class="modal-body">
                        <form>

                          <div class="form-group">
                            <label for="payment-date" class="control-label">Payment Date</label>
                            <input type="date" class="form-control" id="payment-date">
                          </div>
                          <div class="form-group">
                            <label for="amount" class="control-label">Amount (LE)</label>
                            <input type="number" class="form-control" id="amount">
                          </div>
                          <div class="form-group">
                            <label for="Paid-With" class="control-label">Paid With</label>
                            <div class="input-mark-inner mg-b-22">
                              <select data-placeholder="Choose a payment way " class="chosen-select">


                                <option value="">Select</option>
                                <option value="Cash">Cash</option>
                                <option value="Vodafone Cash">Vodafone Cash</option>
                                <option value="Afghanistan">Mobinil Cash</option>
                                <option value="Visa transfer">Visa transfer</option>
                                <option value="Meza">Meza</option>


                              </select>
                            </div>
                          </div>

                          <div class="form-group">
                            <label> Notes </label>
                            <div class="input-mark-inner mg-b-22">

                              <textarea class="form-control" placeholder=" Notes" style="height: 150px;"> </textarea>
                            </div>
                          </div>



                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary waves-effect waves-light mg-b-15">Save</button>
                      </div>
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
                  $('#edtcity').on('show.bs.modal', function (event) {
                    var button = $(event.relatedTarget) // Button that triggered the modal
                    var recipient = button.data('whatever') // Extract info from data-* attributes
                    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
                    var modal = $(this)
                    modal.find('.modal-title').text('New message to ' + recipient)
                    modal.find('.modal-body input').val(recipient)
                  })
                </script>

                <table class="table-striped" id="table" data-toggle="table" data-pagination="true" data-search="true"
                  data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true"
                  data-key-events="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId"
                  data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar" style="direction: ltr;">
                  <thead>
                    <tr>
                      <th>#</th>

                      <th>Date</th>
                      <th>Amount</th>
                      <th>Paid With</th>
                      <th>Notes</th>
                      <th>Option</th>

                    </tr>
                  </thead>
                  <tbody>
                    <tr>

                      <td>1</td>

                      <td>19-09-2020</td>
                      <td>200 LE</td>
                      <td>Vodafone Cash</td>
                      <td>Lorem ipsum dolor sit amet consectetur</td>
                      <td>
                        <div class="product-buttons">
                          <button data-toggle="modal" data-target="#edtpaysch" data-whatever="@mdo"
                            class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>

                          <button data-toggle="modal" data-target="#delpaymentsch" title="Trash"
                            class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                        </div>
                      </td>
                    </tr>
                    <tr>

                      <td>2</td>

                      <td>19-09-2020</td>
                      <td>200 LE</td>
                      <td>Vodafone Cash</td>
                      <td>Lorem ipsum dolor sit amet consectetur</td>
                      <td>
                        <div class="product-buttons">
                          <button data-toggle="modal" data-target="#edtpaysch" data-whatever="@mdo"
                            class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>

                          <button data-toggle="modal" data-target="#delpaymentsch" title="Trash"
                            class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                        </div>
                      </td>
                    </tr>
                    <tr>

                      <td>3</td>

                      <td>19-09-2020</td>
                      <td>200 LE</td>
                      <td>Vodafone Cash</td>
                      <td>Lorem ipsum dolor sit amet consectetur</td>
                      <td>
                        <div class="product-buttons">
                          <button data-toggle="modal" data-target="#edtpaysch" data-whatever="@mdo"
                            class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>

                          <button data-toggle="modal" data-target="#delpaymentsch" title="Trash"
                            class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                        </div>
                      </td>
                    </tr>



                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

        <div class=" col-xs-12" style="margin-top: 15px;">
          <div class="sparkline13-list">

            <div class="sparkline13-graph">
              <div class="datatable-dashv1-list custom-datatable-overright">

                <h3 style="text-align:left">Payment Withdrawl </h3>
                <button data-toggle="modal" data-target="#addpaywithdrawl" data-whatever="@mdo" class="btn_add_item">Add
                  Payment Withdrawl </button>


                <!-- بداية جزء الموديل الخاص باضافة المدينه -->
                <div class="modal fade" id="addpaywithdrawl" tabindex="-1" role="dialog"
                  aria-labelledby="addpaywithdrawlLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="addcityLabel">add payment Withdrawl </h4>
                      </div>
                      <div class="modal-body">
                        <form>

                          <div class="form-group">
                            <label for="payment-date" class="control-label">Payment Date</label>
                            <input type="date" class="form-control" id="payment-date">
                          </div>
                          <div class="form-group">
                            <label for="amount" class="control-label">Amount (LE)</label>
                            <input type="number" class="form-control" id="amount">
                          </div>
                          <div class="form-group">
                            <label for="Withdrawl-With" class="control-label">Withdrawl With</label>
                            <div class="input-mark-inner mg-b-22">
                              <select data-placeholder="Choose a Withdrawl way " class="chosen-select">


                                <option value="">Select</option>
                                <option value="Cash">Cash</option>
                                <option value="Vodafone Cash">Vodafone Cash</option>
                                <option value="Afghanistan">Mobinil Cash</option>
                                <option value="Visa transfer">Visa transfer</option>
                                <option value="Meza">Meza</option>


                              </select>
                            </div>
                          </div>

                          <div class="form-group">
                            <label> Notes </label>
                            <div class="input-mark-inner mg-b-22">

                              <textarea class="form-control" placeholder=" Notes" style="height: 150px;"> </textarea>
                            </div>
                          </div>



                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary waves-effect waves-light mg-b-15">Save</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- نهاية جزء الموديل الخاص باضافة المدينه -->

                <!-- بداية جزء الموديل الخاص بتعديل المدينه -->
                <div class="modal fade" id="edtpaywithdrawl" tabindex="-1" role="dialog" aria-labelledby="addpayLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="addcityLabel">edit payment Withdrawl</h4>
                      </div>
                      <div class="modal-body">
                        <form>

                          <div class="form-group">
                            <label for="payment-date" class="control-label">Payment Date</label>
                            <input type="date" class="form-control" id="payment-date">
                          </div>
                          <div class="form-group">
                            <label for="amount" class="control-label">Amount (LE)</label>
                            <input type="number" class="form-control" id="amount">
                          </div>
                          <div class="form-group">
                            <label for="Paid-With" class="control-label">Withdrawl With</label>
                            <div class="input-mark-inner mg-b-22">
                              <select data-placeholder="Choose a payment way " class="chosen-select">


                                <option value="">Select</option>
                                <option value="Cash">Cash</option>
                                <option value="Vodafone Cash">Vodafone Cash</option>
                                <option value="Afghanistan">Mobinil Cash</option>
                                <option value="Visa transfer">Visa transfer</option>
                                <option value="Meza">Meza</option>


                              </select>
                            </div>
                          </div>

                          <div class="form-group">
                            <label> Notes </label>
                            <div class="input-mark-inner mg-b-22">

                              <textarea class="form-control" placeholder=" Notes" style="height: 150px;"> </textarea>
                            </div>
                          </div>



                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary waves-effect waves-light mg-b-15">Save</button>
                      </div>
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
                  $('#edtcity').on('show.bs.modal', function (event) {
                    var button = $(event.relatedTarget) // Button that triggered the modal
                    var recipient = button.data('whatever') // Extract info from data-* attributes
                    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
                    var modal = $(this)
                    modal.find('.modal-title').text('New message to ' + recipient)
                    modal.find('.modal-body input').val(recipient)
                  })
                </script>

                <table class="table-striped" id="table" data-toggle="table" data-pagination="true" data-search="true"
                  data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true"
                  data-key-events="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId"
                  data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar" style="direction: ltr;">
                  <thead>
                    <tr>
                      <th>#</th>

                      <th>Date</th>
                      <th>Amount</th>
                      <th>Withdrawl With</th>
                      <th>Notes</th>
                      <th>Option</th>

                    </tr>
                  </thead>
                  <tbody>
                    <tr>

                      <td>1</td>

                      <td>19-09-2020</td>
                      <td>200 LE</td>
                      <td>Vodafone Cash</td>
                      <td>Lorem ipsum dolor sit amet consectetur</td>
                      <td>
                        <div class="product-buttons">
                          <button data-toggle="modal" data-target="#edtpaywithdrawl" data-whatever="@mdo"
                            class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>

                          <button data-toggle="modal" data-target="#delwithdrow" title="Trash" class="pd-setting-ed"><i
                              class="fa fa-trash-o" aria-hidden="true"></i></button>
                        </div>
                      </td>
                    </tr>
                    <tr>

                      <td>2</td>

                      <td>19-09-2020</td>
                      <td>200 LE</td>
                      <td>Vodafone Cash</td>
                      <td>Lorem ipsum dolor sit amet consectetur</td>
                      <td>
                        <div class="product-buttons">
                          <button data-toggle="modal" data-target="#edtpaywithdrawl" data-whatever="@mdo"
                            class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>

                          <button data-toggle="modal" data-target="#delwithdrow" title="Trash" class="pd-setting-ed"><i
                              class="fa fa-trash-o" aria-hidden="true"></i></button>
                        </div>
                      </td>
                    </tr>
                    <tr>

                      <td>3</td>

                      <td>19-09-2020</td>
                      <td>200 LE</td>
                      <td>Vodafone Cash</td>
                      <td>Lorem ipsum dolor sit amet consectetur</td>
                      <td>
                        <div class="product-buttons">
                          <button data-toggle="modal" data-target="#edtpaywithdrawl" data-whatever="@mdo"
                            class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>

                          <button data-toggle="modal" data-target="#delwithdrow" title="Trash" class="pd-setting-ed"><i
                              class="fa fa-trash-o" aria-hidden="true"></i></button>
                        </div>
                      </td>
                    </tr>



                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

        <div class=" col-xs-12" style="margin-top: 15px;">
          <div class="sparkline13-list">

            <div class="sparkline13-graph">
              <div class="datatable-dashv1-list custom-datatable-overright">

                <h3 style="text-align:left"> Student Request </h3>
                <button data-toggle="modal" data-target="#addstudentrequest" data-whatever="@mdo"
                  class="btn_add_item">Add Student Request </button>


                <!-- بداية جزء الموديل الخاص باضافة المدينه -->
                <div class="modal fade" id="addstudentrequest" tabindex="-1" role="dialog"
                  aria-labelledby="addstudentrequestLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="addcityLabel">Add Student Request </h4>
                      </div>
                      <div class="modal-body">
                        <form>

                          <div class="form-group">
                            <label for="payment-date" class="control-label">Request Date</label>
                            <input type="date" class="form-control" id="payment-date">
                          </div>

                          <div class="form-group">
                            <label for="Withdrawl-With" class="control-label">Request List</label>
                            <div class="input-mark-inner mg-b-22">
                              <select data-placeholder="Choose a request  " class="chosen-select">


                                <option value="">Select</option>
                                <option value="other">other</option>

                                <option value="complaint from Trainer">complaint from Trainer</option>
                                <option value="Hold">Hold</option>
                                <option value="Cancel">Cancel</option>
                                <option value="Change to another Course">Change to another Course</option>
                                <option value="Transfer Money to student">Transfer Money to student</option>
                                <option value="Need to know Course Schedual">Need to know Course Schedual</option>



                              </select>
                            </div>
                          </div>

                          <div class="form-group">
                            <label> Notes Of Request </label>
                            <div class="input-mark-inner mg-b-22">

                              <textarea class="form-control" placeholder=" description of student request"
                                style="height: 250px;"> </textarea>
                            </div>
                          </div>



                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary waves-effect waves-light mg-b-15">Save</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- نهاية جزء الموديل الخاص باضافة المدينه -->

                <!-- بداية جزء الموديل الخاص بتعديل المدينه -->
                <div class="modal fade" id="edtstudentrequest" tabindex="-1" role="dialog"
                  aria-labelledby="edtstudentrequestLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="addcityLabel">Edit Student Request </h4>
                      </div>
                      <div class="modal-body">
                        <form>

                          <div class="form-group">
                            <label for="payment-date" class="control-label">Request Date</label>
                            <input type="date" class="form-control" id="payment-date">
                          </div>

                          <div class="form-group">
                            <label for="Withdrawl-With" class="control-label">Request List</label>
                            <div class="input-mark-inner mg-b-22">
                              <select data-placeholder="Choose a request  " class="chosen-select">


                                <option value="">Select</option>
                                <option value="other">other</option>

                                <option value="complaint from Trainer">complaint from Trainer</option>
                                <option value="Hold">Hold</option>
                                <option value="Cancel">Cancel</option>
                                <option value="Change to another Course">Change to another Course</option>
                                <option value="Transfer Money to student">Transfer Money to student</option>
                                <option value="Need to know Course Schedual">Need to know Course Schedual</option>



                              </select>
                            </div>
                          </div>

                          <div class="form-group">
                            <label> Notes Of Request </label>
                            <div class="input-mark-inner mg-b-22">

                              <textarea class="form-control" placeholder=" description of student request"
                                style="height: 250px;"> </textarea>
                            </div>
                          </div>



                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary waves-effect waves-light mg-b-15">Save</button>
                      </div>
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
                  $('#edtcity').on('show.bs.modal', function (event) {
                    var button = $(event.relatedTarget) // Button that triggered the modal
                    var recipient = button.data('whatever') // Extract info from data-* attributes
                    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
                    var modal = $(this)
                    modal.find('.modal-title').text('New message to ' + recipient)
                    modal.find('.modal-body input').val(recipient)
                  })
                </script>

                <table class="table-striped" id="table" data-toggle="table" data-pagination="true" data-search="true"
                  data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true"
                  data-key-events="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId"
                  data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar" style="direction: ltr;">
                  <thead>
                    <tr>
                      <th>#</th>

                      <th>Date</th>
                      <th>Request</th>

                      <th>Notes</th>
                      <th>Option</th>

                    </tr>
                  </thead>
                  <tbody>
                    <tr>

                      <td>1</td>

                      <td>19-09-2020</td>
                      <td>Hold</td>

                      <td>Lorem ipsum dolor sit amet consectetur</td>
                      <td>
                        <div class="product-buttons">
                          <button data-toggle="modal" data-target="#edtstudentrequest" data-whatever="@mdo"
                            class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>

                          <button data-toggle="modal" data-target="#delstudentrequest" title="Trash"
                            class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                        </div>
                      </td>
                    </tr>
                    <tr>

                      <td>2</td>

                      <td>19-09-2020</td>
                      <td>Cancel</td>

                      <td>Lorem ipsum dolor sit amet consectetur</td>
                      <td>
                        <div class="product-buttons">
                          <button data-toggle="modal" data-target="#edtstudentrequest" data-whatever="@mdo"
                            class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>

                          <button data-toggle="modal" data-target="#delstudentrequest" title="Trash"
                            class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                        </div>
                      </td>
                    </tr>
                    <tr>

                      <td>3</td>

                      <td>19-09-2020</td>
                      <td>Hold</td>

                      <td>Lorem ipsum dolor sit amet consectetur</td>
                      <td>
                        <div class="product-buttons">
                          <button data-toggle="modal" data-target="#edtstudentrequest" data-whatever="@mdo"
                            class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>

                          <button data-toggle="modal" data-target="#delstudentrequest" title="Trash"
                            class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
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

    <!--Delete-->
    <div id="delpayment" class="modal modal-edu-general fullwidth-popup-InformationproModal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header header-color-modal bg-color-2">
            <h4 class="modal-title" style="text-align:left">Delete payment</h4>
            <div class="modal-close-area modal-close-df">
              <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
            </div>
          </div>
          <div class="modal-body">
            <span class="educate-icon educate-danger modal-check-pro information-icon-pro"> </span>
            <h2>payment Date</h2>
            <h2>payment Amount</h2>
            <h4>Do you want to delete this payment</h4>
          </div>
          <div class="modal-footer info-md">
            <a href="#">delete</a>
            <a data-dismiss="modal" href="#">cancel</a>

          </div>
        </div>
      </div>
    </div>


    <div id="delpaymentsch" class="modal modal-edu-general fullwidth-popup-InformationproModal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header header-color-modal bg-color-2">
            <h4 class="modal-title" style="text-align:left">Delete Payment Schedual</h4>
            <div class="modal-close-area modal-close-df">
              <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
            </div>
          </div>
          <div class="modal-body">
            <span class="educate-icon educate-danger modal-check-pro information-icon-pro"> </span>
            <h2>payment Date</h2>
            <h2>payment Amount</h2>
            <h4>Do you want to delete this payment</h4>
          </div>
          <div class="modal-footer info-md">
            <a href="#">delete</a>
            <a data-dismiss="modal" href="#">cancel</a>

          </div>
        </div>
      </div>
    </div>


    <div id="delwithdrow" class="modal modal-edu-general fullwidth-popup-InformationproModal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header header-color-modal bg-color-2">
            <h4 class="modal-title" style="text-align:left">Delete Withdrow</h4>
            <div class="modal-close-area modal-close-df">
              <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
            </div>
          </div>
          <div class="modal-body">
            <span class="educate-icon educate-danger modal-check-pro information-icon-pro"> </span>
            <h2>withdrow Date</h2>
            <h2> Amount</h2>
            <h4>Do you want to delete this withdrow</h4>
          </div>
          <div class="modal-footer info-md">
            <a href="#">delete</a>
            <a data-dismiss="modal" href="#">cancel</a>

          </div>
        </div>
      </div>
    </div>


    <div id="delstudentrequest" class="modal modal-edu-general fullwidth-popup-InformationproModal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header header-color-modal bg-color-2">
            <h4 class="modal-title" style="text-align:left">Delete student request</h4>
            <div class="modal-close-area modal-close-df">
              <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
            </div>
          </div>
          <div class="modal-body">
            <span class="educate-icon educate-danger modal-check-pro information-icon-pro"> </span>
            <h2>Request Date</h2>
            <h2>Request</h2>
            <h4>Do you want to delete this request</h4>
          </div>
          <div class="modal-footer info-md">
            <a href="#">delete</a>
            <a data-dismiss="modal" href="#">cancel</a>

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
        <!-- morrisjs JS
            ============================================ -->
        <script src="js/sparkline/jquery.sparkline.min.js"></script>
        <script src="js/sparkline/jquery.charts-sparkline.js"></script>
        <script src="js/sparkline/sparkline-active.js"></script>
        <!-- calendar JS
            ============================================ -->
        <script src="js/calendar/moment.min.js"></script>
        <script src="js/calendar/fullcalendar.min.js"></script>
        <script src="js/calendar/fullcalendar-active.js"></script>
        <!-- plugins JS
            ============================================ -->
        <script src="js/plugins.js"></script>
        <!-- main JS
            ============================================ -->
        <script src="js/main.js"></script>
        <!-- tawk chat JS
            ============================================ -->
        <script src="js/tawk-chat.js"></script>



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

@endsection