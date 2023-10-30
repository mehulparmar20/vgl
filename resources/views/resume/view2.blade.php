 @extends('master')
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
  <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left"><br>
            <h4 class="m-0">Cancel Resume Details</h4>
        </div>
        <div class="pull-right">
            {{-- <a class="btn btn-primary" href="{{route('welcome')}}">Apply Job</a> --}}
        </div>
    </div>
  </div>
  <br>
{{-- @dd($data) --}}
  {{-- <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Title:</strong>
            
            {{$data->title}}
        </div>
    </div>
  
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Description:</strong>
            
            {{$data->description}}
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
<table class="table table-striped table-light table-bordered" id="canceljob">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Designation</th>
             <th scope="col">Location</th>
             <th scope="col">State</th>
            <th scope="col">District</th>
            <th scope="col">City</th>
            <th scope="col">Qualification</th>
            <th scope="col"width="40px">MySelf</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $row)
        <tr>
            <td scope="row">{{$row->id}}</td>
            <td>{{$row->first_name}}</td>
            <td>{{$row->last_name}}</td>
            <td>{{$row->designation}}</td>
            <td>{{$row->location}}</td>
           <td>{{@$row->statedata->name}}</td>
            <td>{{@$row->districtdata->district_name}}</td>
            <td>{{@$row->citydata->city_name}}</td>
            <td>{{$row->education}}</td>
            <td>{!!$row->summery!!}</td>
            
        </tr>
        @endforeach
    </tbody>
</table>
</div></div>
{{-- </body>
</html> --}}
@endsection


