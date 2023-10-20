@extends('masterfront')
@section('content') 
<br>

    <div class="container">
        <a class="btn btn-success" href="{{route('welcome')}}" style="margin-bottom: 15px !important;">Jobs List</a>
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
                                        <label for="first_name" >First Name<span class="text text-danger">*</span></label>
                                        <input type="text" class="form-control" id="create_fname"name="first_name" 
                                        placeholder="Enter First Name" >
                                        @error('first_name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                    </div>
                                  
                                   <div class="col-md-5">
                                        <label for="last_name" class="form-label">Last Name<span class="text text-danger">*</span></label>
                                        <input type="text" class="form-control" id="create_lname"name="last_name" placeholder="Enter Last Name" >
                                        @error('last_name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                    </div>
                                </div>
    
                                <div class="row">
                                <div class="col-md-5">
                                    <br> <label for="dob"class="form-label">DOB</label>
                                     <input type="date" class="form-control" name="dob"id="create_dob" placeholder="Enter DOB" >
                                     @error('dob')
                                     <div class="text-danger">{{ $message }}</div>
                                 @enderror
                                 </div>
                       
                                <div class="col-md-5">
                                   <br> <label for="designation" class="form-label">Designation<span class="text text-danger">*</span></label>
                                    <select  multiple="multiple"type="text" class="form-control" 
                                    name="designation[]"id="create_designation" 
                                    placeholder="Enter Designation"  >
                                    <option value="Backend">Backend</option>
                                    <option value="Frontend">Frontend</option>
                                    <option value="Fullstack">Full Stack</option>
                                    <option value="Fullstack">Php Developer</option>
                                    <option value="Fullstack">Laravel Developer</option>
                                    </select>
                                    @error('designation')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                </div>
                                </div>
                                <div class="row">
                                <div class="col-md-5">
                                    <br><label for="experience" class="form-label">Total Experience<span class="text text-danger">*</span></label>
                                    <input type="text" class="form-control" name="experience" id="create_experience" placeholder="Enter Experience" >
                                    @error('experience')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                </div>
                                <div class="col-md-5">
                                   <br> <label for="phone" class="form-label">Mobile No<span class="text text-danger">*</span></label>
                                    <input type="phone" class="form-control" id="create_phone"name="phone" placeholder="Enter phone no"  >
                                    @error('phone')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                </div></div>
                                
                                <div class="row">
                                <div class="col-md-5">
                                  <br>  <label for="email" class="form-label">Email<span class="text text-danger">*</span></label>
                                    <input type="email" class="form-control" id="create_email"name="email" placeholder="Enter Email"  >
                                    @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                </div>
                               <div class="col-md-5">
                                    <br><label for="location" class="form-label">Location</label>
                                    <input type="text" class="form-control" id="create_location"name="location" placeholder="Enter Location" >
                                    {{-- @error('location')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror --}}
                                </div></div>
                               {{-- @dd($country) --}}
                                <div class="row">
                                    {{-- <div class="col-md-5">
                                        <label for="country" class="form-label">Country</label>
                                        <select  type="text" class="form-control" 
                                    name="country"id="create_country" 
                                    placeholder="Enter Country" >
                                   
                                    @foreach ($country as $data)
                                    <option value=""select>Choose below option</option>
                                    <option value="{{$data->id}}">{{$data->country_name}}</option>  
                                    @endforeach
                                  </select>
                                    </div> --}}
                                    {{-- @dd($state) --}}
                                <div class="col-md-5">
                                    <label for="state" class="form-label">State<span class="text text-danger">*</span></label>
                                    <select  type="text" class="form-control" 
                                    name="state" id="create_state" 
                                    placeholder="Enter State">
                                    {{-- @dd($state) --}}
                                    <option value=""select>Select Menu</option>
                                    @foreach ($state as $d)
                                  
                                    <option value="{{$d->state_id}}">{{$d->name}}</option>  
                                    @endforeach
                                    
                                    </select>
                                    @error('state')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
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
                                
                                   {{-- @dd($district) --}}
                                    <div class="col-md-5">
                                        <label for="city" class="form-label">District<span class="text text-danger">*</span></label>
                                        <select  type="text" class="form-control" 
                                    name="district"id="create_district" 
                                    placeholder="Enter District"  >
                                    <option value=""select>Select Menu</option>
                                    @foreach ($district as $data)
                                  
                                    <option value="{{$data->district_id}}">{{$data->district_name}}</option>  
                                    @endforeach
                                    
                                    </select>
                                    @error('district')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    {{-- @dd($city) --}}
                                    <div class="col-md-5"><br>
                                    <label for="city" class="form-label">City<span class="text text-danger">*</span></label>
                                    <select  type="text" class="form-control" 
                                name="city"id="create_city" 
                                placeholder="Enter City"  >
                                <option value=""select>Select Menu</option>
                                @foreach ($city as $data)
                              
                                <option value="{{$data->city_id }}">{{$data->city_name}}</option>  
                                @endforeach
                                
                                </select>
                                @error('city')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                    </div>
                                
                                <div class="col-md-5">
                                    <br> <label for="resume" class="form-label">Resume<span class="text text-danger">*</span></label>
                                    <input type="file" class="form-control" 
                                    id="create_resume"name="resume" placeholder="Choose Resume"  >
                                    <span class="text text-danger">Note: Upload pdf or Word</span>
                                    @error('resume')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                </div>
                               
                                </div>
                                <div class="row">
                                <div class="col-md-5">
                                    <br><label for="postcode" class="form-label">Pincode</label>
                                    <input type="text" class="form-control" id="create_pincode"name="pincode" placeholder="Enter Pincode"  >
                                    {{-- @error('pcode')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror --}}
                                </div>
                                    
                                <div class="col-md-5">
                                    <br><label for="postcode" class="form-label">Higher Qualification<span class="text text-danger">*</span></label>
                                    <input type="text" class="form-control" id="create_qualification"name="qualification" placeholder="Enter qualification"  >
                                    @error('qualification')
                                    <div class="text-danger">{{ $message }}</div> 
                                    @enderror
                             </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5">
                                        <br><label for="education" class="form-label">Education</label>
                                        <input type="text" class="form-control" name="education" id="create_education" placeholder="Enter Education" >
                                        {{-- @error('education')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror --}}
                                    </div>
                                    
                               
                                <div class="col-md-5">
                                    <br><label for="bsValidation13" class="form-label">About My Self</label>
                                    <textarea class="form-control" id="create_summary"name="summery"  rows="3" ></textarea>
                                </div>
                                
                               </div>
                                <div class="col-md-12">
                                    <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1"><a href="{{route('term')}}"> I agree to the terms and conditions</a></label>
                                      </div>
                                   <div class="d-md-flex d-grid align-items-center gap-3">
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

    @endsection