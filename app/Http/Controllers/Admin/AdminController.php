<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

class AdminController extends Controller
{
    public function getalluser(Request $request){

       // $allusers=User::whereNotIn('id',[1])->get();
        $allusers = User::get();

        return view('admin.usersmanges',compact('allusers'));
    }

    public function deletebyId($id){
        $response= User::Where('id',$id)->delete();
        if($response){
            return response()->json(['data'=>'User Account Delete Sucessfully']);

        }else{
            return response()->json(['data'=>'Something Went Wrong']);
        }
    }
    public function editById($id){
        $response= User::Where('id',$id)->first();
        if($response){
            return response()->json(['user'=>$response]);

        }else{
            return response()->json(['user'=>'Something Went Wrong']);
        }
    }

    public function editUserById(Request $request){
        if(!empty($request->pass)){
            $userupdate =User::where('id', $request->id)  // find your user by their email
            ->limit(1)  // optional - to ensure only one record is updated.
            ->update(array(
                'password' => bcrypt($request->pass)
            ));

            if($userupdate){
                return response()->json(['success'=>"Password Updated Sucessfully"]);

            }else{
                return response()->json(['success'=>"Something went Wrong"]);

            }
        }
    }


}
