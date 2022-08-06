<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laptops;
class LaptopController extends Controller
{
    public function index(){
        $laptops = Laptops::with('laptops_details')->get();

       return inertia('MyLaptop',[
        'laptops' => $laptops
       ]);
    }
}
