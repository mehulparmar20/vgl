@extends('master')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<div class="container" >
  <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left"><br>
            <h4 class="m-0">Profile Show</h4>
        </div>
        <div class="pull-right">
            {{-- <a class="btn btn-primary" href="{{route('resume.index')}}"> Back</a> --}}
        </div>
    </div>
  </div>
  <br>

  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>First Name:</strong>
            
            {{$data->first_name}}
        </div>
    </div>
    {{-- <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Profile:</strong>
            <img src="{{asset('storage/'.$data->profile) }}"width="50"height="50" class="img img-responsive">
            {{-- {{$data->profile}}
          
        </div>
    </div> --}}
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Last Name:</strong>
            
            {{$data->last_name}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Position:</strong>
            
            {{$data->position}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Phone:</strong>
            
            {{$data->phone}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Email:</strong>
            
            {{$data->email}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Location:</strong>
            
            {{$data->location}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Country:</strong>
            
            {{$data->country}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>City:</strong>
            
            {{$data->city}}
        </div>
    </div>
   
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Postcode</strong>
            
            {{$data->postcode}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Relocate:</strong>
            
            {{$data->relocate}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Education:</strong>
            
            {{$data->education}}
        </div>
    </div>
     <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Skills:</strong>
            
            {{$data->skills}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Summery:</strong>
            
            {!!$data->summery!!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Resume:</strong>
            {{-- @dd($data) --}}
            {{$data->resume}}
          
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form group">
<a href="{{route('generatePDF',$data->id)}}" class="btn btn-success" >Download</a>
    </div>
    </div>

  </div>

</div></div>
@endsection


