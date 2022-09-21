<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Models\Allorders;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;

class AllordersController extends Controller
{
    use GeneralTrait;
    public function index()
    {
        $Allorders = Allorders::get();

        return response() ->json($Allorders);
    }
    public function getOrderByuserId(Request $request)
    {
        $Allorders = Allorders::where('user_id ','=',$request -> user_id )->get();
        if(!$Allorders){
            return $this->returnError(400,"Bad Request..");
        }
        return response() ->json($Allorders);
    }

    public function addToOrder(Request $request)
    {
        $Allorders = Allorders::create([
            'user_id' =>$request->user_id,
            'mealData' =>$request->mealData,
            'tb_num' =>$request->tb_num,
            'total_price' =>$request->total_price,
        ]);
        if(!$Allorders){
            return $this->returnError(400,"Bad Request..");
        }
        return response() ->json($Allorders);


    }
}
