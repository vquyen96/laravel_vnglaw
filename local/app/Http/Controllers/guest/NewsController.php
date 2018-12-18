<?php

namespace App\Http\Controllers\guest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\TinTuc;
class NewsController extends Controller
{
    public function getNews(){
    	$data['tin_tuc'] = TinTuc::orderBy('id_tt','desc')->paginate(9);
    	return view('guest.list-news',$data);
    }
   	public function getChiTiet($slug){
   		$data['du_lieu'] = TinTuc::where('slug',$slug)->first();
   
    	$data['tin_chung'] = TinTuc::where('id_lt',2)->orderBy('id_tt','desc')->limit(3)->get();
    	$data['tin_noi_bat'] = TinTuc::where('id_lt',5)->orderBy('id_tt','desc')->limit(3)->get();
    	$data['tin_phap_luat'] = TinTuc::where('id_lt',1)->orderBy('id_tt','desc')->limit(3)->get();

    	return view('guest.news',$data);
   	}

}
