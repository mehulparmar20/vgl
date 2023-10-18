<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Resume;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function dashboard() {
		$count = [];
		$count['resume'] = Resume::count();
        $count['job'] = Job::count();
		$count['user'] = User::count();
		$count['sell'] = 0;
		return view('dashboard',compact('count'));
	}
// 	public function city()
// 	{
// 		return view('city');
// 	}
// 	public function index(Request $request){
// 		$data['country']=DB::table('country')->orderBy('country','asc')->get();
// 		return view('city',$data);
// 	}
	
// 	public function getState(Request $request){
// 		$cid=$request->post('cid');
// 		$state=DB::table('state')->where('country',$cid)->orderBy('state','asc')->get();
// 		$html='<option value="">Select State</option>';
// 		foreach($state as $list){
// 			$html.='<option value="'.$list->id.'">'.$list->state.'</option>';
// 		}
// 		echo $html;
// 	}
// // public function getDistrict(Request $request)
// 	// { 
// 		// dd('gdhdh');
// // 	 $cid=$request->post('cid');
// // 	//  dd($cid);
// // 		$district=DB::table('district')->where('state',$cid)->orderBy('district','asc')->get();
// // 		$html='<option value="">Select District</option>';
// // 		foreach($district as $list){
// // 			$html.='<option value="'.$list->id.'">'.$list->district.'</option>';
// // 		}
// // 		echo $html;
// 	// }
// 	public function getCity(Request $request){
// 		$sid=$request->post('sid');
// 		$city=DB::table('city')->where('district',$sid)->orderBy('city','asc')->get();
// 		$html='<option value="">Select City</option>';
// 		foreach($city as $list){
// 			$html.='<option value="'.$list->id.'">'.$list->city.'</option>';
// 		}
// 		echo $html;
// 	}
}
