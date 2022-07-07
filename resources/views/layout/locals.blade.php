<!DOCTYPE html>
<html lang="en">


<x-head >
    <x-slot:titleHead> 
        @yield('titleHead') 
    </x-slot:titleHead>
</x-head>
{{-- <head>
    <x-head />

    <title>@yield('title-head')</title>
</head> --}}

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

        
    <h1 class="title"> @yield("title") </h1>

    <h2 class="subtitle">Bienvenido, <span class="name_user"> @yield("name")</span></h2>

    <hr class="divisor">

    <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis quae eos fugiat saepe,
        nisi ipsa quaerat maiores! Tenetur delectus esse reprehenderit aperiam similique atque rerum illum doloremque,
        soluta, asperiores at!</p>



       @yield ("content")

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>





@yield('footer-section')

@yield('message')
</body>

</html>


