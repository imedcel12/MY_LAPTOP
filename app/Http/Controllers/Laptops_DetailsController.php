<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Laptops;

class Laptops_DetailsController extends Controller
{
    public function home(){
        return inertia('Home');
    }
    public function about_us(){
        return inertia('AboutUs');
    }
    public function contact_us(){
        return inertia('ContactUs');
    }
}
