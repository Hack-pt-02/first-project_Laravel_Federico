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


    
    <script src="{{asset("/js/app.js")}}" rel="text/javascript"></script>
    <script src="{{asset("/js/index.js")}}" rel="text/javascript"></script>

</body>

</html>


