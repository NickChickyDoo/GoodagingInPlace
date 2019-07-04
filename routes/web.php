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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/insights', function () {
    return view('insights');
});

Route::get('/home-self-assessment', function () {
    return view('assesment');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/guidelines-creating-home-elderly', function () {
    return view('content/guidelines-creating-home-elderly');
});

Route::get('/ai-pet', function () {
    return view('content/ai-pet');
});

Route::get('/forest-therapy', function () {
    return view('content/forest-therapy');
});

Route::get('/these-4-new-yorkers-are-experts-living-what-do-they-know-we-dont', function () {
    return view('content/newyorker');
});

Route::get('/greenlight-reduce-migraine', function () {
    return view('content/greenlight-reduce-migraine');
});

Route::get('/what-happens-to-our-society', function () {
    return view('content/what-happens-to-our-society');
});

/*เป็นการเปลี่ยนภาษาเมื่อมีการกดเปลี่ยนภาษา*/
Route::get('locale/{locale}', function($locale){
    Session::put('locale',$locale);
    return redirect()->back();
});

Route::get('/slide', function () {
    return view('partial/slide2');
});
