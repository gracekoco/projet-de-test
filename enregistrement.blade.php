<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    .flex{
        position:center;
    }
    </style>
<body>
    <div class="flex">
        <img src="{{asset('img/R.jpg')}}"  alt="C.N.P.S" width="130px"/>
    <h2><em><strong>Votre Reunion a bien été enregistré</strong></em></h2>
    <a href="{{ url('/') }}"><button class="btn-primary"> OK</button></a>


</body>
</html>
