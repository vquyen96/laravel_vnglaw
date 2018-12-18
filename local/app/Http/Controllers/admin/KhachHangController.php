<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\KhachHang;

class KhachHangController extends Controller
{
    public function getKhachHang(){
    	$data['khach_hang'] = KhachHang::orderBy('id','desc')->get();
    	return view('admin.khachhang.tuvan',$data);
    }
    public function postKhachHang(Request $rq){
    	$khach_hang = new KhachHang;
    	$khach_hang->ho_ten = $rq->ho_ten;
    	$khach_hang->email = $rq->email;
    	$khach_hang->noi_dung = $rq->noi_dung;

    	$khach_hang->save();
    	return back();
    }
    public function getXoaKhachHang($id){
    	KhachHang::destroy($id);
    	return back();
    }
}
