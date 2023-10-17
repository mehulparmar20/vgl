@extends('master')
@section('content') 
<br>
    <div class="container">
        {{-- <a class="btn btn-success" href="{{route('job.index')}}">Jobs List</a> --}}
            <form action="{{url('resume-update',$data->id)}}" enctype="multipart/form-data" method="POST">
                @csrf
            <div class="row">
                <div class="col-xl ">
                    <div class="card">
                       
                        <div id="color1" class="card-header px-4 py-3">
                            <h5 class="nav mb-0"><b>Edit Resume Form</b></h5>
                        </div>
                        @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                         @endif
                        <div class="card-body">
                                <div class="row">
                                    <div class="col-md-5">
                                        <label for="first_name" >First Name</label>
                                        <input type="text" class="form-control" value="{{$data->first_name}}" id="update_fname"name="first_name" 
                                        placeholder="Enter First Name" >
                                        @error('first_name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                    </div>
                                   
                                    <div class="col-md-5">
                                        <label for="last_name" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" value="{{$data->last_name}}" id="update_lname"name="last_name" placeholder="Enter Last Name" >
                                        @error('last_name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                    </div>
                                </div>
    
    
                               <div class="row">
                                <div class="col-md-5">
                                   <br> <label for="position" class="form-label">Position</label>
                                    <select  type="text" class="form-control" value="{{$data->position}}" name="position"id="update_position" 
                                    placeholder="Enter Position"  >
                                    <option value="Backend">Backend</option>
                                    <option value="Frontend">Frontend</option>
                                    <option value="Fullstack">Full Stack</option>
                                    </select>
                                    @error('position')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                </div>
                                
                                <div class="col-md-5">
                                   <br> <label for="phone" class="form-label">Phone Number</label>
                                    <input type="phone" class="form-control"value="{{$data->phone}}" id="update_phone"name="phone" placeholder="Enter phone no"  >
                                    @error('phone')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                </div></div>
                                
                                <div class="row">
                                <div class="col-md-5">
                                  <br>  <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control"value="{{$data->email}}" id="update_email"name="email" placeholder="Enter Email"  >
                                    @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                </div>
                               <div class="col-md-5">
                                    <br><label for="location" class="form-label">Location</label>
                                    <input type="text" class="form-control" value="{{$data->location}}"id="update_location"name="location" placeholder="Enter Location" >
                                    @error('location')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                </div></div>
                                <div class="row">
                                    <div class="col-md-5">
                                        <br>   <label for="city" class="form-label">City</label>
                                        <input type="text" class="form-control" value="{{$data->city}}"id="update_city"name="city" placeholder="Enter City"  >
                                        @error('city')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                    </div>
                                <div class="col-md-5">
                                    <br>   <label for="state" class="form-label">State</label>
                                    <input type="text" class="form-control" value="{{$data->state}}" id="update_state"name="state" placeholder="Enter State"  >
                                    @error('state')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                </div>
                                
                                </div>
                               
                               {{-- <div class="col-md-5">
                                    <br><label for="profile" class="form-label">Profile</label>
                                    <input type="file" class="form-control" 
                                    id="create_profile"name="profile"
                                     placeholder="Choose Profile" >
                                    @error('profile')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                </div> --}}
                                <div class="row"> 
                                   
                                    <div class="col-md-5">
                                        <br><label for="country" class="form-label">Country</label>
                                        <input type="text" class="form-control" value="{{$data->country}}" id="update_country"name="country" placeholder="Enter Country"  >
                                        @error('country')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                    </div>
                                <div class="col-md-5">
                                    <br> <label for="resume" class="form-label">Resume</label>
                                    <input type="file" class="form-control" 
                                    id="update_resume"name="resume" value="{{$data->resume}}" placeholder="Choose Resume"  >
                                    @error('resume')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                </div>
                               
                              </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <br><label for="postcode" class="form-label">Postcode</label>
                                    <input type="text" class="form-control" value="{{$data->postcode}}" id="update_postcode"name="postcode" placeholder="Enter postcode"  >
                                    @error('postcode')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                </div>
                                <div class="col-md-5">
                                    <br><label for="bsValidation9" class="form-label">Willing You Relocate</label>
                                    
                                    <select  type="text" class="form-control"value="{{$data->relocate}}"
                                         name="relocate"id="update_relocate" placeholder="Willing You Relocate"  >
                                    
                                        <option value="1">Yes</option>
                                    <option value="0">No</option>
                                    </select>
                                </div>
                             </div>
                                <div class="row">
                                    <div class="col-md-5">
                                        <br><label for="education" class="form-label">Education</label>
                                        <input type="text" class="form-control"value="{{$data->education}}"
                                         name="education" id="update_education" placeholder="Enter Education" >
                                        @error('education')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                    </div>
                                <div class="col-md-5">
                                   <br> <label for="skills"class="form-label">Skills</label>
                                    <input type="text" class="form-control" value="{{$data->skills}}" name="skills"id="update_skills" placeholder="Enter skills" >
                                    @error('skills')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                </div>
                               
                                <div class="col-md-5">
                                    <br><label for="bsValidation13" class="form-label">Summary</label>
                                    <textarea class="form-control"  id="update_summary"name="summery"  rows="3" >{{$data->summery}}</textarea>
                                </div>
                                </div>
                                <div class="col-md-12">
                                   <br> <div class="d-md-flex d-grid align-items-center gap-3">
                                        <button type="submit" class="btn btn-md px-4" id="updateresume">Update</button>
                                    </div>
                                </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </form> 
     <style>
        .card-header,.btn  {
             background-color: #369f65;
         }
       
     </style>
    </div></div>

    @endsection