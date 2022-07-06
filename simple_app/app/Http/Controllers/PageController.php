<?php

namespace App\Http\Controllers;

use App\Models\Form_db;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('home');
    }

    public function show(){
        $content = Form_db::all();
        return view('show', compact('content'));
    }

    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'surrname'=>'required',
            'email'=>'required',
            'number'=>'required|min:8|max:8',
            'check'=>'required',
        ]);
        dd($request->all());
    }
}
