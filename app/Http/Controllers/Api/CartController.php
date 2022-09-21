<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Models\Cart;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;

class CartController extends Controller
{
    use GeneralTrait;
    public function index()
    {
        $Cart = Cart::get();

        return response() ->json($Cart);
    }
    public function getCartById(Request $request)
    {
        $Cart = Cart::where('user_id','=',$request -> user_id)->get();
        if(!$Cart){
            return $this->returnError(400,"Bad Request..");
        }
        return response() ->json($Cart);
    }
    public function addToCart(Request $request)
    {
        $add = Cart::create([
            'user_id' =>$request->user_id,
            'meal_id' =>$request->meal_id,
            'Quantity' =>$request->Quantity,
        ]);
        if(!$add){
            return $this->returnError(400,"Bad Request..");
        }
        return response() ->json($add);


    }
    public function deleteFromCart(Request $request)
    {
        $delete = Cart::destroy('id', $request-> id);
        if(!$delete){
            return $this->returnError(400,"Bad Request..");
        }
        return $this->returnData('Delete Cart',$delete,'Product deleted');

    }
    public function deleteAllFromCart(Request $request)
    {
        
        $delete =Cart::where('user_id', $request-> user_id)->delete();
        if(!$delete){
            return $this->returnError(400,"Bad Request..");
        }
        return $this->returnData('Delete Cart',$delete,'Product deleted');

    }

}


