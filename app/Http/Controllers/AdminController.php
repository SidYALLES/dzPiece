<?php

namespace App\Http\Controllers;

use App\Client;
use App\Concessionnaire;
use App\Particulier;
use App\Prive;
use App\User;
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
        $this->validate($request,[
            'nom'=>'required',
            'email'=>'required|email|unique:users',
            'mdp'=>'required',
            'name'=>'required|unique:users',
            'prenom'=>'required',
            'dateN'=>'required',
            'numero'=>'required',
            'adresse'=>'required',
        ]);
        $user=new User;
        $user->email=$request->email;
        $user->name=$request->name;
        $user->password=bcrypt($request->mdp);
        $user->type=0;
        $user->save();

        $client=new Client();
        $client->email=$request->email;
        switch ($request->selectUser)
        {
            case ('Particulier') : $client->type=0;
            case ('Concessionnaire') : $client->type=1;
            case ('Privé') : $client->type=2;
        }
        $client->numero=$request->numero;
        $client->addresse=$request->adresse;
        $client->save();

        if($request->selectUser=='Particulier')
        {
            $particulier=new Particulier();
            $particulier->email=$request->email;
            $particulier->nom=$request->nom;
            $particulier->prenom=$request->prenom;
            $particulier->dateN=$request->dateN;
            $particulier->save();
        }
        elseif ($request->selectUser=='Privé')
        {
            $prive=new Prive();
            $prive->email=$request->email;
            $prive->nom=$request->nom;
            $prive->prenom=$request->prenom;
            $prive->dateN=$request->dateN;
            $prive->save();
        }
        else
            {
                $con=new Concessionnaire();
                $con->email=$request->email;
                $con->nom=$request->nom;
                $con->prenom=$request->prenom;
                $con->dateN=$request->dateN;
                $con->save();
            }
        return back();
    }
}
