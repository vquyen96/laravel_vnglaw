<?php

namespace App\Http\Controllers\guest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\GiayPhep;
use App\Models\TinTuc;
class LicenseController extends Controller
{
    public function getLicense(){
    	$data['kieu_1'] = GiayPhep::where('type',1)->orderBy('id','desc')->limit(1)->first();
    	$data['kieu_2'] = GiayPhep::where('type',2)->orderBy('id','desc')->get();
    	$data['kieu_3'] = GiayPhep::where('type',3)->orderBy('id','desc')->limit(1)->first();
    	$data['kieu_4'] = GiayPhep::where('type',4)->orderBy('id','desc')->limit(1)->first();
    	$data['kieu_5'] = GiayPhep::where('type',5)->orderBy('id','desc')->limit(1)->first();
    	return view('guest.license',$data);
    }
    public function getChiTiet($slug){
    	$data['du_lieu'] = GiayPhep::where('slug',$slug)->first();
    	$data['tin_chung'] = TinTuc::where('id_lt',2)->orderBy('id_tt','desc')->limit(3)->get();
    	$data['tin_noi_bat'] = TinTuc::where('id_lt',5)->orderBy('id_tt','desc')->limit(3)->get();
    	$data['tin_phap_luat'] = TinTuc::where('id_lt',1)->orderBy('id_tt','desc')->limit(3)->get();

    	return view('guest.news',$data);

    }
}
