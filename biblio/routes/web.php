<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function(){
return view('welcome');
});
Route::get('/page1','PageController@afficherpage1');
Route::get('/home',function() {
    return view('home');
});
Route::get('/au',function() {
    return view('au');
});
Route::get('/addbook',function() {
    return view('addbook');
});
Route::get('/contactus',function() {
    return view('contactus');
});
Route::get('/aboutus',function() {
    return view('aboutus');
});
Route::get('/details',function() {
    return view('details');
});
Route::get('/addcart',function() {
    return view('addcart');
});
Route::get('/homeAuther',function() {
    return view('homeAuther');
});
Route::get('/DashboordAuther',function() {
    return view('DashboordAuther');
});
Route::get('/CompteAuther',function() {
    return view('CompteAuther');
});