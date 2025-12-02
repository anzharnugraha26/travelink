<?php

namespace App\Http\Controllers;

use App\Models\Coliving;
use App\Models\ColivingDetail;
use Illuminate\Http\Request;

class PlacesController extends Controller
{
    public function detail($id){
        $coliving = Coliving::where('id' , $id)->first();
        $detail = ColivingDetail::where('coliving_id' , $id)->first();
        return view('frontend.places.detail' , compact('coliving' , 'detail'));
    }
}
