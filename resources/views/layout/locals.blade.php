{{-- on the next project do not use one layout for 
    all pages! Divede them based on their utilities --}}


<!DOCTYPE html>
<html lang="en">


{{-- <x-head >
    <x-slot:titleHead> 
        @yield('titleHead') 
    </x-slot:titleHead>
</x-head> --}}


<x-head />

<body>

    <x-navbar />

        
    <h1 class="title"> @yield("title") </h1>

    <h2 class="subtitle">Bienvenido, <span class="name_user"> @yield("name")</span></h2>

    <hr class="divisor">

    <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis quae eos fugiat saepe,
        nisi ipsa quaerat maiores! Tenetur delectus esse reprehenderit aperiam similique atque rerum illum doloremque,
        soluta, asperiores at!</p>



       @yield ("content")

       @yield('form')

    @yield('footer-section')

    @yield('message')




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

</body>

</html>


