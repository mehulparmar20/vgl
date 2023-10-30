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
    public function titlestore(Request $request)
    {
        $designat = $request->input('designation');
        $data = Resume::where('designation', $designat)->get();
        $design = Job::select('title', 'id')->get();
        return view('resume.index', compact('data', 'design'));
    }
    public function view2()
    {
        $data = Resume::get()->where('delete_status', 0);
        return view('resume.view2', compact('data'));
    }
    public function index()
    {
        $data = Resume::orderBy('id', 'desc')
            ->where('delete_status', 1)
            ->with('countrydata')
            ->with('statedata')
            ->with('districtdata')
            ->with('citydata')
            ->get();
        $design = Job::select('title', 'id')->get();
        return view('resume.index', compact('data', 'design'));
    }

    public function create()
    {
        $country = Country::all();
        $state = State::all();
        $district = District::all();
        $city = City::all();
        $design = Job::select('title', 'id')->get();
        return view('resume.create', compact('country', 'state', 'district', 'city', 'design'));
    }
    public function store(Request $request)
    {
        //    dd($request); 
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'experience' => 'required|integer',
            'state' => 'required',
            'city' => 'required',
            'qualification' => 'required',
            'resume' => 'required|file|mimetypes:application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document'
        ]);
        // dd($request);
        // dd($request->all());
        $resume = new Resume();
        $resume->first_name = $request->first_name;
        $resume->last_name = $request->last_name;
        $resume->designation = $request->input('designation');
        $resume->currentdesignation= $request->currentdesignation	;
        $resume->experience = $request->experience;
        $resume->phone = $request->phone;
        $resume->email = $request->email;
        $resume->location = $request->location;
        //pdf
        if ($request->hasFile('resume')) {
            $file = $request->file('resume');
            $fileName = $file->getClientOriginalName();
            Storage::disk('public')->put($fileName, file_get_contents($file));
        }
        $resume->resume = $fileName;
        //end pdf
        $resume->state = $request->state;
        $resume->city = $request->city;
        $resume->pincode = $request->pincode;
        $resume->qualification = $request->qualification;
        $resume->education = $request->education;
        $resume->dob = $request->dob;
        $resume->summery = $request->summery;
        // dd($resume);
        $resume->save();
        $email = 'veravalonline@gmail.com';
        $mailData = [
            'title' => 'Mail From VeravalOnline',
            'body' => 'This is for Resume Created Successfully',

        ];
        Mail::to($email)->send(new DemoMail($mailData));
        // dd('send');
        // return redirect()->route('resume.index')->with('success', 'Resume has been saved successfully.');
        return back()->with('success', 'Resume has been submitted succesfully!');
    }
    public function view($id)
    {

        $data = Resume::find($id);
        return view('view', compact('data'));
    }
    public function edit($id)
    {
        $data = Resume::with('countrydata', 'statedata', 'citydata', 'districtdata')->find($id);
        $country = Country::all();
        $state = State::all();
        $district = District::all();
        $city = City::all();
        $design = Job::select('title', 'id')->get();
        return view('resume.edit', compact('data', 'country', 'state', 'district', 'city', 'design'));
    }
    public function update(Request $request, $id)
    {
        $data = Resume::find($id);
        $data->first_name = $request->first_name;
        $data->last_name = $request->last_name;
        $designationString = $request->input('designation');
        $data->currentdesignation= $request->currentdesignation;
        // $data->designation = implode(', ', $designationString);
        $data->experience = $request->experience;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->location = $request->location;
        //pdf
        if ($request->hasFile('resume')) {
            $file = $request->file('resume');
            $fileName = $file->getClientOriginalName();
            Storage::disk('public')->put($fileName, file_get_contents($file));
        }
        $data->resume = $fileName;
        //end pdf
        $data->state = $request->state;
        $data->city = $request->city;
        $data->pincode = $request->pincode;
        $data->qualification = $request->qualification;
        $data->education = $request->education;
        $data->dob = $request->dob;
        $data->summery = $request->summery;
        // dd($data);
        $data->save();
        return redirect()->route('resume.index')->with('success', 'Resume Updated Sucessfully');
    }
    public function delete(Request $request,$id)
    {
        $id = $request->id;
        $data = Resume::findOrFail($id);
        $data->delete_status ='0';
        $data->save();
        return response()->json(['status' => 'Resume Deleted Successfully']);//for sweetalert msg
//  return redirect()->route('resume.index')->with('success', 'Resume Delete Sucessfully');
    }
}
// Extra Code
//store code
 // 'profile' => 'required|file|image|mimes:jpeg,png,jpg,gif|max:2048',
            // 'resume' => 'required|file|mimes:pdf,jpg,jpeg,png,gif',
            //for multiple selection in dropdown

        // $resume->designation = $request->input('designation');
        // dd($resume);
        // $designationString = $request->input('designation');
        // $resume->designation = implode(', ', $designationString); //only one selection
        //end multiple selection 
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
        // end image
        // mail after insert
        // $email = 'veravalonline@gmail.com';
        // $mailData = [
            // 'title' => 'Mail From VeravalOnline',
            // 'body' => 'This is for Resume Created Successfully',

        // ];
        // Mail::to($email)->send(new DemoMail($mailData));
        // dd('send');
        // return redirect()->route('resume.index')->with('success', 'Resume has been saved successfully.');


        // update code
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
        // $designationString = $request->input('designation');
        // $data->designation = implode(', ', $designationString);