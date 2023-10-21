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
    {{-- <a class="btn btn-success" href="{{route('resume.index')}}">Add Table</a> --}}
    <form action="{{url('job-update',$data->id)}}" enctype="multipart/form-data" method="POST">
        @csrf

        <div class="row">
            <div class="col-xl ">
                <div class="card">

                    <div id="color1" class="card-header px-4 py-3">
                        <h5 class="nav mb-0" style="color:white;"><b>Job Edit</b></h5>
                    </div>
                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif


                <!-- <div class="card-body">
                        <div class="col-7">
                            <label for="first_name">Job Title</label>
                            <input type="text" class="form-control" value="{{$data->title}}" id="create_title" name="title" placeholder="Enter Title Name">
                            @error('title')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-7">
                            <br><label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="edit_description" name="description" rows="3">{!!$data->description!!}</textarea>
                            @error('description')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-7">
                            <br> <label for="qualify" class="form-label">Higher Qualifiaction</label>
                            <input type="text" class="form-control" id="create_qualify" name="qualify" placeholder="Enter Qualification" value="{{$data->qualify}}">
                            @error('qualify')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                        </div>

                        <div class="col-7">
                            <label for="category" class="form-label">Job Category</label>
                            <input type="text" class="form-control" value="{{$data->category}}" id="update_category" name="category" placeholder="Enter Category Name">
                            @error('category')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-7">
                            <br><label for="bsValidation9" class="form-label">Job Type</label>

                            <select type="text" class="form-control" value="{{$data->type}}" name="type" id="create_type" placeholder="Job type">

                                <option value="fulltime">Full time</option>
                                <option value="parttime">Part time</option>
                                <option value="freelance">freelance</option>
                            </select>
                        </div>


                        <div class="col-7">
                            <br><label for="location" class="form-label">Location</label>
                            <input type="text" class="form-control" value="{{$data->location}}" id="create_location" name="location" placeholder="Enter Location">
                            @error('location')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-7">
                            <br><label for="location" class="form-label">Job Duration</label>
                            <br> <label for="startdate" class="form-label">Start Date</label>
                            <input type="date" class="form-control" id="create_startdate" value="{{$data->startdate}}" name="startdate" placeholder="Enter Startdate">
                            <br> <label for="enddate" class="form-label">End Date</label>
                            <br><input type="date" class="form-control" id="create_enddate" value="{{$data->enddate}}" name="enddate" placeholder="Enter Enddate">

                            {{-- @error('location')
                                    <div class="text-danger">{{ $message }}
                        </div>
                        @enderror --}}
                    </div>
                    <div class="col-md-12">
                        <br>
                        <div class="d-md-flex d-grid align-items-center gap-3">
                            <button type="submit" class="btn btn-md px-4" id="storejob">Update</button>
                        </div>
                    </div>

                </div> -->
















                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <label for="first_name">Job Title</label>
                            <input type="text" class="form-control" value="{{$data->title}}" id="create_title" name="title" placeholder="Enter Title Name">
                            @error('title')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-6">
                            <!-- <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="edit_description" name="description" rows="3">{!!$data->description!!}</textarea>
                            @error('description')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror -->
                            <br><label for="location" class="form-label">Location</label>
                            <input type="text" class="form-control" value="{{$data->location}}" id="create_location" name="location" placeholder="Enter Location">
                            @error('location')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <br> <label for="qualify" class="form-label">Higher Qualifiaction</label>
                            <input type="text" class="form-control" id="create_qualify" name="qualify" placeholder="Enter Qualification" value="{{$data->qualify}}">
                            @error('qualify')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                        </div>

                        <div class="col-6">
                            <br /><label for="category" class="form-label">Job Category</label>
                            <input type="text" class="form-control" value="{{$data->category}}" id="update_category" name="category" placeholder="Enter Category Name">
                            @error('category')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>





                    <div class="row">
                        <div class="col-6">
                            <br><label for="bsValidation9" class="form-label">Job Type</label>

                            <select type="text" class="form-control" value="{{$data->type}}" name="type" id="create_type" placeholder="Job type">

                                <option value="fulltime">Full time</option>
                                <option value="parttime">Part time</option>
                                <option value="freelance">freelance</option>
                            </select>
                        </div>
                        <div class="col-6">
                           

                         
                        <br><label for="location" class="form-label">Job Duration</label>
                        <label for="startdate" class="form-label">Start Date</label>
                        <input type="date" class="form-control" id="create_startdate" value="{{$data->startdate}}" name="startdate" placeholder="Enter Startdate">





                

                         
                        </div>

                    </div>

                </div>



                <div class="row" style="padding: 19px; margin-top: -30px;">

                      
                    <div class="col-6">

                        <br><label for="location" class="form-label">Job Duration</label>
                        <label for="enddate" class="form-label">End Date</label>
                        <br><input type="date" class="form-control" id="create_enddate" value="{{$data->enddate}}" name="enddate" placeholder="Enter Enddate">






                    </div>


                    <div class="col-6">
                         <br/><label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="edit_description" name="description" rows="3">{!!$data->description!!}</textarea>
                            @error('description')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                    </div>

                </div>


                <div class="row">
                    <div class="col-md-12">
                        <br>

                        <button type="submit" class="btn btn-success" id="storejob" style="margin-bottom: 15px !important; margin-left: 25px;">Update</button>


                    </div>
                </div>























            </div>
        </div>
</div>
</form>
<style>
    .card-header,
    .btn {
        background-color: #369f65;
    }
</style>
</div>
</div>
{{-- </body>
</html> --}}
@endsection