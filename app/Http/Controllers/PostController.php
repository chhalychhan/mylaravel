<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function idex(){
        return "This is an index function of controler!";
    }
    public function example(){
        return " This is an exmple 1 of controller post!!";
    }
    public function example2(){
         return " My laravel in php ";
    }
}
