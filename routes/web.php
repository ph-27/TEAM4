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

Route::get('/shoes', ['uses' => 'HomeController@index']);

Route::get('/shoes/contacts', ['uses' => 'HomeController@contact']);

Route::get('/shoes/single', ['uses' => 'HomeController@single']);

Route::get('/shoes/register', ['uses' => 'HomeController@getRegister']);
Route::post('/shoes/register', ['uses' => 'HomeController@postRegister']);

Route::get('/shoes/login', ['uses' => 'HomeController@getLogin']);
Route::post('/shoes/login', ['uses' => 'HomeController@postLogin']);

Route::get('/shoes/about', ['uses' => 'HomeController@about']);

Route::get('/shoes/checkout', ['uses' => 'HomeController@dathang']);
Route::get('/shoes/logout', ['uses' => 'HomeController@logout']);

//Trang quan tri Admin

Route::get('admin/login','AdminController@getlogin')->name('login');
Route::post('admin/login','AdminController@postlogin');
Route::get('admin/logout',['uses' => 'AdminController@logoutAdmin']);
Route::post('timkiem', 'AdminController@timkiem');
Route::group(['prefix' => '/shoes/admin','middleware'=>['adminlogin']], function () {
	Route::group(['prefix' => 'home'], function() {
		Route::get('index', function() {
            return view('admin.home.index');
		});
		Route::resource('home', 'AdminController');
	});

	Route::group(['prefix' => 'categories'], function() {
		Route::get('categories', function() {
			return redirect('categories');
		});
		Route::resource('categories', 'CategoryController');
	});

    Route::group(['prefix' => 'products'], function() {
        Route::get('products', function() {
            return redirect('index');
        });
        Route::resource('products', 'ProductController');
    });

	Route::group(['prefix' => 'sales'], function() {
		Route::get('',['as' => 'getsale','uses' => 'SaleController@index']);
		
		Route::get('/create',['as' => 'getcreate','uses' => 'SaleController@create']);
		Route::post('/create',['as' => 'postcreate','uses' => 'SaleController@store']);

		Route::get('/edit/{id}',['as' => 'getedit','uses' => 'SaleController@edit']);
		Route::put('/edit/{id}',['as' => 'putedit','uses' => 'SaleController@update']);

		Route::delete('/destroy/{id}',['as' => 'getdelete','uses' => 'SaleController@destroy']);
		Route::get('/timkiem',['as' => 'timkiem','uses' => 'SaleController@getSearch']);
	});

	Route::group(['prefix' => 'bills'], function() {
		Route::get('',['as' =>'getbill','uses' => 'BillController@getList']);
        Route::get('/del/{id}',['as' => 'getdelbill','uses' => 'BillController@getDel'])->where('id','[0-9]+');
           
        Route::get('/detail/{id}',['as' => 'getdetail','uses' => 'BillController@getDetail'])->where('id','[0-9]+');
        Route::post('/detail/{id}',['as' => 'postdetail','uses' => 'BillController@postDetail'])->where('id','[0-9]+');

        Route::get('/deltetail/{id}',['as' => 'getdeldetail','uses' => 'BillController@getDetailBill'])->where('id','[0-9]+');

        Route::get('/timkiem',['as' => 'timkiem','uses' => 'BillController@getSearch']);
	});

    Route::group(['prefix' => 'news'], function() {
        Route::get('danhsach','NewsController@getDanhSach')->name('news.danhsach');

        Route::get('them','NewsController@getThem')->name('news.them');
        Route::post('them','NewsController@postThem');

        Route::get('sua/{id}','NewsController@getSua');
        Route::post('sua/{id}','NewsController@postSua');

        Route::get('xoa/{id}','NewsController@getXoa');

        Route::get('/timkiem','NewsController@getSearch');
    });

	Route::group(['prefix' => 'users'], function() {

        Route::get('danhsach','UserController@getDanhSach')->name('users.danhsach');

        Route::get('sua/{id}','UserController@getSua');
        Route::post('sua/{id}','UserController@postSua');

        Route::get('them','UserController@getThem')->name('users.them');
        Route::post('them','UserController@postThem');

        Route::get('xoa/{id}','UserController@getXoa');

        Route::get('/timkiem','UserController@getSearch');
	});

	Route::group(['prefix' => 'statistics'], function() {
		Route::get('statistics', function() {
			return redirect('statistics');
		});
		Route::resource('statistics', 'StatisticsController');
	});

});

