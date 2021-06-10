<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

// use Illuminate\Support\Facades\DB;

class FrontController extends BaseController
{
    public function index()
    {
        // $data = DB::table('test')->get();
        // var_dump($data);
        return view('front.index');
    }
    public function about()
    {
        return view('front.about');
    }
    public function team()
    {
        return view('front.team');
    }
    public function error()
    {
        return view('front.error');
    }
    public function service()
    {
        return view('front.service');
    }
    public function service_single()
    {
        return view('front.service-single');
    }
    public function blog_grid()
    {
        return view('front.blog-grid');
    }
    public function blog_with_sidebar()
    {
        return view('front.blog-with-sidebar');
    }
    public function blog_details()
    {
        return view('front.blog-details');
    }
    public function contact()
    {
        return view('front.contact');
    }
    public function header()
    {
        return view('front.header');
    }
}
