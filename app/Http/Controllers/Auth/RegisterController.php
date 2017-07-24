<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
use Session;


class RegisterController extends Controller
{
    /**
     * @param Request $request
     */
    public function create(Request $request)
    {

        $this->validate($request,[
                "username"=>"required",
                "email" =>"required|email",
                "password"=>"required|min:6|confirmed",
                "password_confirmation"=>"required|min:6"
            ]);


            $user = User::create([
                "name"=>$request->username,
                "email"=>$request->email,
                "password"=>bcrypt($request->password),
                "status"=>"0"
            ]);

            if($user){
                \Session::flash("msg","Registration Create Successfully");
                return View("signin");

            }
    }

    public function login(Request $request){

        $this->validate($request,[
            "email"=>"required|email",
            "password"=>"required"
        ]);

        $email= $request->email;
        $pass =$request->password;

        if(Auth::attempt(['email'=>$email,'password'=>$pass])){
               return redirect("admin/users");

        }else{
            \Session::flash("msg","Please check Email or Password");
            return View("signin");
        }
    }
    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect()->to('/');
    }


}
