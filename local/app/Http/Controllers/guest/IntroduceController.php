<?php

namespace App\Http\Controllers\guest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\NhanVien;
class IntroduceController extends Controller
{
    public function getIntroduce(){
    	$data['nhan_vien'] = NhanVien::orderBy('id','desc')->get();
    	return view('guest.introduce',$data);
    }
}
