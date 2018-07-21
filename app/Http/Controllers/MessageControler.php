<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class MessageControler extends Controller
{
   public function submit(Request $request)
   {
       $this->validate($request,[
          'name'=>'required',
           'email'=>'required|email'
       ]);
       return 'SUCCES';
   }
    
}
