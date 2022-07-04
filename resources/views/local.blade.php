<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalle</title>



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link rel="stylesheet" href=" {{asset("/css/style.css")}}">
</head>

<body>

    <ul class="nav mt-5 mb-5 d-flex justify-content-around fs-3">
        <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href=" {{ url('home') }} ">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="{{ url('about') }}">About Us</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="{{ url('contact') }}">Contact Us</a>
        </li>
    </ul>


    <hr class="divisor">


    <h1 class="title">Hola somos XXXX</h1>
    <h2 class="subtitle">Bienvenido, <span class="name_user"> XXXX</span></h2>

    <hr class="divisor">

    <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis quae eos fugiat saepe,
        nisi ipsa quaerat maiores! Tenetur delectus esse reprehenderit aperiam similique atque rerum illum doloremque,
        soluta, asperiores at!</p>





        <div class="card m-auto" style="width: 30rem;">
            <div class="card-body text-center">
              <h5 class="card-title">{{ $local[1]}}</h5>
              <p class="card-text">{{$local[2]}}</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>



        @php

        /*


        <table class="table table-striped table-hover mx-auto w-50">

            @foreach ($locals as $local)

            <tr>
                <td class="text-center">{{$local[1]}}</td>
                <td class="text-center">{{$local[2]}}</td>
            </tr>
            
                
            @endforeach
       

            */
            

        @endphp
        



    </table>




    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

</body>

</html>