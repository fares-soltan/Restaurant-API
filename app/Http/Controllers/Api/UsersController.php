<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Models\Users;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;


class UsersController extends Controller
{
    use GeneralTrait;
    public function index()
    {
       $Users = Users::get();

        return response() ->json($Users);
    }

    public function getUserById(Request $request)
    {
        $Users = Users::find($request -> id);
        if(!$Users){
            return $this->returnError(400,"Bad Request..");
        }
        return response() ->json($Users);
    }
    public function createUser(Request $request)
{
    $Create = Users::create([
        'user_name' =>$request->user_name,
        'user_email' =>$request->user_email,
        'user_phone' =>$request->user_phone,
        'user_add' =>$request->user_add,
        'user_password' =>$request->user_password,
        'status' => $request->status,
        'user_points'=> $request->user_points,

    ]);
    if(!$Create){
        return $this->returnError(400,"Bad Request..");
    }
    return response() ->json($Create);


}

      public function changeStatus(Request $request)
      {
          Users::where('id','=',$request-> id) -> update(['status' => $request-> status]);
          return $this->returnSuccessMessage('changed status...!');
      }

    public function changePassword(Request $request)
    {
        Users::where('id','=',$request-> id) -> update(['user_password' => $request-> user_password]);
        return $this->returnSuccessMessage('changed Password...!');
    }


}
