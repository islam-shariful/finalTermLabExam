<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\User;

class HomeController extends Controller
{
    // Index(Show in home)
    public function index(Request $request) {
        $user = new User();
        $userList = $user->get();
        return view('admin.index')->with('userList', $userList);
    }
    //Create 'GET'
    function creation(){
        return view('admin.createUser');
    }
    //Create 'POST'
    function create(Request $request){
        $user = new User();

        $user->username = $request->username;
        $user->password = $request->password;
        $user->type = $request->type;
        $user->employee_name = $request->name;
        $user->company_name = $request->companyname;
        $user->contact_number = $request->contactnumber;
        
        $user->save();

        return redirect('home');
    }
    //edit 'GET'
    function edit($username){
        $user = new User();
        $data = $user->where('username', $username)
                        ->get();

        for($i=0; $i<count($data); $i++){
            if($username == $data[$i]['username']){
                $user = [
                    'username'=>$data[$i]['username'],
                    'password'=>$data[$i]['password'],
                    'type'=>$data[$i]['type'],
                    'employeename'=>$data[$i]['employee_name'],
                    'companyname'=>$data[$i]['company_name'],
                    'contactnumber'=>$data[$i]['contact_number']
                ];
                return view('admin.editUser', $user);
            }
        }
    }
    //update 'POST'
    function update($username, Request $request){

        DB::table('user')
                ->where('username', $username)
                ->update(['username' => $request->username,
                        'password'=> $request->password,
                        'type'=> $request->type,
                        'employee_name'=> $request->name,
                        'company_name'   => $request->companyname,
                        'contact_number'   => $request->contactnumber]);
        return redirect('home');
    }
    //delete 'GET'
    function delete($username){
        $user = new User();
        $userInfo = $user->where('username', $username)
                        ->get();

        for($i=0; $i<count($userInfo); $i++){
            if($username == $userInfo[$i]['username']){
                $user = [
                    'userid'=>$userInfo[$i]['userid'],
                    'username'=>$userInfo[$i]['username'],
                    'password'=>$userInfo[$i]['password'],
                    'type'=>$userInfo[$i]['type'],
                    'employeename'=>$userInfo[$i]['employee_name'],
                    'companyname'=>$userInfo[$i]['company_name'],
                    'contactnumber'=>$userInfo[$i]['contact_number']
                ];
                return view('admin.deleteUser', $user);
            }
        }
    }
    //Destroy
    function destroy($username, Request $request){
        DB::table('user')->delete($username);
        DB::table('user')->where('username', $username)->delete();

        return redirect('home');
    }
}
