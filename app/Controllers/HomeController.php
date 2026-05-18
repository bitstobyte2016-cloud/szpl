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
        $email =\Config\Services::email();

        $fullName =$this->request->getPost('full_name');

        $phone =$this->request->getPost('phone');

        $userEmail =$this->request->getPost('email');

        $company =$this->request->getPost('company');

        $message =$this->request->getPost('message');

        $body = " Received new query for website. Details are as follows : 

            Full Name: {$fullName}

            Phone Number: {$phone}

            Email Address: {$userEmail}

            Company: {$company}

            Message:

            {$message}";

        $email->setTo('support@swasticzinc.com');
        $email->setCC("aradhana@swasticzinc.com");

        $email->setSubject('New Website Query' );

        $email->setMessage( nl2br($body));

        if ($email->send()) {
            return $this->response->setJSON(['success' => true]);
        }

        return $this->response->setJSON(['success' => false]);
    }
}
