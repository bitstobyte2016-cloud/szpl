<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    public function index(): string
    {
        return view('home');
    }

    public function about_us(): string
    {
        return view('about_us');
    }

    public function products(): string
    {
        return view('products');
    }

    public function sustain(): string
    {
        return view('sustain');
    }

    public function career(): string
    {
        return view('career');
    }

    public function contact_us(): string
    {
        return view('contact_us');
    }
    
    //to open the products page with selected product
    public function product_select(){
        
    }
}
