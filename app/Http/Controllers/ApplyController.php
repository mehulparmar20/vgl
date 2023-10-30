<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\DemoMail;
use App\Models\City;
use App\Models\Country;
use App\Models\District;
use App\Models\Job;
use App\Models\Resume;
use App\Models\State;
use Illuminate\Support\Facades\Storage;
class ApplyController extends Controller
{
    public function apply(Request $request,$id)
    {
        $jobdata = Job::find($id);
        $jobId = $jobdata->id;
        $design =Job::select('title')
        ->where('id',$jobId)
        ->get();
        // dd($design);
        $country = Country::all();
        $state = State::all();
        $district = District::all();
        $city = City::all();
        return view('apply.create', compact('country', 'state', 'district', 'city', 'design'));
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
        $resume->designation = $request->designation;
        $resume->currentdesignation=$request->currentdesignation;
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
        dd($resume);
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
}
    