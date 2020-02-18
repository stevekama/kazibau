<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function shop()
    {
        return view('shop');
    }

    public function contact()
    {
       return view('contact');
    }

    public function blog()
    {
        return view('blog');
    }

    public function blog_details()
    {
        return view('blog_details');
    }

    public function cart()
    {
        return view('cart');
    }

    public function checkout()
    {
        return view('checkout');
    }

    public function faq()
    {
        return view('faq');
    }

    public function register()
    {
        return view('register');
    }

    public function login()
    {
        return view('login');
    }
}