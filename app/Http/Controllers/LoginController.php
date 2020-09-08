<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{
    public function index(){
        return view('login.login');
    }
    public function validation(Request $request){
        // $user = DB::table('users')->get();
        $user = new User();
        $userInfo = $user->where('username', $request->username)->get();
        if($userInfo[0]['password'] == $request->password && $userInfo[0]['type'] == 'Admin'){
            $request->session()->put('username',$request->username);
            return redirect('/home');
        }
        else if($userList[0]['password'] == $request->password && $userList[0]['type'] == 'Employee'){
            echo 'employee';
        }
        else{
            return redirect('login');
        }
    }
}
