<?php

namespace App\Http\Controllers\guest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DatDai;
use App\Models\TinTuc;
class LandController extends Controller
{
    public function getLand(){
    	$data['kieu_1'] = DatDai::where('type',1)->orderBy('id','desc')->limit(1)->first();
    	$data['kieu_2'] = DatDai::where('type',2)->orderBy('id','desc')->limit(1)->first();
    	$data['kieu_3'] = DatDai::where('type',3)->orderBy('id','desc')->limit(1)->first();

    	return view('guest.land',$data);
    }
    public function getChiTiet($slug){
    	$data['du_lieu'] = DatDai::where('slug',$slug)->first();
    	$data['tin_chung'] = TinTuc::where('id_lt',2)->orderBy('id_tt','desc')->limit(3)->get();
    	$data['tin_noi_bat'] = TinTuc::where('id_lt',5)->orderBy('id_tt','desc')->limit(3)->get();
    	$data['tin_phap_luat'] = TinTuc::where('id_lt',1)->orderBy('id_tt','desc')->limit(3)->get();

    	return view('guest.news',$data);
    }
}
