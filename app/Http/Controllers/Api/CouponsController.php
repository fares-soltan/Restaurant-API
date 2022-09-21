<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Models\Coupons;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;

class CouponsController extends Controller
{
    use GeneralTrait;
    public function index()
    {
        $Coupons = Coupons::get();

        return response() ->json($Coupons);
    }
    public function addCoupon(Request $request)
    {
        $Coupons = Coupons::create([
            'code' =>$request->code,
            'percent' =>$request->percent
        ]);
        if(!$Coupons){
            return $this->returnError(400,"Bad Request..");
        }
        return response() ->json($Coupons);


    }
}
