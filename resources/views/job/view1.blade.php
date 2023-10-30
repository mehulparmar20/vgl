
 @extends('masterfront')
@section('content') 
{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body> --}}
    <div class="container">
  {{-- <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left"><br>
            <h4 class="m-0">Job Details</h4>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{route('resume.create')}}">Apply Job</a>
        </div>
    </div>
  </div>
  <br>

  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Job Title:</strong>
            
            {{$data->title}}
        </div>
    </div>
  
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Description:</strong>
          {!!$data->description!!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Higher Qualification:</strong>
          {{$data->qualify}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Job Category:</strong>
            
            {{$data->category}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Job Type:</strong>
            
            {{$data->type}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Location:</strong>
            
            {{$data->location}}
        </div>
    </div>
</div> --}}





<div class="container">
 
    <div class="card" style="margin-top: 24px;">
      <div class="card-body">
      <div class="row">
      <div class="col-lg-12 margin-tb">
        <div class="d-flex justify-content-between align-items-center">
          <div class="mb-3">
            <h4 class="m-0">Job Details</h4>
          </div>
          <div>
            <a class="btn btn-success" href="{{route('apply.create',$data->id) }}">Apply Job</a>
          </div>
        </div>
      </div>
    </div>
    <br>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <strong> Job Position:</strong>
              {{ $data->title }}
            </div>
          </div>
  
          <div class="col-md-12">
            <div class="form-group">
              <strong>Description:</strong>
              {!! $data->description !!}
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <strong>Higher Qualification:</strong>
              {{ $data->qualify}}
            </div>
          </div>
  
          <div class="col-md-12">
            <div class="form-group">
              <strong>Job Category:</strong>
              {{ $data->category }}
            </div>
          </div>
  
          <div class="col-md-12">
            <div class="form-group">
              <strong>Job Type:</strong>
              {{ $data->type }}
            </div>
          </div>
  
          <div class="col-md-12">
            <div class="form-group">
              <strong>Location:</strong>
              {{ $data->location }}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  </div>




</div></div>
{{-- </body>
</html> --}}
@endsection


