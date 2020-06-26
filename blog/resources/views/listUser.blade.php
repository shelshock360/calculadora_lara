<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalhes de Usuario</title>
</head>
<body>

        <!-- ssds  -->
    <h1>ola {{$user->name}}</h1>
    <p>{{$user->email}}</p>

    <!-- pegando a data lançada ao banco  -->

    <p>{{date('d/m/Y H:i',strtotime($user->created_at) )}}</p>

</body>
</html>