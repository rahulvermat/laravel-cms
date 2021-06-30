<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class LoginController extends Controller
{
    function index(){

        return view('login');
    }


    function login(Request $req){

        $user = User::where(['email'=>$req->email])->first();

        if(!$user || !Hash::check($req->password,$user->password)){
            // return "error in login detail";

            $req->session()->flash('email',$req->email);
			return redirect('/');

            

        }else{

            $req->session()->put(['email'=>$req->email,'id'=>$user->id]);

            return redirect('home');
        }

    }

    function user_reg(){
		
		return view('user_reg');
	}

    
	// function user_reg(Request $req){
		
		
	// 	//return "working";
	// 	 $data=new User();
		
	// 	 $data->email=$req->email;
	// 	 $data->username=$req->name;
	// 	 $data->password=$req->password;
	// 	 $data->role=$req->role;
	// 	 $data->user_id=$req->user_id;
	// 	 $data->phone=$req->phone;
	// 	 $data->dob=$req->dob;

	// 	// //$req->session()->flash('username', $req->username);
	// 	 $data->save();
		
	// 	 return redirect('home');
		
	// }

}
