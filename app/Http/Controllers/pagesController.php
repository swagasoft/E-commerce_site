<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;

class pagesController extends Controller
{
   
    public function index(){

        $products = Product::inRandomOrder()->take(8)->get();
        return view('pages.welcome', compact('products'));
    }

     //about function
     public function about()
     {
         return view('pages.about');
     }
     //privacy policy
     public function privacy_pl()
     {
         return view('pages.privacy');
     }

     //privacy policy
     public function conditions()
     {
         return view('pages.conditions');
     }
        // product function
     public function product()
     {
         return view('pages.conditions');
     }

     // fashhion function
     public function fashion()
     {
         return view('pages.fashion');
     }
     // phone_tablet function
     public function phone_tablet()
     {
         return view('pages.phone_tablet');
     }
     // personal_services function
     public function personal_services()
     {
         return view('pages.personal_services');
     }
     // baby and toys function
     public function baby_toys()
     {
         return view('pages.baby_toys');
     }
     // computers function
     public function computers()
     {
         return view('pages.computers');
     }
     // kithchen function
     public function kitchen()
     {
         return view('pages.kitchen');
     }
     // electronics function
     public function electronics()
     {
         return view('pages.electronics');
     }
}
