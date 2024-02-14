<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Models\User;
use App\Models\tables;
use App\Models\developer1;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        if(Auth::id()){
            $role=Auth()->user()->role;
            if($role=='user'){
                return view('home.homepage');
            }
            else if($role=='admin'){
                return view('admin.adminhome');
            }
            else{
                return redirect()->back();
            }
        }
        
    }
    public function homepage(){
        return view('home.homepagedefault');
    }
    public function dev1homepage(){
        if(Auth::id()){
            $role=Auth()->user()->role;
            if($role=='user'){
                $userId = Auth::id();
                $data=tables::all();
                $record = Developer1::where('status', 'complete')->get();

                $data2=developer1::where('user_id', $userId)->where('status', 'incomplete')->get();
                return view('home.homepage',compact('data', 'data2', 'record'));
            }
            elseif ($role=='admin'){
                return view('admin.adminhome');
            }
            else{
                return redirect()->back();
            }
        }
    }
    // public function dev1homepage(){

    //     $data=tables::all();
    //     $data2=developer1::all();
    //     return view('home.homepage',compact('data', 'data2'));
    // }
    // public function developer1(){
    //     $data2=developer1::all();
    //     dd($data2);
    //     return view('admin.tables.admintables',compact('data2'));
    // }
    // public function forms(){
    //     return view('admin.forms.adminforms');
    // }
}
