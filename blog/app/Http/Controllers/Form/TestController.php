<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Hash;
use Illuminate\Support\Facades\Hash as FacadesHash;
use Illuminate\Validation\Concerns\FilterEmailValidation;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;

class TestController extends Controller
{
    //

    public function listAllUsers(){
        $users=User::all();
        return view('listAllUsers',[
        'users'=>$users

        ]);
    }
    public function listUser(User $user){
        return view('listUser',[
            'user'=>$user
        ]);
    }

    public function formAddUser(){



        return view('FormAddUser');
    }

    public function cadastro(Request $request){

       
        $user=new User();
        $user->name= $request->name;
        $user->email=$request->email;
        $user->password= FacadesHash::make($request->password);
        $user->save();

        return redirect()->route('users.listAll');
    }

    public function formEditUser(User $user){


        return view('editUser',[
            'user'=>$user


        ]);
    }


    public function edit(Request $request, USER $user){


        $user->name= $request->name;
        //verificando se o email é valido

        if(filter_var($request->email,FILTER_VALIDATE_EMAIL)){
            $user->email=$request->email;
        }

        if(!empty($request->password)){
            $user->password= FacadesHash::make($request->password);
        }
  
        $user->save();
        return redirect()->route('users.listAll');
 
    }

    public function delete(User $user){


        $user->delete();
        
        return redirect()->route('users.listAll');
    }
}
