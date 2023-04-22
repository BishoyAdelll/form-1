<?php

namespace App\Http\Controllers;

use App\Models\form;
use Illuminate\Http\Request;

class FormsController extends Controller
{
    public function index(){
        return view ('app');
    }
    public function store(Request $request){
        $request->validate([
            'email'=>'required',
            'f_name'=>'required',
             'l_name'=>'required',
             'password'=>'required',
 
         ]);
         form::create($request->all());
         $forms=new form();
         $forms->email =request('email');
         $forms->f_name =request('f_name');
         $forms->l_name =request('l_name');
         $forms->u_name =request('u_name');
         $forms->password =request('password');
         $forms->status == true?'1':'0';
        //  'status'=>$this->status == true?'1':'0',
         $forms->save();
        // redirect and send message
        return redirect()->route('index')->with('success','record created successfully');
    }
}
