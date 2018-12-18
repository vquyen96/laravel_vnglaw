<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DangKi;
class DangKiController extends Controller
{
    public function getEmail(){
    	$data['dang_ki'] = DangKi::orderBy('id','desc')->get();
    	return view('admin.dangkibantin.quanly',$data);
    }
    public function postEmail(Request $rq){
    	$dang_ki = new DangKi;
    	$dang_ki->email = $rq->email;
    	$dang_ki->save();
    	return back();
    }
    public function getXoaEmail($id){
    	DangKi::destroy($id);
    	return back();
    }
}
