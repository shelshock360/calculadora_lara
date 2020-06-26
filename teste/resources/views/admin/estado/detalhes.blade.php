@extends('layout.base')
@section('titulo,Estados')
@section('conteudo')



<div class="container">
    <div class="row">

        <h4 class="center">detalhes de cadastro</h4>

        <p>{{$estado->nome}}</p>
        <p>{{$estado->sigla}}</p>
        <p>{{$estado->created_at}}</p>
        


    </div>
</div>
@endsection