  {{-- @dd($sort)  --}}
@extends('master')
@section('content')
<div class="container">
  
  <form action="{{ route('search') }}" method="post" >
    @csrf
    <input type="text" name="designation" placeholder="Enter Designation">
    <button type="submit">Search</button>
</form>
{{-- @dd($sort)  --}}
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
        {{-- <th scope="col"width="40px">MySelf</th> --}}
       
      
      </tr>
    </thead>
    <tbody>
     

 @foreach($sort as $row1)
 <tr>
 
    <td scope="row">{{$row1->id}}</td>
    
    <td>{{@$row1->first_name}}</td>
    <td>{{@$row1->last_name}}</td>
   
    <td>{{@$row1->designation}}</td>
    
    <td>{{@$row1->location}}</td>
   
    <td>{{@$row1->citydata->city_name}}</td>
   
   
   <td>{{@$row1->resume}}</td>
   
    <td>{{@$row1->education}}</td>
    {{-- <td>{!!$row1->summery!!}</td> --}}
    
  </tr>
 @endforeach
    </tbody>
  </table>
</div>
</div>
@endsection
