<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['namespace' => 'guest'], function() {

    // HOME

    Route::get('/','HomeController@getHome');
    Route::get('dich-vu/{slug}','HomeController@getDichVu');
    Route::get('downloadprofile','HomeController@DownloadProfile');

    // GIỚI THIỆU

    Route::get('introduce','IntroduceController@getIntroduce');
    
    // TIN TỨC
    Route::get('list-news','NewsController@getNews');
    Route::get('tin-tuc/{slug}','NewsController@getChiTiet');

    // LIÊN HỆ

    Route::get('contact','ContactController@getContact');

    // ĐẤT ĐAI

    Route::get('land','LandController@getLand');
    Route::get('datdai/{slug}','LandController@getChiTiet');

    // DOANH NGHIÊPK

    Route::get('enterprise','EnterpriseController@getEnterprise');
    Route::get('doanh-nghiep/{slug}','EnterpriseController@getChiTiet');
    Route::get('thanh-lap-doanh-nghiep','EnterpriseController@getThanhLap');
    Route::get('thanh-lap-doanh-nghiep/{slug}','EnterpriseController@getThanhLapChiTiet');
    // Route::get('tintuc/{slug}','EnterpriseController@getChiTietThanhLap');


    // GIẤY PHÉP

    Route::get('license','LicenseController@getLicense');
    Route::get('giayphep/{slug}','LicenseController@getChiTiet');

    // SỞ HỮU TRÍ TUỆ

    Route::get('intellectual','IntellectualController@getIntellectual');
    Route::get('sohuutritue/{slug}','IntellectualController@getChiTiet');

    


});


// TƯ VẤN KHÁCH HÀNG

Route::group(['namespace' => 'admin','prefix' => 'tuvankhachhang'], function() {
    Route::get('/','KhachHangController@getKhachHang');
    Route::post('add','KhachHangController@postKhachHang');
    Route::get('delete/{id}','KhachHangController@getXoaKhachHang');
});

// ĐĂNG KÍ NHẬN BẢN TIN

Route::group(['namespace' => 'admin','prefix' => 'dangkinhanbantin'], function() {
    Route::get('/','DangKiController@getEmail');
    Route::post('add','DangKiController@postEmail');
    Route::get('delete/{id}','DangKiController@getXoaEmail');
});

// Login

Route::group(['namespace'=> 'admin'],function(){

    Route::group(['prefix'=> 'login'], function() {
        Route::get('/','LogInController@getLogin');
        Route::post('/','LogInController@postLogin');
    });
});

// ADMIN
Route::group(['namespace' => 'admin','middleware' => 'CheckLogIn'], function() {

    Route::get('admin','AdminController@getAdmin');

    Route::get('logout','LogInController@LogOut');

    // DOANH NGHIỆP (CÁC DỊCH VỤ KHÁC)

    Route::group(['prefix' => 'quanlydoanhnghiep'], function() {
        Route::get('/','DoanhNghiepController@getDoanhNghiep');
        Route::get('add','DoanhNghiepController@getThemDoanhNghiep');
        Route::post('postadd','DoanhNghiepController@postThemDoanhNghiep');
        Route::get('edit/{id}','DoanhNghiepController@getSuaDoanhNghiep');
        Route::post('postedit/{id}','DoanhNghiepController@postSuaDoanhNghiep');
        Route::get('delete/{id}','DoanhNghiepController@getXoaDoanhNghiep');

    });

    // DỊCH VỤ THÀNH LẬP DOANH NGHIỆP

    Route::group(['prefix' => 'dichvudoanhnghiep'], function() {
        Route::get('/','DichVuDoanhNghiepController@getDichVu');
        Route::get('add','DichVuDoanhNghiepController@getThemDichVu');
        Route::post('postadd','DichVuDoanhNghiepController@postThemDichVu');
        Route::get('show/{id}','DichVuDoanhNghiepController@getSuaDichVu');
        Route::post('postedit/{id}','DichVuDoanhNghiepController@postSuaDichVu');
        Route::get('delete/{id}','DichVuDoanhNghiepController@getXoaDichVu');
    });

    // BANER DOANH NGHIỆP

    Route::group(['prefix' => 'banerdoanhnghiep'], function() {
        Route::get('/','BanerController@getBaner');
        Route::get('add','BanerController@getThemBaner');
        Route::post('postadd','BanerController@postThemBaner');
        Route::get('edit/{id}','BanerController@getSuaBaner');
        Route::post('postedit/{id}','BanerController@postSuaBaner');
        Route::get('delete/{id}','BanerController@getXoaBaner');

    });


    // Ý KIẾN KHÁCH HÀNG

    Route::group(['prefix' => 'ykienkhachhang'], function() {
        Route::get('/','YKienController@getYKien');
        Route::get('add','YKienController@getThemYKien');
        Route::post('postadd','YKienController@postThemYKien');
        Route::get('edit/{id}','YKienController@getSuaYKien');
        Route::post('postedit/{id}','YKienController@postSuaYKien');
        Route::get('delete/{id}','YKienController@getXoaYKien');
    });


    // NHÂN SỰ 

    Route::group(['prefix' => 'quanlynhanvien'], function() {
        Route::get('/','NhanVienController@getNhanVien');
        Route::get('add','NhanVienController@getThemNhanVien');
        Route::post('postadd','NhanVienController@postThemNhanVien');
        Route::get('edit/{id}','NhanVienController@getSuaNhanVien');
        Route::post('postedit/{id}','NhanVienController@postSuaNhanVien');
        Route::get('delete/{id}','NhanVienController@getXoaNhanVien');
    });

    // TIN TỨC

    Route::group(['prefix' => 'quanlytintuc'], function() {
        Route::get('/','TinTucController@getTinTuc');
        Route::get('add','TinTucController@getThemTinTuc');
        Route::post('postadd','TinTucController@postThemTinTuc');
        Route::get('show/{id}','TinTucController@getChiTietTinTuc');
        Route::post('edit/{id}','TinTucController@getSuaTinTuc');
        Route::get('delete/{id}','TinTucController@getXoaTinTuc');
    });


    // SỞ HỮU TRÍ TUỆ

    Route::group(['prefix' => 'quanlytritue'], function() {
        Route::get('/','TriTueController@getTriTue');
        Route::get('add','TriTueController@getThemTriTue');
        Route::post('postadd','TriTueController@postThemTriTue');
        Route::get('show/{id}','TriTueController@getSuaTriTue');
        Route::post('postedit/{id}','TriTueController@postSuaTriTue');
        Route::get('delete/{id}','TriTueController@getXoaTriTue');
    });

    // GIẤY PHÉP

    Route::group(['prefix' => 'quanlygiayphep'], function() {
        Route::get('/','GiayPhepController@getGiayPhep');
        Route::get('add','GiayPhepController@getThemGiayPhep');
        Route::post('postadd','GiayPhepController@postThemGiayPhep');
        Route::get('show/{id}','GiayPhepController@getSuaGiayPhep');
        Route::post('postedit/{id}','GiayPhepController@postSuaGiayPhep');
        Route::get('delete/{id}','GiayPhepController@getXoaGiayPhep');
    });

    // ĐẤT ĐAI

    Route::group(['prefix' => 'quanlydatdai'], function() {
        Route::get('/','DatDaiController@getDatDai');
        Route::get('add','DatDaiController@getThemDatDai');
        Route::post('postadd','DatDaiController@postThemDatDai');
        Route::get('show/{id}','DatDaiController@getSuaDatDai');
        Route::post('postedit/{id}','DatDaiController@postSuaDatDai');
        Route::get('delete/{id}','DatDaiController@getXoaDatDai');
    });

    // LÝ DO LỰA CHỌN VNG

    Route::group(['prefix' => 'lydo'], function() {
        Route::get('/','LyDoController@getLyDo');
        Route::get('add','LyDoController@getThemLyDo');
        Route::post('postadd','LyDoController@postThemLyDo');
        Route::get('edit/{id}','LyDoController@getSuaLyDo');
        Route::post('postedit/{id}','LyDoController@postSuaLyDo');
        Route::get('delete/{id}','LyDoController@getXoaLyDo');
    });


    // DỊCH VỤ

    Route::group(['prefix' => 'quanlydichvu'], function() {
        Route::get('/','DichVuController@getDichVu');
        Route::get('add','DichVuController@getThemDichVu');
        Route::post('postadd','DichVuController@postThemDichVu');
        Route::get('edit/{id}','DichVuController@getSuaDichVu');
        Route::post('postedit/{id}','DichVuController@postSuaDichVu');
        Route::get('delete/{id}','DichVuController@getXoaDichVu');
    });

    // Thành viên

    Route::group(['prefix' => 'quanlythanhvien','middleware' => 'CkeckLevel'], function() {
        Route::get('/','ThanhVienController@getThanhVien');
        Route::get('add','ThanhVienController@getThemThanhvien');
        Route::post('postadd','ThanhVienController@postThemThanhVien');
        Route::get('edit/{id}','ThanhVienController@getSuaThanhVien');
        Route::post('postedit/{id}','ThanhVienController@postSuaThanhVien');
        Route::get('delete/{id}','ThanhVienController@getXoaThanhVien');
    });


});

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
