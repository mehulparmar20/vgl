@extends('master')
@section('content')
<div class="container">
  <a class="btn btn-success" href="{{route('resume.create')}}">Add Form</a><br>
<table  class="table table-striped table-light table-bordered data_table" id="resumetable"><br>
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        {{-- <th scope="col">DOB</th> --}}
        <th scope="col">Designation</th>
        {{-- <th scope="col">Experience</th> --}}
        {{-- <th scope="col">Mobile</th> --}}
        {{-- <th scope="col">Email</th> --}}
        <th scope="col">Location</th>
        {{-- <th scope="col">Country</th> --}}
        {{-- <th scope="col">State</th> --}}
        {{-- <th scope="col">District</th> --}}
        <th scope="col">City</th>
        
        {{-- <th scope="col">profile</th> --}}
        <th scope="col">Resume</th>
        {{-- <th scope="col">Pincode</th> --}}
        {{-- <th scope="col">Qualification</th> --}}
        <th scope="col">Education</th>
        <th scope="col"width="40px">MySelf</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $row)
      <tr>
        <td scope="row">{{$row->id}}</td>
        <td>{{$row->first_name}}</td>
        <td>{{$row->last_name}}</td>
        {{-- <td>{{$row->dob}}</td> --}}
        <td>{{$row->designation}}</td>
        {{-- @dd($jobu) --}}
  {{-- <td> 
     @foreach($jobu as $j)
     @foreach($j as $c)
     {{$c->category}}
     @endforeach
     @endforeach 
  </td> --}}
        {{-- <td>{{$row->experience}}</td> --}}
        {{-- <td>{{$row->phone}}</td> --}}
        {{-- <td>{{$row->email}}</td> --}}
        <td>{{$row->location}}</td>
        {{-- <td>{{$row->country}}</td> --}}
        {{-- <td>{{@$row->countrydata->country_name}}</td> --}}
        {{-- <td>{{@$row->statedata->name}}</td> --}}
        {{-- <td>{{@$row->districtdata->district_name}}</td> --}}
        <td>{{@$row->citydata->city_name}}</td>
       
        {{-- <td>
       <img src="{{asset('storage/'.$row->profile) }}"width="50"height="50" 
       class="img img-responsive">
 {{-- {{$row->profile}} 
        </td> --}}
       <td>{{$row->resume}}</td>
        {{-- <td>{{$row->pincode}}</td> --}}
        {{-- <td>{{$row->qualification}}</td> --}}
        <td>{{$row->education}}</td>
        <td>{!!$row->summery!!}</td>
        <td>
          <a  href="{{route('view',$row->id) }}"><i class='bx bxs-show'>
             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16"style="color:black;">
            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
            </svg></i></a>
          <a  href="{{route('resume.edit',$row->id) }}"><i class='bx bxs-show'> 
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16"style="color:black;">
            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
            </svg></i></a>
          <a  href="{{route('resume-delete',$row->id) }}"><i class='bx bxs-show'> 
             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16"style="color:red;">
            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
            </svg></i></a>
        </td>
      </tr>
      @endforeach

    </tbody>
  </table>
</div>
</div>
@endsection
