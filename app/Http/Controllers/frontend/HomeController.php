<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Coliving;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data['colivings'] = Coliving::all();
        return view('frontend.home.index' , $data);
    }
}
