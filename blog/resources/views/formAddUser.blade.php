<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="{{route('users.cadastro')}}" method="POST">
       @csrf
    <input type="text" name="name" placeholder="digite seu nome"><br/>
    <input type="email" name="email" placeholder="digite seu email"><br/>
    <input type="password" name="password" placeholder="digite sua senha"> <br/>
    <button>registrar</button>
   </form>
    
</body>
</html>