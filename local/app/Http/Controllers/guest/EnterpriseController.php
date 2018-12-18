<?php

namespace App\Http\Controllers\guest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DoanhNghiep;
use App\Models\DichVuDoanhNghiep;
use App\Models\TinTuc;
class EnterpriseController extends Controller
{
    
    public function getEnterprise(){
    	$data['kieu_0'] = DoanhNghiep::where('type',0)->orderBy('id','desc')->get();
    	$data['kieu_1'] = DoanhNghiep::where('type',1)->orderBy('id','desc')->limit(1)->first();
    	$data['kieu_2'] = DoanhNghiep::where('type',2)->orderBy('id','desc')->limit(1)->first();
    	$data['dv_doanh_nghiep'] = DichVuDoanhNghiep::orderBy('id','desc')->limit(2)->get();
    	return view('guest.enterprise',$data);
    }
    
    public function getChiTiet($slug){
    	$data['du_lieu'] = DoanhNghiep::where('slug',$slug)->first();
    	$data['tin_chung'] = TinTuc::where('id_lt',2)->orderBy('id_tt','desc')->limit(3)->get();
    	$data['tin_noi_bat'] = TinTuc::where('id_lt',5)->orderBy('id_tt','desc')->limit(3)->get();
    	$data['tin_phap_luat'] = TinTuc::where('id_lt',1)->orderBy('id_tt','desc')->limit(3)->get();
    	return view('guest.news',$data);
    }


    public function getThanhLap(){
        $data['tin_tuc'] = DichVuDoanhNghiep::orderBy('id','desc')->paginate(9);
        return view('guest.list-dv',$data);
    }

    public function getThanhLapChiTiet($slug){
        $data['du_lieu'] = DichVuDoanhNghiep::where('slug',$slug)->first();
        $data['tin_chung'] = TinTuc::where('id_lt',2)->orderBy('id_tt','desc')->limit(3)->get();
        $data['tin_noi_bat'] = TinTuc::where('id_lt',5)->orderBy('id_tt','desc')->limit(3)->get();
        $data['tin_phap_luat'] = TinTuc::where('id_lt',1)->orderBy('id_tt','desc')->limit(3)->get();

        return view('guest.news',$data);
    }
}
