<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="{{route('users.edit',['user'=>$user->id])}}" method="POST">
       @csrf
       @method('PUT')
    <input type="text" name="name" placeholder="digite seu nome" value="{{$user->name}}"><br/>
    <input type="email" name="email" placeholder="digite seu email" value="{{$user->email}}"><br/>
    <input type="password" name="password" placeholder="digite sua senha"><br/>
    <button>atualizar</button>
   </form>
    
</body>
</html>