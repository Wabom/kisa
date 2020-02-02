<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //


    public function index(){

        return view('Backend.dashboard');
    }


    public function addMember(){

        return view('Backend.member');
    }


    public function store(Request $request){

        //store member
        $mamber = new Member;
        $mamber->first = $request->input('first');
        $mamber->last = $request->input('last');
        $mamber->phone = $request->input('phone');
        $mamber->instituion = $request->input('institution');
        $mamber->programme = $request->input('programme');
        $mamber->district = $request->input('district');
        $mamber->country = $request->input('country');
        $mamber->save();


        return redirect('Backend.member-list')->with('success', 'member added successfully');
    }
}
