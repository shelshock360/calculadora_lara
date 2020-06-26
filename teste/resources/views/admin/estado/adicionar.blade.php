@extends('layout.base')
@section('titulos','Estados')
@section('conteudo')

<div class="container">
    <h4 class="center">lista de estados</h4>
    <form action="{{route('admin.estado.create')}}" method="Request">
        
        @csrf
        @method('POST')
       @include('admin.estado.form_estado')

       <button class="btn orange">salvar</button>

    </form>
 

</div>

@endsection