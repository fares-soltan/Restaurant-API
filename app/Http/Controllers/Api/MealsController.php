<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Models\Meals;
use Illuminate\Http\Request;
use App\Traits\GeneralTrait;

class MealsController extends Controller
{
    use GeneralTrait;
    public function index()
    {
        $Meals = Meals::get();

        return response() ->json($Meals);
    }
    public function getMealById(Request $request)
    {
        $Meals = Meals::where('meal_cat','=',$request -> meal_cat)->get();
        if(!$Meals){
            return $this->returnError(400,"Bad Request..");
        }
        return response() ->json($Meals);
    }

}
