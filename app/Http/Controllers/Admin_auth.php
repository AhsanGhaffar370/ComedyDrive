<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\User;

use Illuminate\Http\Request;

class Admin_auth extends Controller
{
    function login_req(Request $req){
        $email= $req->email;
        $password= md5($req->pass);

        $res=User::where('email',$email)->where('password',$password)->get();
        // dd(isset($res[0]));
        // echo "<pre>";
        // print_r($res[0]);
        if(isset($res[0])){
            if($res[0]->status==1){
                $req->session()->put('user_id',$res[0]->id);
                $fullname=$res[0]->firstname." ".$res[0]->lastname;
                $req->session()->put('user_name',$fullname);
                // dd(session()->has('user_id'));
                return redirect()->route('admin.dashboard');
            }
            else{
                $req->session()->flash('err','email or password is incorrect');
                return redirect()->route('admin.login');
            }

        }else{
            $req->session()->flash('err','email or password is incorrect');
            return redirect()->route('admin.login');
        }
    }
}
