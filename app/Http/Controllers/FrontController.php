<?php

namespace App\Http\Controllers;

use App\Models\CompanyAbout;
use App\Models\CompanyStatistic;
use App\Models\HeroSection;
use App\Models\OurPrinciple;
use App\Models\OurTeam;
use App\Models\Product;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $statistics = CompanyStatistic::take(10)->get();
        $principles = OurPrinciple::take(4)->get();
        $products = Product::take(3)->get();
        $teams = OurTeam::take(7)->get();
        $testimonials = Testimonial::take(5)->get();
        $heroSections = HeroSection::orderByDesc('id')->take(1)->get();
        return view("front.index", compact('statistics','principles','products','teams','testimonials','heroSections'));
    }


    public function team(){
        $teams = OurTeam::take(7)->get();
        $statistics = CompanyStatistic::take(10)->get();
        return view("front.team", compact('teams','statistics'));
    }

    
    public function about(){
        $statistics = CompanyStatistic::take(10)->get();
        $abouts = CompanyAbout::take(3)->get();
        return view("front.about", compact('abouts','statistics'));
    }
}
