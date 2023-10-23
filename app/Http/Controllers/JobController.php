<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Resume;

use Illuminate\Http\Request;


class JobController extends Controller
 {

    // public function showSearchForm(Request $request)
    // {
    //     // dd($request);
    //     $designation = $request->input('designation');

    //     $sort= Resume::where('designation',$designation)
    //         ->orderBy('first_name', 'asc')
    //         ->get();
    //     return view('search',compact('sort','designation'));
        
    // }

    // public function sortstore(Request $request)
    // {
    //     $designation = $request->input('designation');
    //     $sort= Resume::where('designation',$designation)
    //         ->orderBy('first_name', 'asc')
    //         ->get();
    //     return view('search',compact('sort'));
      
    // }
    public function frontindex()
    {
        // $startdate=Job::get('startdate');
        // dd($startdate);
        // $enddate=Job::get('enddate');
        $startdate = '2020-01-1';  // Replace with your actual start date
        $enddate = '2024-12-31'; 
        $data = Job::
        // whereDate('startdate', '>=', $startdate)
                //    ->whereDate('enddate', '<=', $enddate)
                   orderBy('id', 'desc')
                   ->where('delete_status',1)
                   ->get();

        // dd($data);
        // $data=Job::orderBy('id', 'desc')->where('delete_status',1)->get();
        return view('welcome',compact('data'));
    }
    public function index()
    {
        $data=Job::orderBy('id', 'desc')
        ->where('delete_status',1)
        ->get();
        return view('job.index',compact('data'));
    }
    public function view2()
    {
        $data =Job::get()->where('delete_status',0);
        // dd($data);
        return view('job.view2',compact('data'));
    }
    public function create()
    { 
        return view('job.create');
    }
    public function store(Request $request)
{
    
    $request->validate([
        'title' => 'required',
        'description' => 'required',
        'qualify'=>'required',
        'category' => 'required',
        'type' => 'required',
        'location' => 'required',
        'startdate'=>'required',
        'enddate'=>'required',
    ]);
    // dd($request->all());
    $job=new Job();
    $job->title=$request->title;
    $job->description=$request->description;
    $job->qualify=$request->qualify;
    // $job->category=$request->input('category');
    $job->category=$request->category;
    $job->type=$request->input('type');
    $job->location=$request->location;
    $job->startdate=$request->startdate;
    $job->enddate=$request->enddate;
    $job->save();
    return redirect()->route('job.index')->with('success', 'Job is Created Successfully!');
    // return back()->with('success', 'Job is Created Successfully!');
}
public function view1($id)
{
    
    $data=Job::find($id);
    // dd($data);
    return view('job.view1',compact('data'));
}
public function edit($id)
{ 
    $data=Job::find($id);
    return view('job.edit',compact('data'));

}
public function update(Request $request,$id)
{
    $data=Job::find($id);
    $data->title=$request->title;
    $data->description=$request->description;
    $data->qualify=$request->qualify;
    $data->category=$request->category;
    $data->type=$request->input('type');
    $data->location=$request->location;
    $data->startdate=$request->startdate;
    $data->enddate=$request->enddate;
    $data->save();
    return redirect()->route('job.index')->with('success', 'Job is Upadated Successfully!');
}
public function delete(Request $request)
{
    $id = $request->id;
    $data =Job::findOrFail($id);
    $data->delete_status='0';
    $data->save();
    return redirect()->route('job.index')->with('success', 'Job is Deleted Successfully!');
}

}
