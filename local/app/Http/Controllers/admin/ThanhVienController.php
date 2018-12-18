<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Users;
use App\Http\Requests\UserRequest;
class ThanhVienController extends Controller
{
	public function getThanhVien(){
		$data['thanh_vien'] = Users::orderBy('level','desc')->get();
		return view('admin.thanhvien.dsthanhvien',$data);
	}
	public function getThemThanhVien(){
		return view('admin.thanhvien.themthanhvien');
	}

	public function postThemThanhVien(UserRequest $rq){
		$users = new Users;  
		$users->email = $rq->email;
        $password = bcrypt($rq->password);
        $users->password = $password;
        $users->level = $rq->level;
        $users->save();
        return redirect('quanlythanhvien');
	}

	public function getSuaThanhVien($id){
		$data['thanh_vien_cu'] = Users::where('id',$id)->first();
		return view('admin.thanhvien.suathanhvien',$data);
	}

	public function postSuaThanhVien($id,Request $rq){

		$sua_thanh_vien = Users::find($id);

		$sua_thanh_vien->password = bcrypt($rq->password);

		$sua_thanh_vien->level = $rq->level;
		$sua_thanh_vien->save();

		return redirect('quanlythanhvien');
	}

	public function getXoaThanhVien($id){
		Users::destroy($id);
		return back();
	}
}
