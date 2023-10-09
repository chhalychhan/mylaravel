<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('front_home');
    }
    public function about()
    {
        $data['title']="About Us";
        $data['dest']="About";
        return view('front_about',$data);
    }
    public function services()
    {
        $data['title']="Services";
        $data['dest']="Services";
        return view('front_services',$data);
    }
    public function packages()
    {
        $data['title']="Packages";
        $data['dest']="Packages";
        return view('front_packages',$data);
    }
    public function destination()
    {
        $data['title']="Destination";
        $data['dest']="Destianation";
        return view('front_destination',$data);
    }
    public function booking()
    {
        $data['title']="Booking";
        $data['dest']="Booking";
        return view('front_booking',$data);
    }
    public function team()
    {
        $data['title']="Travel Guide";
        $data['dest']="Travel Guide";
        return view('front_team',$data);
    }
    public function testimonial()
    {
        $data['title']="Testimonaial";
        $data['dest']="Testimonaial";
        return view('front_testimonial');
    }
    public function err()
    {
        $data['title']="Not Found";
        $data['dest']="404";
        return view('front_404');
    }
    public function contact ()
    {
        $data['title']="Contact";
        $data['dest']="Contact";
        return view('front_contact',$data);
    }
}
