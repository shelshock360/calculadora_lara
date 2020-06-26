@extends('layout.base')
@section('titulo','Outros')
@section('conteudo')
     

<form action="outros" method="POST">

    {{ csrf_field() }}

    <input type="number" name="n1" placeholder="digite numero"><br/>

    <label for="operacao">operacao</label>

    <select name="operacao">
      <option>raiz</option>
      <option>potencia</option>
    </select>
    <button class="btn btn-primary">calcular</button>

</form>


@endsection    