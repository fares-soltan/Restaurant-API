<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Models\Orders;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    use GeneralTrait;
    public function index()
    {
        $Orders = Orders::get();

        return response() ->json($Orders);
    }
    public function getOrderByuserId(Request $request)
    {
        $Orders = Orders::where('user_id ','=',$request -> user_id )->get();
        if(!$Orders){
            return $this->returnError(400,"Bad Request..");
        }
        return response() ->json($Orders);
    }

    public function addToOrder(Request $request)
    {
        $Orders = Orders::create([
            'user_id' =>$request->user_id,
            'mealData' =>$request->mealData,
            'tb_num' =>$request->tb_num,
            'total_price' =>$request->total_price,
        ]);
        if(!$Orders){
            return $this->returnError(400,"Bad Request..");
        }
        return response() ->json($Orders);


    }
    public function deleteOrder(Request $request)
    {
        
        $delete =Orders::where('id', $request-> id)->delete();
        if(!$delete){
            return $this->returnError(400,"Bad Request..");
        }
        return $this->returnData('Delete Order',$delete,'Product deleted');

    }
    public function getOrderBytablenumber(Request $request)
    {
        $Orders = Orders::where('tb_num','=',$request -> tb_num )->get();
        if(!$Orders){
            return $this->returnError(400,"Bad Request..");
        }
        return response() ->json($Orders);
    }
    public function deleteOrderBytablenumber(Request $request)
    {
        
        $delete =Orders::where('tb_num', $request-> tb_num)->delete();
        if(!$delete){
            return $this->returnError(400,"Bad Request..");
        }
        return $this->returnData('Delete Cart',$delete,'Product deleted');

    }
}
