<?php

namespace App\Http\Controllers;

use App\Models\Packages;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $title="Landing Page";
    //     $packages=[(object)[
    //         'package_code'=>'Dummy Code',
    //         'package_name'=>'Dummy Name',
    //         'package_desc'=>'Dummy Desc'
    //     ],(object)[
    //         'package_code'=>'Dummy Code 2',
    //         'package_name'=>'Dummy Name 2',
    //         'package_desc'=>'Dummy Desc 2'
    //     ],(object)[
    //         'package_code'=>'Dummy Code 3',
    //         'package_name'=>'Dummy Name 3',
    //         'package_desc'=>'Dummy Desc 3'
    //     ]
    // ];
        $packages=Packages::all();
        // dd($packages);
        return view('frontpage.landingpage', compact('title', 'packages'));
    }
}
