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
      <a class="btn btn-success" href="{{route('resume.create')}}">Apply</a><br>
<table  class="table table-striped table-light table-bordered"id="jobtable"><br>
    <thead>
      <tr>
        
        <th scope="col">ID</th>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">Qualification</th>
        <th scope="col">Category</th>
        <th scope="col">Type</th>
        <th scope="col">Location</th>
        <th scope="col">Start Date</th>
        <th scope="col">End Date</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $row)
      <tr>
       
        <th scope="row">{{$row->id}}</th>
        <td>{{$row->title}}</td>
        <td>{!!$row->description!!}</td>
        <td>{{$row->qualify}}</td>
        <td>{{$row->category}}</td>
        <td>{{$row->type}}</td>
        <td>{{$row->location}}</td>
        <td>{{$row->startdate}}</td>
        <td>{{$row->enddate}}</td>
        <td>
          <a  href="{{url('/view1',$row->id) }}"><i class='bx bxs-show'>view</i></a>
          @if(Auth::check())

         
          <a  href="{{url('/job-edit',$row->id) }}"><i class='bx bxs-show'>Edit</i></a>
          <a  href="{{url('/job-delete',$row->id) }}"><i class='bx bxs-show'>Cancel</i></a>
       @endif
        </td>
      </tr>
      @endforeach

    </tbody>
  </table>
</div>
</div></div>
{{-- </body>
</html> --}}

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
  $(document).ready(function() {
    console.log('sss')
    $('#myTable').DataTable({
    dom: 'Bfrtip',
    buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
});
  });
</script>
@endsection