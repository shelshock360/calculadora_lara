@extends('layout.base')
@section('titulo','Estados')
@section('conteudo')

<div class="container">
    <h4 class="center">Lista De  Estados</h4>
   <div class="row"> 

    <table>
        <thead>
            <tr>
                <td>ID</td>
                <td>Nome</td>
                <td>Sigla</td>
                <td>Opções</td>

            </tr>
        </thead>
        <tbody>
            @foreach ($estados as $estado)
            <tr>
                <td>{{$estado->id}}</td>
                <td>{{$estado->nome}}</td>
                <td>{{$estado->sigla}}</td>
                <td>
                  <a class="btn grey darken-4" href="{{route('admin.estado.edit',['estado'=>$estado->id])}}">editar</a> 
                </td>
                <td>
                   <form action="{{route('admin.estado.destroy',['estado'=>$estado->id])}}" method="POST">
                       @csrf
                       @method('delete')
                       <input type="hidden" name="estado" value="{{$estado->id}}">
                       <button class="btn red">Remover</button>
                   </form>
                  </td>

                  <td>
                   <i> <a class="fas fa-eye" href="{{route('admin.estado.show',['estado'=>$estado->id])}}"></a> </i>
                  </td>
            </tr>
            @endforeach 
         
        </tbody>
    </table>

    <div class="row">
        <a class="btn blue" href="{{route('admin.estado.adicionar')}}">adicionar</a>
    </div>



   </div>
</div>    
@endsection

