<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('debug')}}" method="post">

        @csrf
        <input type="text" name="title" placeholder="titulo"> <br/>
        <input type="text" name="subtitle" placeholder="subtitulo"><br/>
       <textarea name="content" cols="30" rows="10"></textarea>
       <button>cadastrar</button>
    </form>
</body>
</html>