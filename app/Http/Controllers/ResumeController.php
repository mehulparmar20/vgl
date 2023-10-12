<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ResumeController extends Controller
{
    public function index()
    {    
        $data =Resume::orderBy('id', 'desc')->get(); 
        // dd($data);
       // $data=Resume::all();
        return view('resume.index',compact('data'));
    }
public function create()
{
    return view('resume.create');
}
public function store(Request $request)
{
    $request->validate([
        'first_name' => 'required',
        'last_name' => 'required',
        'position' => 'required',
        'phone' => 'required',
        'email' => 'required',
        'location' => 'required',
        'country' => 'required',
        'city' => 'required',
        'postcode' => 'required',
        'education' => 'required',
        'skills' => 'required',
        // 'profile' => 'required|file|image|mimes:jpeg,png,jpg,gif|max:2048',
        'resume' => 'required|file|mimes:pdf,jpg,jpeg,png,gif',
        // Define rules for other fields here
    ]);
    // dd($request->all());
    $resume=new Resume();
    $resume->first_name=$request->first_name;
    $resume->last_name=$request->last_name;
    $resume->position =$request->input('position');
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
    $resume->country=$request->country;
    $resume->city=$request->city;
    $resume->state=$request->state;
    $resume->postcode=$request->postcode;
    $resume->relocate= $request->input('relocate');
    $resume->education=$request->education;
    $resume->skills=$request->skills;
    $resume->summery=$request->summery;
    $resume->save();
    // return redirect()->route('resume.index')->with('success', 'Resume has been saved successfully.');
    return back()->with('success', 'Resume has been saved successfully.');
}
public function view($id)
{
    
    $data=Resume::find($id);
    // dd($data);
    return view('view',compact('data'));
}
}
