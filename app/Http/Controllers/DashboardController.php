<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Resume;
use App\Models\User;
use Illuminate\Http\Request;

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
}
