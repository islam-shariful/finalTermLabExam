<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class EmpController extends Controller
{
    function index(){
        $user = DB::table('jobs')->get();
        return view('employee.home')->with('user', $user);

        //echo $user;
        // $user = new User();
        // $userList = $user->get();
        // return view('admin.index')->with('userList', $userList);
    }
    
    public function create(Request $request){
        return view('employee.create');
    }

    public function store(Request $request){

        $request->validate([
        
            'companyname' => 'required',
            'title'       => 'required',
            'location'    => 'required',
            'salary'      => 'required',
        ]);
        
        DB::table('jobs')
            ->insert(['company_name'      => $request->companyname,
                        'job_title'     => $request->title,
                        'job_location'     => $request->location,
                        'salary'        => $request->salary]);

        return redirect()->route('employee.home');
    }
    function edit($id){
        echo "hi";
        $job = DB::table('jobs')
            ->where('job_id', $id)->first();
        return view('employee.edit')->with('job', $job);

    }

    function update($id, Request $request){

        $request->validate([
            'companyname'=> 'required',
            'title' => 'required',
            'location'     => 'required',
            'salary'     => 'required'
        ]);

        DB::table('jobs')->where('job_id', $id)
            ->update(['company_name'      => $request->companyname,
                        'job_title'     => $request->title,
                        'job_location'     => $request->location,
                        'salary'        => $request->salary]);

        return redirect()->route('employee.home');

    }
    function delete($id){
            
        DB::table('jobs')->where('job_id', $id)->delete();
        return redirect()->route('employee.home');

    }
 
}