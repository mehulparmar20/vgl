  {{-- @dd($sort)  --}}
{{-- @extends('master')
@section('content')
<div class="container">
  
  <form action="{{route('search-store')}}" method="post">
    @csrf
    <input type="text" name="designation" placeholder="Enter Designation">
    <button class="btn btn-success" type="submit">Search</button>
</form>

<table  class="table table-striped table-light table-bordered data_table" id="resumetable"><br>
  <thead>
   
      <tr>
       
       <th scope="col">ID</th>
       <th scope="col">First Name</th> 
       <th scope="col">Last Name</th> 
       <th scope="col">Designation</th>
       <th scope="col">Location</th>
       <th scope="col">City</th>
       <th scope="col">Resume</th>
       <th scope="col">Education</th>
    
      </tr>
    </thead>
    <tbody>

 @foreach($sort as $row1)
 <tr>
 
    <td >{{$row1->id}}</td>
    
    <td>{{$row1->first_name}}</td>
    <td>{{$row1->last_name}}</td>
   
    <td>{{$row1->designation}}</td>
    
    <td>{{@$row1->location}}</td>
   
    <td>{{@$row1->citydata->city_name}}</td>
   
   
   <td>{{@$row1->resume}}</td>
   
    <td>{{@$row1->education}}</td>
 
    
  </tr>
 @endforeach
    </tbody>
</table>
</div>
</div>
@endsection --}}
