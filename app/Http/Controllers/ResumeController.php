<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\DemoMail;
use App\Models\City;
use App\Models\Country;
use App\Models\District;
use App\Models\Job;
use App\Models\Resume;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ResumeController extends Controller
{
    public function index()
    {
        $data = Resume::orderBy('id','desc')
        
            ->where('delete_status', 1)
            ->with('countrydata')
            ->with('statedata')
            ->with('districtdata')
            ->with('citydata')
            ->get();
            // dd($data);
        // // $jobs = [];
        // foreach ($data as $resume) {
          
        //     $values = explode(', ', $resume->designation);//5,6
            
        //     $jobsForResume = Job::whereIn('id', $values)->get();//5,6 data from job
        //     // dd($resume->id);
        //     $jobu[$resume->id] = $jobsForResume;//resume chya id la job data give
        //     // dd($jobu);
        // }
        return view('resume.index', compact('data'));
    }
    
public function create()
{
    
    $country=Country::all();
    $state=State::all();
    // dd($state);
    $district=District::all();
    $city=City::all();
    $design=Job::select('category')->get();
//    dd($design);
 return view('resume.create',compact('country','state','district','city','design'));
}
public function store(Request $request)
{
//    dd($request); 
    $request->validate([
        // 'first_name' => 'required',
        // 'last_name' => 'required',
        // 'designation' => 'required',
        // 'phone' => 'required',
        // 'email' => 'required',
        // 'experience' => 'required|integer',
        // // 'country' => 'required',
        // 'city' => 'required',
        // 'district' => 'required',
        // 'state' => 'required',
        // 'pincode' => 'required',
        // 'qualification' => 'required',
        // // 'profile' => 'required|file|image|mimes:jpeg,png,jpg,gif|max:2048',
        // // 'resume' => 'required|file|mimes:pdf,jpg,jpeg,png,gif',
        // 'resume' => 'required|file|mimetypes:application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document'
        // // Define rules for other fields here
    ]);
    // dd($request);
    // dd($request->all());
    $resume=new Resume();
    $resume->first_name=$request->first_name;
    $resume->last_name=$request->last_name;
    //for multiple selection in dropdown

     $resume->designation=$request->designation;
    // dd($request);
    $designationString=$request->input('designation');
    $resume->designation= implode(', ',$designationString);
    //end multiple selection 
// dd($resume->designation);
    $resume->experience=$request->experience;
    $resume->phone=$request->phone;
    $resume->email=$request->email;
    $resume->location=$request->location;
    //image
    // $filename=time().".". $request->file('profile')->getClientOriginalExtension();
    // $request->file('profile')->storeAs('uploads',$filename);
    // dd($filename);
    //image end
    // if ($request->hasFile('profile')) {
    //     $file = $request->file('profile');
    //     $fileName = $file->getClientOriginalName(); 
    //     Storage::disk('public')->put($fileName, file_get_contents($file));
    // }
    // $resume->profile=$fileName;

    //pdf
    if ($request->hasFile('resume')) {
        $file = $request->file('resume');
        $fileName = $file->getClientOriginalName(); 
        Storage::disk('public')->put($fileName, file_get_contents($file));
    }
    $resume->resume=$fileName;    
    //end pdf
   
    // $resume->country=$request->country;
    $resume->state=$request->state;
    $resume->district=$request->district;
    $resume->city=$request->city;
    $resume->pincode=$request->pincode;
    $resume->qualification=$request->qualification;
    $resume->education=$request->education;
    $resume->dob=$request->dob;
    $resume->summery=$request->summery;
    // dd($resume);
    $resume->save();
    $email = 'veravalonline@gmail.com';
    $mailData=[
        'title'=>'Mail From VeravalOnline',
        'body'=>'This is for Resume Created Successfully',

    ];
    Mail::to($email)->send(new DemoMail($mailData));
    // dd('send');
    // return redirect()->route('resume.index')->with('success', 'Resume has been saved successfully.');
    return back()->with('success', 'Resume has been submitted succesfully!');
}
public function view($id)
{
    
    $data=Resume::find($id);
    // dd($data);
    return view('view',compact('data'));
}
public function edit($id)
{
    $data = Resume::with('countrydata','statedata','citydata','districtdata')->find($id);
    //  dd($data);
    $country=Country::all();
    $state=State::all();
    $district=District::all();
    $city=City::all();
    return view('resume.edit',compact('data','country','state','district','city'));
}
public function update(Request $request,$id)
{
    $data=Resume::find($id);
    $data->first_name=$request->first_name;
    $data->last_name=$request->last_name;
    $designationString=$request->input('designation');
    $data->designation= implode(', ',$designationString);
    $data->experience=$request->experience;
    $data->phone=$request->phone;
    $data->email=$request->email;
    $data->location=$request->location;
    //image
    // $filename=time().".". $request->file('profile')->getClientOriginalExtension();
    // $request->file('profile')->storeAs('uploads',$filename);
    // dd($filename);
    //image end
    // if ($request->hasFile('profile')) {
    //     $file = $request->file('profile');
    //     $fileName = $file->getClientOriginalName(); 
    //     Storage::disk('public')->put($fileName, file_get_contents($file));
    // }
    // $resume->profile=$fileName;

    //pdf
    if ($request->hasFile('resume')) {
        $file = $request->file('resume');
        $fileName = $file->getClientOriginalName(); 
        Storage::disk('public')->put($fileName, file_get_contents($file));
    }
    $data->resume=$fileName;    
    //end pdf
    // $data->country=$request->country;
    $data->state=$request->state;
    $data->district=$request->district;
    $data->city=$request->city;
    $data->pincode=$request->pincode;
    $data->qualification=$request->qualification;
    $data->education=$request->education;
    $data->dob=$request->dob;
    $data->summery=$request->summery;
    $data->save();
    return redirect()->route('resume.index')->with('success','Resume Updated Sucessfully');    
}
public function delete(Request $request)
{
    $id = $request->id;
    $data =Resume::findOrFail($id);
    $data->delete_status='0';
    $data->save();
    return redirect()->route('resume.index')->with('success', 'Resume is Deleted Successfully!');
}

}
