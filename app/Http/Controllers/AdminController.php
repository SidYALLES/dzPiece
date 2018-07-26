<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{
    /*
    public funtion updateUser()
    {
        
    }

    public funtion addAdmin()
    {
        
    }
    
    public funtion updateInfo()
    {
        
    }*/
    public function addUserForm()
    {
        return view('admin.addUserForm');
    }

    public function addUser(Request $request)
    {
        return 'user add';
    }
}
