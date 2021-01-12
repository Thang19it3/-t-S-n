<?php

use Illuminate\Support\Facades\Route;

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

Route::get('', function () {
    return view('welcome');
});
Route::get('/admin',TintucController::class.'@index');
Route::get('/home1',TintucController::class.'@index1');
Route::get('/lienhe',TintucController::class.'@index2');
Route::get('/doibong',TintucController::class.'@index3');
Route::get('/tim-doibong',GhepdoiController::class.'@index4');
Route::get('/tim-doibong2/{id}',GhepdoiController::class.'@index5');
Route::post('/tim-doibong2/{id}',GhepdoiController::class.'@ghepDoi');
Route::get('/lich',GhepdoiController::class.'@lich');
Auth::routes();
Route::group(['prefix'=>'trangchu'],function(){
	Route::group(['prefix'=>'doibong1'],function(){
		Route::get('dang-ky',ClubController::class.'@indexDk');
		Route::post('b1',ClubController::class.'@getDk');
		Route::post('b2',ClubController::class.'@getDk2');
		Route::get('dang-ky1',ClubController::class.'@indexDk1');
		Route::get('dang-ky2',ClubController::class.'@indexDk2');
		Route::get('profile',ClubController::class.'@indexProfile');
	});
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/redirect', 'Auth\LoginController@redirectToProvider');
Route::get('admin/callback', 'Auth\LoginController@handleProviderCallback');


Route::get('tim-san','SoccerController@viewTimsan');
Route::get('dat-san','SoccerController@viewDatsan')->middleware('auth');
Route::get('dang-nhap','SoccerController@viewLogin')->name('dang-nhap');
Route::get('dang-ky','SoccerController@viewDangky');
Route::get('reset-password','SoccerController@resetPassword');
Route::get('xac-nhan','SoccerController@viewXacnhan')->middleware('auth');
Route::get('huy','SoccerController@viewHuy')->middleware('auth');
Route::get('profile','SoccerController@viewProfile')->middleware('auth');
Route::get('sport_profile','SoccerController@viewSport_profile')->middleware('auth');
Route::get('booking_request','SoccerController@viewBooking_request')->middleware('auth');
Route::get('change_password','SoccerController@viewChange_password')->middleware('auth');

Route::get('chi-tiet','SoccerController@viewInfo')->middleware('owner');
Route::get('quan-ly','SoccerController@quanLy')->middleware('owner');
Route::get('trusted-user','SoccerController@favUser')->middleware('owner');
Route::get('owner','SoccerController@viewOwner')->middleware('owner');
Route::get('login-owner','SoccerController@viewLogin_owner');

Route::post('user_update','SoccerController@user_update');
Route::post('update_pass','SoccerController@update_pass');

route::post('login_owner', 'SoccerController@postLogin');
route::post('owner_logout', function() {
	Auth::guard('owner')->logout();
	return redirect('login-owner');
});

Route::post('add_pitch','SoccerController@add_pitch');
Route::post('update_pitch/{id}','SoccerController@update_pitch');

Route::get('{id}','SoccerController@viewThongtinsan');
Route::get('dat-san/{id}','SoccerController@viewDatsan');

Route::post('set_pitch','SoccerController@set_pitch');

Route::get('delete_booking/{id}','SoccerController@delete_booking');

Route::get('xac_nhan_booking/{id}','SoccerController@submit_booking');

Route::get('huy_booking/{id}','SoccerController@huy_booking');

Route::get('search/search_booking','SoccerController@search_booking');
Route::get('search/search_pitch','SoccerController@search_pitch');
Route::get('search/5','SoccerController@search5');
Route::get('search/7','SoccerController@search7');
Route::get('search/11','SoccerController@search11');

Route::group(['prefix'=>'admin'],function(){
	Route::group(['prefix'=>'theloai'],function(){
		Route::get('/danhsach',TheloaiController::class.'@indexTheLoai');
		Route::get('/them',TheloaiController::class.'@getTheLoai');
		Route::post('/them1',TheloaiController::class.'@addTheLoai');
		Route::get('sua/{id}',TheloaiController::class.'@editTheLoai');
		Route::post('sua/{id}',TheloaiController::class.'@updateTheLoai');
		Route::get('/xoa/{id}',TheloaiController::class.'@delTheLoai');
	});
	Route::group(['prefix'=>'loaitin'],function(){
		Route::get('/danhsach',LoaitinController::class.'@indexLoaiTin');
		Route::get('/them',LoaitinController::class.'@getLoaiTin');
		Route::post('/them1',LoaitinController::class.'@addLoaiTin');
		Route::get('/sua/{id}',LoaitinController::class.'@editLoaiTin');
		Route::post('/sua/{id}',LoaitinController::class.'@updateLoaiTin');
		Route::get('/xoa/{id}',LoaitinController::class.'@delLoaiTin');
	});
	Route::group(['prefix'=>'tintuc'],function(){
		Route::get('/danhsach',TintucController::class.'@indexTintuc');
		Route::get('/them',TintucController::class.'@getThem');
		Route::post('/them',TintucController::class.'@postThem');
		Route::get('/sua/{id}',TintucController::class.'@editLoaiTin');
		Route::post('/sua/{id}',TintucController::class.'@updateLoaiTin');
		Route::get('/xoa/{id}',TintucController::class.'@delTheLoai');
	});
	Route::group(['prefix'=>'doibong'],function(){
		Route::group(['prefix' => 'tendb'],function(){
			Route::get('/danhsach',DbController::class.'@indexDoibong');
			Route::get('/them',DbController::class.'@getThem');
			Route::post('/them1',DbController::class.'@postThem');
		});
		Route::group(['prefix' => 'thanhvien'],function(){
			Route::get('/danhsach',DbController::class.'@indexTv');
			Route::get('/them',DbController::class.'@getThemTv');
			Route::post('/them1',DbController::class.'@postThemTv');
			Route::get('/sua/{id}',DbController::class.'@editLoaiTin');
		});
		Route::group(['prefix' => 'thanhtich'],function(){
			Route::get('/danhsach',DbController::class.'@indexTt');
			Route::get('/them',DbController::class.'@getThemTv');
			Route::post('/them1',DbController::class.'@postThemTv');
			Route::get('/sua/{id}',DbController::class.'@editLoaiTin');
		});
	});
});

Route::group(['prefix'=>'admin'],function(){
	Route::group(['prefix'=>'ajax'],function(){
		Route::get('loaitin/{idTheLoai}',AjaxController::class.'@getLoaitin');
	});
});
Route::group(['prefix'=>'trangchu'],function(){
	Route::group(['prefix'=>'tintuc'],function(){
		Route::get('/tintuc1',PageController::class.'@tentheloai');
		Route::get('/tintuc1',PageController::class.'@tentheloai');
		Route::get('/loaitin/{id}/{TieuDe}.html',PageController::class.'@tenloaitin');
		Route::get('/bao/{id}/{TieuDeBao}.html',PageController::class.'@getTintuc');
	});
});
