<?php

namespace App\Http\Controllers\guest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\TriTue;
use App\Models\TinTuc;
class IntellectualController extends Controller
{
    public function getIntellectual(){
    	$data['tri_tue'] = TriTue::orderBy('id','desc')->get();
    	return view('guest.intellectual',$data);
    }
    public function getChiTiet($slug){
    	$data['du_lieu'] = TriTue::where('slug',$slug)->first();
    	$data['tin_chung'] = TinTuc::where('id_lt',2)->orderBy('id_tt','desc')->limit(3)->get();
    	$data['tin_noi_bat'] = TinTuc::where('id_lt',5)->orderBy('id_tt','desc')->limit(3)->get();
    	$data['tin_phap_luat'] = TinTuc::where('id_lt',1)->orderBy('id_tt','desc')->limit(3)->get();

    	return view('guest.news',$data);
    }
}
