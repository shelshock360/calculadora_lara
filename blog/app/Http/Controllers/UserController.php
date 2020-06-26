<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function listuser(){

       //   $user= new User();
       //    $user->name='joao marcos';
       //   $user->email='joaom4936@gmail.com';
       //   $user->password= Hash::make('123');
       //  $user->save();
        

     
        
        $user=User::where('id','=',1)->first();

        // 'user' que esta sendo listado no vetor sera o nome da variavel que sera ultilizada dentro da visão
        return view('listUser',[
            'user'=>$user

        ]);
    }
}
