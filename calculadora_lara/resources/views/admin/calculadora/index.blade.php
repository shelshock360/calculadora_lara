
@extends('layout.base')
@section('titulo','Cursos')
@section('conteudo')
    

<form action="calculadora/calcular" method="POST">

    {{ csrf_field() }}

    <input type="number" name="n1" placeholder="digite numero"><br/>
    <input type="number" name="n2" placeholder="digite numero"><br/>

    <label for="operacao">operacao</label>

    <select name="operacao">
      <option>+</option>
      <option>/</option>
      <option>*</option>
      <option>-</option>
     
    </select>
    <button class="btn btn-primary">calcular</button>

    
  


  

    

</form>


@endsection    
