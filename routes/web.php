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

Route::get('/', 'DashboardController@index');
Route::post('/send', 'DashboardController@sendEmail');
Route::get('/404', 'DashboardController@ernodata');
Route::get('/restricted', 'AuthController@login')->name('signin');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');
Route::post('/member/registered', 'MemberController@registered');


Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', 'DashController@index');
});
Route::group(['middleware' => ['auth', 'roleCheck:administrator']], function () {
    // ROUTE VIEW
    Route::get('/legal', 'ItemController@index');
    Route::get('/jadwal', 'KategoriController@index');
    Route::get('/member', 'MemberController@index');
    Route::get('/vessel', 'VesselController@index');

    // ROUTE CREATE NEW
    Route::post('/legal/addnew', 'ItemController@addnewitem');
    Route::post('/jadwal/addnew', 'KategoriController@addnew');
    Route::post('/member/addnew', 'MemberController@addnewmember');
    Route::post('/vessel/addnew', 'VesselController@addnew');

    // ROUTE GET (EDIT ROUTE)
    Route::get('legal/{legal_id}/edit', 'ItemController@edit');
    Route::get('jadwal/{id}/edit', 'KategoriController@edit');
    Route::get('member/{member_id}/edit', 'MemberController@edit');
    Route::get('vessel/{vessel_id}/edit', 'VesselController@edit');

    // ROUTE UPDATE (UPDATE ROUTE)
    Route::post('legal/{legal_id}/update', 'ItemController@update');
    Route::post('jadwal/{id}/update', 'KategoriController@update');
    Route::post('member/{member_id}/update', 'MemberController@update');
    Route::post('vessel/{vessel_id}/update', 'VesselController@update');

    // ROUTE DELETE (DELETE ROUTE)
    Route::get('legal/{legal_id}/delete', 'ItemController@delete');
    Route::get('jadwal/{id}/delete', 'KategoriController@delete');
    Route::get('member/{member_id}/delete', 'MemberController@delete');
    Route::get('vessel/{vessel_id}/delete', 'VesselController@delete');
});
// MEMBER JADWAL KAPAL & VESSEL AUTHORITY
Route::group(['middleware' => ['auth', 'roleCheck:member,administrator']], function () {
    // ROUTE VIEW
    Route::get('/jadwal', 'KategoriController@index');
    Route::get('/vessel', 'VesselController@index');

    // ROUTE CREATE NEW
    Route::post('/jadwal/addnew', 'KategoriController@addnew');
    Route::post('/vessel/addnew', 'VesselController@addnew');

    // ROUTE GET (EDIT ROUTE)
    Route::get('jadwal/{id}/edit', 'KategoriController@edit');
    Route::get('vessel/{vessel_id}/edit', 'VesselController@edit');

    // ROUTE UPDATE (UPDATE ROUTE)
    Route::post('jadwal/{id}/update', 'KategoriController@update');
    Route::post('vessel/{vessel_id}/update', 'VesselController@update');

    // ROUTE DELETE (DELETE ROUTE)
    Route::get('jadwal/{id}/delete', 'KategoriController@delete');
    Route::get('vessel/{vessel_id}/delete', 'VesselController@delete');
});
// LEGAL MEMBER AUTHORITY
Route::group(['middleware' => ['auth', 'roleCheck:legal,administrator']], function () {
    // ROUTE VIEW
    Route::get('/legal', 'ItemController@index');

    // ROUTE CREATE NEW
    Route::post('/legal/addnew', 'ItemController@addnewitem');
});
