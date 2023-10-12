@extends('master')
@section('content')
<a class="btn btn-success" href="{{route('resume.create')}}">Add Form</a><br>
<table  class="table table-striped table-light table-bordered"id="resumetable"><br>
    <thead>
      <tr>
        
        <th scope="col">ID</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Position</th>
        <th scope="col">Phone</th>
        <th scope="col">Email</th>
        <th scope="col">Location</th>
        <th scope="col">Country</th>
        <th scope="col">City</th>
        <th scope="col">State</th>
        {{-- <th scope="col">profile</th> --}}
        <th scope="col">Resume</th>
        <th scope="col">Postcode</th>
        <th scope="col">Relocate</th>
        <th scope="col">Education</th>
        <th scope="col">Skills</th>
        <th scope="col">Summery</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $row)
      <tr>
       
        <th scope="row">{{$row->id}}</th>
        <td>{{$row->first_name}}</td>
        <td>{{$row->last_name}}</td>
        <td>{{$row->position}}</td>
        <td>{{$row->phone}}</td>
        <td>{{$row->email}}</td>
        <td>{{$row->location}}</td>
        <td>{{$row->country}}</td>
        <td>{{$row->city}}</td>
        <td>{{$row->state}}</td>
        {{-- <td>
       <img src="{{asset('storage/'.$row->profile) }}"width="50"height="50" 
       class="img img-responsive">
 {{-- {{$row->profile}} 
        </td> --}}
       <td>{{$row->resume}}</td>
        <td>{{$row->postcode}}</td>
        <td>{{$row->relocate}}</td>
        <td>{{$row->education}}</td>
        <td>{{$row->skills}}</td>
        <td>{{$row->summery}}</td>
        <td>
          <a  href="{{route('view',$row->id) }}"><i class='bx bxs-show'>view</i></a>
        </td>
      </tr>
      @endforeach

    </tbody>
  </table>
</div>
@endsection