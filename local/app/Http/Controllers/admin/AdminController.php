<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class AdminController extends Controller
{
    public function getAdmin(){
    	if (Auth::check()) {
			return view('admin.quantri');
		}
		else{
			return redirect('login');
		}
    }
}
