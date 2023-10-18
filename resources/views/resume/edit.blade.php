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
                                    <br> <label for="dob"class="form-label">DOB<span class="text text-danger">*</span></label>
                                     <input type="date" class="form-control" name="dob"id="create_dob" placeholder="Enter DOB" >
                                     @error('dob')
                                     <div class="text-danger">{{ $message }}</div>
                                 @enderror
                                 </div>
    
                                <div class="col-md-5">
                                   <br> <label for="position" class="form-label">Designation</label>
                                    <select  type="text" class="form-control" value="{{$data->designation}}" name="designation"id="update_designation" 
                                    placeholder="Enter Designation"  >
                                    <option value="Backend">Backend</option>
                                    <option value="Frontend">Frontend</option>
                                    <option value="Fullstack">Full Stack</option>
                                    </select>
                                    @error('position')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                </div></div>
                                <div class="row">
                                <div class="col-md-5">
                                    <br><label for="experience" class="form-label">Total Experience<span class="text text-danger">*</span></label>
                                    <input type="text" class="form-control" name="experience" value="{{$data->experience}}" id="create_experience" placeholder="Enter Experience" >
                                    @error('experience')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                </div>
                                <div class="col-md-5">
                                   <br> <label for="phone" class="form-label">Mobile No</label>
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
                                </div>
                                </div>
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
                                    <br><label for="postcode" class="form-label">Pincode</label>
                                    <input type="text" class="form-control" id="update_pincode"value="{{$data->pincode}}"name="pincode" placeholder="Enter Pincode"  >
                                    {{-- @error('pincode')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror --}}
                                </div>
                                    
                                <div class="col-md-5">
                                    <br><label for="postcode" class="form-label">Higher Qualification<span class="text text-danger">*</span></label>
                                    <input type="text" class="form-control" id="update_qualification"value="{{$data->qualification}}" name="qualification" placeholder="Enter qualification"  >
                                    @error('qualification')
                                    <div class="text-danger">{{ $message }}</div> 
                                    @enderror
                             </div>
                                </div>
                           
                                <div class="row">
                                    <div class="col-md-5">
                                        <br><label for="education" class="form-label">Education</label>
                                        <input type="text" class="form-control" name="education"value="{{$data->education}}" id="create_education" placeholder="Enter Education" >
                                        {{-- @error('education')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror --}}
                                    </div>
                                
                                <div class="col-md-5">
                                    <br><label for="bsValidation13" class="form-label">About My Self</label>
                                    <textarea class="form-control" id="update_summary"name="summery"  rows="3" >{{$data->summery}}</textarea>
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