<?php

namespace App\Http\Controllers;

use App\Client;
use App\Concessionnaire;
use App\Particulier;
use App\Prive;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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

    public function modifyUserForm()
    {
        return view('admin.modifyClientForm');
    }

    public function listEmail(Request $request)
    {
        $type=$request->type;
        if($type=='Particulier') $tab= DB::table('particuliers')->select('email as user_email')->get();
        elseif ($type=='Privé')$tab= DB::table('prives')->select('email as user_email')->get();
        else $tab= DB::table('concessionnaires')->select('email as user_email')->get();
        return json_encode($tab);
    }

    public function infoEmail(Request $request)
    {
        if ($request->type=='Particulier') $typeTab='particuliers';
        elseif ($request->type=='Privé') $typeTab='prives';
        else $typeTab='concessionnaires';

        $info=DB::table($typeTab)->select('nom','prenom','dateN')->where('email',$request->email)->get();
        $user_name=DB::table('users')->select('name')->where('email',$request->email)->get();
        $cord=DB::table('clients')->select('numero','addresse')->where('email',$request->email)->get();
        $result=array_merge($user_name,$cord,$info);
        return json_encode($result);
    }

    public function modifyUser(Request $request)
    {
        if ($request->selectUserType=='Particulier') $typeTab='particuliers';
        elseif ($request->selectUserType=='Privé') $typeTab='prives';
        else $typeTab='concessionnaires';
        DB::table($typeTab)->where('email',$request->email_list)->update(['nom'=>$request->nom,'prenom'=>$request->prenom,'dateN'=>$request->dateN]);
        DB::table('clients')->where('email',$request->email_list)->update(['numero'=>$request->numero,'addresse'=>$request->addresse]);
        return back();
    }

    public function addAdminForm()
    {
        $privil=DB::table('admins')->select('privilege')->where('email',Auth::user()->email)->first();
        return view('admin.ajouterAdminForm')->with('privil',$privil->privilege);
    }

    public function addAdmin(Request $request)
    {
        $p=DB::table('admins')->select('privilege')->where('email',Auth::user()->email)->first();
        $this->validate($request,[
            'nom'=>'required',
            'email'=>'required|email|unique:users',
            'mdp'=>'required',
            'name'=>'required|unique:users',
            'prenom'=>'required',
            'selectPrivil'=>'required|min:'.$p->privilege,
        ]);

        DB::table('users')->insert(['email'=>$request->email,'password'=>bcrypt($request->mdp),'name'=>$request->name,'type'=>1]);
        DB::table('admins')->insert(['email'=>$request->email,'nom'=>$request->nom,'prenom'=>$request->prenom,'privilege'=>$request->selectPrivil]);
        return back();
    }

    public function modifyAdminForm()
    {
        $emails=DB::table('admins')->select('email')->get();
        return view('admin.modifyAdmin')->with('emails',$emails);
    }

    public function modifyAdmin(Request $request)
    {
        DB::table('admins')->where('email',$request->email_list_admin)->update(['nom'=>$request->nom,'prenom'=>$request->prenom]);
        return back();
    }

    public function infoEmailAdmin(Request $request)
    {
        $info=DB::table('admins')->select('nom','prenom','privilege')->where('email',$request->email)->get();
        $name=DB::table('users')->select('name')->where('email',$request->email)->get();
        return json_encode(array_merge($info,$name));
    }

    public function modifyInfoForm()
    {
        $info=DB::table('admins')->select('nom','prenom','privilege')->where('email',Auth::user()->email)->first();
        return view('admin.myInformationForm')->with('info',$info);
    }

}
