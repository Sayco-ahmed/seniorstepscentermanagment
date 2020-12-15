
@extends('layouts.master')

@section('title' , 'Edit Users')

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

<!-- selection filter -->
<link href="{{asset('css/select.min.css')}}" rel="stylesheet">
<!-- -------------------------------------------- -->
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
                                <a href="{{route('user.index')}}"> User </a><span class="bread-slash"> / </span>
                                </li>
                                <li>
                                    <span class="bread-blod"> Users Edit </span>
                                </li>
                            </ul>
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
        <form action="{{route('user.update' , $requested_user->id)}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PUT') }}

            <div class="row res-ltr">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="sparkline16-list responsive-mg-b-30">
                        <div class="profile-img mg-b-23">
                            <img src="{{$requested_user->image_path}}" alt="" class="image-preview" />

                        </div>
                        <div class="file-upload-inner ts-forms mg-b-15">
                            <div class="input prepend-big-btn">

                                <div class="file-button" style="background-color: transparent;">
                                    <input type="file" name="userImg"  value="{{$requested_user->userImg}}" class="image" >

                                </div>
                                <!-- <input type="text" id="prepend-big-btn" placeholder="" autofocus type="button" > -->
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                    <div class="sparkline14-list">
                        <div class="sparkline14-hd">
                            <div class="main-sparkline14-hd">
                                <h1 style="text-align:left"> User Data </h1>
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

                                {{-- <div class="form-group data-custon-pick" style="text-align:left">
                                    <label>User Id</label>
                                    <div class="input-mark-inner mg-b-22">
                                        <input type="number" name="User_Id" class="form-control"
                                            placeholder="User Id">
                                    </div>
                                </div> --}}
                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <label>User Name</label>
                                    <div class="input-mark-inner mg-b-22">
                                        <input type="text" name="userName" value="{{$requested_user->userName}}" class="form-control"
                                            placeholder="User name">
                                    </div>
                                </div>
                                <div class="form-group data-custon-pick" style="text-align:left" id="passconta" style="position: relative">
                                    <label>Password</label>
                                    <input type="password" name="userPassword" value="{{$requested_user->userPassword}}" id="password"
                                        placeholder="Enter the password" class="form-control"><i class="glyphicon glyphicon-eye-open" id="togglePassword"></i>


                                    <script>
                                        const togglePassword = document.querySelector('#togglePassword');
                                        const password = document.querySelector('#password');
                                        togglePassword.addEventListener('click', function (e) {
                                            // toggle the type attribute
                                            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                                            password.setAttribute('type', type);
                                            // toggle the eye slash icon
                                            this.classList.toggle('glyphicon-eye-close');
                                        });
                                    </script>
                                </div>


                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <label>User Full Name</label>
                                    <div class="input-mark-inner mg-b-22">
                                        <input type="text" name="userFullName" value="{{$requested_user->userFullName}}" class="form-control"
                                            placeholder="Full Name">
                                    </div>
                                </div>
                                {{-- <div class="form-group data-custon-pick" style="text-align:left">
                                    <label>User Hire Date</label>
                                    <div class="input-mark-inner mg-b-22">
                                        <input type="date" name="lab_map_url" value="{{old('userFullName')}}" class="form-control"
                                            placeholder="Hire Date">
                                    </div>
                                </div> --}}

                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <label>User Mobile</label>
                                    <div class="input-mark-inner mg-b-22">
                                        <input type="number" name="userMobile" value="{{$requested_user->userMobile}}" class="form-control"
                                            placeholder="User Mobile">
                                    </div>
                                </div>
                                {{-- <div class="form-group data-custon-pick" style="text-align:left">
                                    <label>User Mobile 2</label>
                                    <div class="input-mark-inner mg-b-22">
                                        <input type="number" name="lab_map_url" class="form-control"
                                            placeholder="User Mobile 2">
                                    </div>
                                </div>
                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <label>User Email</label>
                                    <div class="input-mark-inner mg-b-22">
                                        <input type="email" name="lab_map_url" class="form-control"
                                            placeholder="User Email">
                                    </div>
                                </div>
                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <label>User Address</label>
                                    <div class="input-mark-inner mg-b-22">
                                        <input type="text" name="lab_address" class="form-control"
                                            placeholder="User Address">
                                    </div>
                                </div> --}}
                                <div class="form-group data-custon-pick">

                                    <div class="input-mark-inner mg-b-22">

                                        
                                            <div class="list" tabindex="-1">
                                                <div class="filter"><input style="display: none;" type="text"
                                                        placeholder="Filter options...">
                                                </div>
                                                
                                            </div>
                                            <select id="demo" name="branchId" >
                                            <option value=""  {{ '' == $requested_user->branchId ? 'selected' : ''}} >Choose Branch</option>

                                            @foreach ($allbranches as $branch)
                                            <option value="{{$branch->id}}" {{$branch->id == $requested_user->branchId ? 'selected' : ''}}> {{$branch->branchName}} </option> 
                                            @endforeach
                                               
                                            
                                            </select>
                                        
                                    </div>

                                </div>

                                <div class="form-group data-custon-pick">

                                    <div class="input-mark-inner mg-b-22">


                                        <div class="list" tabindex="-1">
                                            <div class="filter"><input style="display: none;" type="text"
                                                    placeholder="Filter options...">
                                            </div>
                                            
                                        </div>
                                        <select id="demo2" name="roleId" >
                                            <option value=""  {{ '' == $requested_user->roleId ? 'selected' : ''}} >Choose role</option>
                                            
                                            @foreach ($allroles as $role)
                                            <option value="{{$role->id}}" {{$role->id == $requested_user->roleId ? 'selected' : ''}}> {{$role->roleName}} </option> 
                                            @endforeach

                                            
                                        
                                        </select>
                                    </div>
                                </div>

                               


                                {{-- <div class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-primary waves-effect waves-light mg-b-15 active">
                                        <input type="radio" name="options" id="option1" checked> Active
                                    </label>
                                    <label class="btn btn-primary waves-effect waves-light mg-b-15">
                                        <input type="radio" name="options" id="option2"> interested
                                    </label>
                                    <label class="btn btn-primary waves-effect waves-light mg-b-15">
                                        <input type="radio" name="options" id="option3"> Not Active
                                    </label>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="col-lg-6 col-lg-offset-3 col-md-6 col-lg-offset-3 col-sm-8 col-sm-offset-2 text-center ">
                                   
                                <a href="{{route('user.index')}}" class="btn btn-primary waves-effect waves-light mg-b-15" >Back</a>
                            
                                <button type="submit"  class="btn btn-primary waves-effect waves-light mg-b-15"> save </button>
                           
            </div>
        </form>
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

                $(".image").change(function () {

                if (this.files && this.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('.image-preview').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
                }

                });

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