<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\NhanVien;
use File;

class NhanVienController extends Controller
{
    public function getNhanVien(){
    	$data['nhan_vien'] = NhanVien::orderBy('id','desc')->get();
    	return view('admin.nhanvien.quanlynhanvien',$data);
    }
    public function getThemNhanVien(){
    	return view('admin.nhanvien.themnhanvien');
    }
    public function postThemNhanVien(Request $rq){
    	$nhan_vien = new NhanVien;
    	$nhan_vien->ten_nv = $rq->ten_nv;
    	$nhan_vien->chuc_vu = $rq->chuc_vu;
    	$nhan_vien->thong_tin = $rq->thong_tin;

    	if($rq->anh == ''){
			$filename = '29541772703_6ed8b50c47_b.jpg';
		}
		else{
			$filename = $rq->anh->getClientOriginalName();
			$path = "public/images";
			$filename = time().$filename;
			$rq->anh->storeAs($path,$filename);
		}          
		$nhan_vien->anh = $filename;

		$nhan_vien->save();
		return redirect('quanlynhanvien');
    }
    public function getSuaNhanVien($id){
    	$data['nhan_vien'] = NhanVien::where('id',$id)->first();
    	return view('admin.nhanvien.suanhanvien',$data);

    }
    public function postSuaNhanVien($id,Request $rq){
    	$nhan_vien = NhanVien::find($id);
    	$nhan_vien->ten_nv = $rq->ten_nv;
    	$nhan_vien->chuc_vu = $rq->chuc_vu;
    	$nhan_vien->thong_tin = $rq->thong_tin;

    	if(isset($rq->anh)){
			$filename = $rq->anh->getClientOriginalName();
			$path = "public/images";
			$filename = time().$filename;
			$rq->anh->storeAs($path,$filename);   
			File::delete('local/storage/app/public/images/'.$nhan_vien->anh);    
			$nhan_vien->anh = $filename;  
		}

		$nhan_vien->save();
		return redirect('quanlynhanvien');

    }
    public function getXoaNhanVien($id){
    	$nhan_vien = NhanVien::find($id);
		File::delete('local/storage/app/public/images/'.$nhan_vien->anh); 
		NhanVien::destroy($id);
		return back();  
    }
}
