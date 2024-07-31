<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function card()
    {
        return view('card');
    }

    public function detail()
    {
        return view('detail');
    }

    public function product()
    {
        return view('product');
    }

    public function blogs()
    {
        return view('blogs');
    }

    public function user()
    {
        return view('user');
    }

    public function blogsdetail()
    {
        return view('blogsdetail');
    }

    public function privacy()
    {
        return view('privacy');
    }

    public function terms()
    {
        return view('terms');
    }

    public function faq()
    {
        return view('faq');
    }

    public function compaire()
    {
        return view('compaire');
    }

    public function wishlist()
    {
        return view('wishlist');
    }

    public function become()
    {
        return view('become');
    }

    public function flashsale()
    {
        return view('flashsale');
    }

    public function sellers()
    {
        return view('sellers');
    }

    public function detailsellers()
    {
        return view('detailsellers');
    }

    public function order()
    {
        return view('order');
    }

    public function checkout()
    {
        return view('checkout');
    }

    // method selanjutnya untuk bagian front
}
