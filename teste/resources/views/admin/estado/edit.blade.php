
@extends('layout.base')
@section('titulos','Estados')
@section('conteudo')

<div class="container">
    <h4 class="center">lista de estados</h4>
    <form action="{{route('admin.estado.update',['estado'=>$estado->id])}}" method="POST">
        @method('PUT')
        @csrf
        
        <div class="input-field">
            <input type="text"  placeholder="nome" name="nome" value="{{$estado->nome}}">
            
        </div>
        
        <div class="input-field">
            <input type="text" placeholder="sigla" name="sigla"value="{{$estado->sigla}}">
        </div>

       <button class="btn orange">salvar</button>

    </form>
 

</div>


@endsection



