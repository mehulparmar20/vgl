{{-- @extends('master')
@section('content') --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        {{-- <a class="btn btn-success" href="{{route('resume.index')}}">Add Table</a> --}}
            <form action="{{url('resume-store')}}" enctype="multipart/form-data" method="POST">
                @csrf
            <div class="row">
                <div class="col-xl ">
                    <div class="card">
                       
                        <div id="color1" class="card-header px-4 py-3">
                            <h5 class="nav mb-0"><b>Resume Form</b></h5>
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
                                        <input type="text" class="form-control" id="create_fname"name="first_name" 
                                        placeholder="Enter First Name" >
                                        @error('first_name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                    </div>
                                   
                                    <div class="col-md-5">
                                        <label for="last_name" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" id="create_lname"name="last_name" placeholder="Enter Last Name" >
                                        @error('last_name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                    </div>
                                </div>
    
    
                               <div class="row">
                                <div class="col-md-5">
                                   <br> <label for="position" class="form-label">Position</label>
                                    <select  type="text" class="form-control" name="position"id="create_position" 
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
                                    <input type="phone" class="form-control" id="create_phone"name="phone" placeholder="Enter phone no"  >
                                    @error('phone')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                </div></div>
                                
                                <div class="row">
                                <div class="col-md-5">
                                  <br>  <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="create_email"name="email" placeholder="Enter Email"  >
                                    @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                </div>
                               <div class="col-md-5">
                                    <br><label for="location" class="form-label">Location</label>
                                    <input type="text" class="form-control" id="create_location"name="location" placeholder="Enter Location" >
                                    @error('location')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                </div></div>
                                <div class="row">
                                <div class="col-md-5">
                                    <br><label for="country" class="form-label">Country</label>
                                    <input type="text" class="form-control" id="create_country"name="country" placeholder="Enter Country"  >
                                    @error('country')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                </div>
                                <div class="col-md-5">
                                    <br>   <label for="state" class="form-label">State</label>
                                    <input type="text" class="form-control" id="create_state"name="state" placeholder="Enter State"  >
                                    @error('city')
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
                                        <br>   <label for="city" class="form-label">City</label>
                                        <input type="text" class="form-control" id="create_city"name="city" placeholder="Enter City"  >
                                        @error('city')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                    </div>
                                <div class="col-md-5">
                                    <br> <label for="resume" class="form-label">Resume</label>
                                    <input type="file" class="form-control" 
                                    id="create_resume"name="resume" placeholder="Choose Resume"  >
                                    @error('resume')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                </div>
                               
                              </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <br><label for="postcode" class="form-label">Postcode</label>
                                    <input type="text" class="form-control" id="create_postcode"name="postcode" placeholder="Enter postcode"  >
                                    @error('postcode')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                </div>
                                <div class="col-md-5">
                                    <br><label for="bsValidation9" class="form-label">Willing You Relocate</label>
                                    
                                    <select  type="text" class="form-control" name="relocate"id="create_relocate" placeholder="Willing You Relocate"  >
                                    
                                        <option value="1">Yes</option>
                                    <option value="0">No</option>
                                    </select>
                                </div>
                             </div>
                                <div class="row">
                                    <div class="col-md-5">
                                        <br><label for="education" class="form-label">Education</label>
                                        <input type="text" class="form-control" name="education" id="create_education" placeholder="Enter Education" >
                                        @error('education')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                    </div>
                                <div class="col-md-5">
                                   <br> <label for="skills"class="form-label">Skills</label>
                                    <input type="text" class="form-control" name="skills"id="create_skills" placeholder="Enter skills" >
                                    @error('skills')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                </div>
                               
                                <div class="col-md-5">
                                    <br><label for="bsValidation13" class="form-label">Summary</label>
                                    <textarea class="form-control" id="create_summary"name="summery"  rows="3" ></textarea>
                                </div>
                                </div>
                                <div class="col-md-12">
                                   <br> <div class="d-md-flex d-grid align-items-center gap-3">
                                        <button type="submit" class="btn btn-md px-4" id="storresume">Submit</button>
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
</body>
</html>
    {{-- @endsection --}}