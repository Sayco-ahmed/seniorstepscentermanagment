@extends('layouts.master')

@section('title' , 'edit lab')


@section('this_page_links')
    	<!-- selection filter -->
	<link href="{{asset('css/select.min.css')}}" rel="stylesheet">
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
                                <a href="{{route('lab.index')}}"> All labs </a><span class="bread-slash"> / </span>
                                </li>
                                
                                <li>
                                    <span class="bread-blod"> edit lab </span>
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
        <form action="{{url('lab')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('POST') }}
            <div class="row res-ltr">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="sparkline16-list responsive-mg-b-30">
                        <div class="profile-img mg-b-23">
                            <img src="{{asset('uploads/lab/' . $requested_lab->labImg)}}" alt="" class="image-preview" />
                        </div>
                        <div class="file-upload-inner ts-forms mg-b-15">
                            <div class="input prepend-big-btn">
                           
                                <div class="file-button" style="background-color: transparent;">
                                  
                                <input type="file" name="labImg"  value="{{$requested_lab->labImg}}" class="image" >
                                </div>
                                <!-- onchange="document.getElementById('prepend-big-btn').value = this.value;" -->
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                    <div class="sparkline14-list">
                        <div class="sparkline14-hd">
                            <div class="main-sparkline14-hd">
                                <h1 style="text-align:left"> Lab Data </h1>
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
                                    <label>Lab Id</label>
                                    <div class="input-mark-inner mg-b-22">
                                        <input type="number" name="lab_Id" class="form-control" placeholder="lab Id">
                                    </div>
                                </div> --}}
                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <label>Lab number</label>
                                    <div class="input-mark-inner mg-b-22">
                                    <input type="number" name="labNumber" class="form-control" placeholder="lab number" value="{{$requested_lab->labNumber}}">
                                    </div>
                                </div>
                                <div class="form-group data-custon-pick">
                                           
                                    <div class="input-mark-inner mg-b-22">
                                      
                                   

                                        <div class="list" tabindex="-1">
                                            <div class="filter"><input style="display: none;" type="text"
                                                    placeholder="Filter options...">
                                            </div>
                                            
                                        </div>
                                        <select name="branchId" id="demo">

                                            <option value="">Choose Branch</option>

                                            @foreach ($branches as $branch)
                                                <option value="{{$branch->id}}" @if($requested_lab->branchId == $branch->id) selected @endif >{{$branch->branchName}}</option>                                              
                                            @endforeach
                                            
                                        
                                        </select> 
                                    </div>
                                </div>
                                
                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <label>PCs Number</label>
                                    <div class="input-mark-inner mg-b-22">
                                    <input type="number" name="pcsNumber" class="form-control" placeholder="PCs Number" value="{{$requested_lab->pcsNumber}}">
                                    </div>
                                </div>
                                
                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <label>Chairs Number</label>
                                    <div class="input-mark-inner mg-b-22">
                                    <input type="number" name="chairsNumber" class="form-control" placeholder="Chairs Number" value="{{$requested_lab->chairsNumber}}">
                                    </div>
                                </div>
                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <label>Additive Chairs</label>
                                    <div class="input-mark-inner mg-b-22">
                                        <input type="number" name="additiveChairs" class="form-control" placeholder="Additive Chairs" value="{{$requested_lab->additiveChairs}}" >
                                    </div>
                                </div>
                                <div class="form-group data-custon-pick" style="text-align:left">
                                    <label>Notes</label>
                                    <div class="input-mark-inner mg-b-22">
                                        
                                        <textarea class="form-control" placeholder="enter notes" name="notes"> {{$requested_lab->notes}} </textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="col-lg-6 col-lg-offset-3 col-md-6 col-lg-offset-3 col-sm-8 col-sm-offset-2 text-center ">
                                   
                <a href="{{route('lab.index')}}" class="btn btn-primary waves-effect waves-light mg-b-15" >Back</a>
            
                <button type="submit"  class="btn btn-primary waves-effect waves-light mg-b-15"> save </button>
           
            </div>
        </form>    


    </div>
</div>
@endsection


@section('this_page_scripts')
<script src="{{asset('js/select.min.js')}}"></script>
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

 var mySelect = new Select('#demo');
</script>
@endsection