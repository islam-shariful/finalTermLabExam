<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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
        return view('home.createUser');
    }
    //Create 'POST'
    function create(Request $request){
        $user = new User();

        $user->username = $request->username;
        $user->password = $request->password;
        $user->type = $request->type;
        $user->name = $request->name;
        $user->department = $request->department;
        $user->cgpa = $request->cgpa;
        
        $user->save();

        return redirect('home');
    }
    //edit 'GET'
    function edit($userid){
        $user = new User();
        $data = $user->where('userid', $userid)
                        ->get();

        for($i=0; $i<count($data); $i++){
            if($userid == $data[$i]['userid']){
                $user = [
                    'userid'=>$data[$i]['userid'],
                    'username'=>$data[$i]['username'],
                    'password'=>$data[$i]['password'],
                    'type'=>$data[$i]['type'],
                    'name'=>$data[$i]['name'],
                    'department'=>$data[$i]['department'],
                    'cgpa'=>$data[$i]['cgpa']
                ];
                return view('home.edit', $user);
            }
        }
    }
    //update 'POST'
    function update($userid, Request $request){
        $user = User::find($userid);

        $user->username = $request->username;
        $user->password = $request->password;
        $user->type = $request->type;
        $user->name = $request->name;
        $user->department = $request->department;
        $user->cgpa = $request->cgpa;

        $user->save();

        return redirect('home');
    }
    //delete 'GET'
    function delete($userid){
        $user = new User();
        $data = $user->where('userid', $userid)
                        ->get();

        for($i=0; $i<count($data); $i++){
            if($userid == $data[$i]['userid']){
                $user = [
                    'userid'=>$data[$i]['userid'],
                    'username'=>$data[$i]['username'],
                    'password'=>$data[$i]['password'],
                    'type'=>$data[$i]['type'],
                    'name'=>$data[$i]['name'],
                    'department'=>$data[$i]['department'],
                    'cgpa'=>$data[$i]['cgpa']
                ];
                return view('home.delete', $user);
            }
        }
    }
    //Destroy
    function destroy($userid, Request $request){
        $user = User::find($userid);
        $user->delete();

        return redirect('home');
    }
    function details($id){
        echo $id;
    }
    function getStudentList(){
        $users = [
                    ['id'=>'1','name'=>'sharif','email'=>'sharif@gmail.com','password'=>'070'],
                    ['id'=>'2','name'=>'hossain','email'=>'hossain@gmail.com','password'=>'272'],
                    ['id'=>'3','name'=>'isalm','email'=>'isalm@gmail.com','password'=>'373'],
                ];

        for($i=0; $i<count($users); $i++){
            $users[$i]['password'] = Hash::make($users[$i]['password']);
        }
        return $users;
    }
}
