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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
    Route::get('property_config', function () {
        return view('pages.admin_panel.property_config');
    })->name('property_config');

    Route::get('property_main', function () {
        return view('pages.agent.property_main');
    })->name('property_main');

    Route::get('media_config', function () {
        return view('pages.admin_panel.media_config');
    })->name('media_config');

    Route::get('media_upload','MediaUploadController@index');
    //Route::post('get_media','MediaUploadController@media_get')->name('media_get');
    Route::post('media_upload','MediaUploadController@media_upload');

    Route::get('booster_config', function () {
        return view('pages.admin_panel.booster_config');
    })->name('booster_config');

    Route::get('survey_config', function () {
        return view('pages.admin_panel.survey_config');
    })->name('survey_config');

    Route::get('user_config', function () {
        return view('pages.admin_panel.user_config');
    })->name('user_config');

    Route::get('notification_settings', function () {
        return view('pages.admin_panel.notification_settings');
    })->name('notification_settings');

    Route::get('api_gateway_settings', function () {
        return view('pages.admin_panel.api_gateway_settings');
    })->name('api_gateway_settings');

	Route::get('table-list', function () {
		return view('pages.table_list');
	})->name('table');

	Route::get('typography', function () {
		return view('pages.typography');
	})->name('typography');

	Route::get('icons', function () {
		return view('pages.icons');
	})->name('icons');

	Route::get('map', function () {
		return view('pages.map');
	})->name('map');

	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');

	Route::get('rtl-support', function () {
		return view('pages.language');
	})->name('language');

	Route::get('upgrade', function () {
		return view('pages.upgrade');
	})->name('upgrade');
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

