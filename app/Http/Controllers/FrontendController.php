<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //welcome page
    public function welcome(){
        return view('welcome');
    }
    //insert
    public function store(Request $request){
        $request->validate([
            "*"=>'required',
        ]);
        Profile::insert([
            "name"=>$request->name,
            "created_at"=>Carbon::now(),
        ]);
        return back()->withSuccess('Data Insert Successfully');
    }
    //show
    public function index(){
        $profiles = Profile::all();
        return view('show',compact('profiles'));
    }
    //edit page
    public function edit($id){
        $list_data_edit=Profile::find($id);
        return view('edit',compact('list_data_edit'));
    }
    //update ToDo list
    public function update(Request $request,$id){
        $request->validate([
            "*"=>'required',
        ]);
        $update_data=Profile::find($id);
        $update_data->update([
            "name"=>$request->name
        ]);
        return back()->withSuccess("$id Number List Update Successfully");
    }

    //Delete list
    public function destroy($id){
        $list_data=Profile::find($id);
        $list_data->delete();
        return back()->withSuccess("$id Number List Delete Successfully");
    }

}
