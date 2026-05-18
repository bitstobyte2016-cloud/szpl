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
    
    public function policy():string{
        return view('privacy');
    }
    
    public function terms():string{
        return view('terms');
    }
    
    //to open the products page with selected product
    public function product_select(){
        
    }
    
    public function sendQuery()
    {
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        $email = \Config\Services::email();


        $fullName =$this->request->getPost('name');

        $phone =$this->request->getPost('phno');

        $userEmail =$this->request->getPost('email');

        $company =$this->request->getPost('comp');

        $message =$this->request->getPost('msg');


        $email->setFrom('website@swasticzinc.com','Swastic Zinc Website');
        $email->setTo('support@swasticzinc.com');
        $email->setCC('aradhana@swasticzinc.com');
        $email->setReplyTo($userEmail,$fullName);
        $email->setSubject('New Query From Website');

        $body = "New Website Query
            Full Name:{$fullName}
            Phone Number:{$phone}
            Email Address:{$userEmail}
            Company:{$company}
            Message:{$message}";

        $email->setMessage($body);

        if ($email->send()) {
            return "Email sent successfully";
        } else {
            return "Email could not be sent.";
        }
    }
}
