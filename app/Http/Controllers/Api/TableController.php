<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Models\Table;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;

class TableController extends Controller
{
    use GeneralTrait;
    public function index()
    {
        $Table = Table::get();

        return response() ->json($Table);
    }
    public function getTableById(Request $request)
    {
        $Table = Table::where('user_id','=',$request -> user_id)->first();
        if(!$Table){
            return $this->returnError(400,"Bad Request..");
        }
        return response() ->json($Table);
    }
    
        public function getTableByTbNum(Request $request)
    {
        $Table = Table::where('table_num','=',$request -> table_num)->first();
        if(!$Table){
            return $this->returnError(400,"Bad Request..");
        }
        return response() ->json($Table);
    }

    public function addToTable(Request $request)
    {
        $Table = Table::create([
            'user_id' =>$request->user_id,
            'table_num' =>$request->table_num,
            'number_of_chairs' =>$request->number_of_chairs,
        ]);
        if(!$Table){
            return $this->returnError(400,"Bad Request..");
        }
        return response() ->json($Table);


    }
    public function deleteAllFromTable(Request $request)
    {
        
        $delete =Table::where('user_id', $request-> user_id)->delete();
        if(!$delete){
            return $this->returnError(400,"Bad Request..");
        }
        return $this->returnData('Delete Cart',$delete,'Product deleted');

    }
}
