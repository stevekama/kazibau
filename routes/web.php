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

Route::get('/', 'PagesController@index');

Route::get('/shop', 'PagesController@shop');

Route::get('/contact', 'PagesController@contact');

Route::get('/blog', 'PagesController@blog');

Route::get('/blog-details', 'PagesController@blog_details');

Route::get('/cart', 'PagesController@cart');

Route::get('/checkout', 'PagesController@checkout');

Route::get('/faq', 'PagesController@faq');

Route::get('/register', 'PagesController@register');

Route::get('/login', 'PagesController@login');