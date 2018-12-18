<?php

namespace App\Http\Controllers\guest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DichVu;
use App\Models\LyDo;
use App\Models\Baner;
use App\Models\NhanVien;
use App\Models\YKien;
use App\Models\TinTuc;
use Response;
class HomeController extends Controller
{
    public function getHome(){
    	$data['dich_vu'] = DichVu::orderBy('id','desc')->limit(5)->get();
    	$data['ly_do'] = LyDo::orderBy('id','desc')->get();
    	$data['baner'] = Baner::orderBy('id','desc')->get();
    	$data['nhan_vien'] = NhanVien::orderBy('id','desc')->limit(2)->get();
    	$data['y_kien'] = YKien::orderBy('id','desc')->get();
    	return view('guest.home',$data);
    }
    public function getDichVu($slug){
    	$data['du_lieu'] = DichVu::where('slug',$slug)->first();
    	$data['tin_chung'] = TinTuc::where('id_lt',2)->orderBy('id_tt','desc')->limit(3)->get();
    	$data['tin_noi_bat'] = TinTuc::where('id_lt',5)->orderBy('id_tt','desc')->limit(3)->get();
    	$data['tin_phap_luat'] = TinTuc::where('id_lt',1)->orderBy('id_tt','desc')->limit(3)->get();

    	return view('guest.news',$data);
    }
    public function DownloadProfile(){
        $file = 'local/storage/app/public/profile/Profile-TDG-2015final.pdf';
        return Response::download($file);
    }

}
