<?php

namespace App\Http\Controllers\Form;

use App\Estado;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
  
        $estados=Estado::all();
        return view('admin.estado.index',[
            'estados'=>$estados

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response 
     */
    public function create(Request $request)
    {
        $estado=new Estado();
        $estado->nome=$request->nome; 
        $estado->sigla=$request->sigla; 
        $estado->save(); 
       
        return redirect()->route('admin.estado.index');
    }

    public function adicionar(){


        return view('admin.estado.adicionar'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(Estado $estado)
    {
        

        return view('admin.estado.detalhes',[
            'estado'=>$estado
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(Estado $estado)
    {
     

        
        return view('admin.estado.edit',[

            'estado'=>$estado

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estado $estado)
    {
              
        $estado->nome=$request->nome; 
        $estado->sigla=$request->sigla; 
        $estado->save();

       return redirect()->route('admin.estado.index');
          
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estado $estado)
    {
       $estado->delete();
       return redirect()->route('admin.estado.index');
    }
}
