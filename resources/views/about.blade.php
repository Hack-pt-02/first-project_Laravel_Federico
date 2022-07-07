
{{-- lleva el layout --}}

@extends('layout.locals')

{{-- title head --}}
@section('titleHead')
    about
@endsection
{{-- title body--}}
@section('title', 'Cerveza')


{{-- name --}}
@section('name', "Federico")


{{-- content --}}

@section('content')

<div class="row p-5 m-5">
    <div class="col-6">
        <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis quae eos fugiat saepe, nisi ipsa quaerat maiores! Tenetur delectus esse reprehenderit aperiam similique atque rerum illum doloremque, soluta, asperiores at!</p>

    </div>
    <div class="col-6">
        <div class="card" style="width: 18rem;">
            <img src="https://i0.wp.com/imgs.hipertextual.com/wp-content/uploads/2022/03/spider_man_tom_holland_andrew_garfield_tobey_maguire.jpg?fit=1600%2C1067&quality=50&strip=all&ssl=1" class="card-img-top" alt="...">
            <div class="card-body">
              <a href="#" class="btn btn-primary w-100">Go somewhere</a>
            </div>
          </div>
    </div>
</div>






<hr class="divisor">

<div class="row p-5 m-5 d-flex justify-content-center">
    <div class="col-xl-4 col-lg-6 col-md-8 col-sm-12">

        <div class="card mb-5" style="width: 18rem;">
            <img src="https://www.usnews.com/object/image/0000017e-79c1-d763-a7ff-f9e39bd60000/gettyimages-1365684462.jpg?update-time=1642720688250&size=responsive640" class="card-img-top" alt="..." >
            <div class="card-body">
              <h5 class="card-title text-center">CEO</h5>
            </div>
          </div>

    </div>

    <div class="col-xl-4 col-lg-6 col-md-8 col-sm-12">

        <div class="card" style="width: 18rem;">
            <img src="https://cdn.vox-cdn.com/thumbor/DiantFR0rO205D-fd2VOVp4OhGk=/0x0:4000x2667/1400x1050/filters:focal(1525x402:2165x1042):no_upscale()/cdn.vox-cdn.com/uploads/chorus_image/image/69237422/1231446945.0.jpg" class="card-img-top" alt="..." style="width: 286px; height:192px;">
            <div class="card-body">
                <h5 class="card-title text-center">Public Relations</h5>

            </div>
          </div>

    </div>

    <div class="col-xl-4 col-lg-6 col-md-8 col-sm-12">

        <div class="card" style="width: 18rem;">
            <img src="https://imageio.forbes.com/specials-images/imageserve/61fc7726d157534e175b5b7b/Profile-Of-Adani-Group-Chairman--Gautam-Adani/1960x0.jpg?format=jpg&width=960" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title text-center">CTO</h5>
            </div>
          </div>

    </div>

    <div class="col-xl-4 col-lg-6 col-md-8 col-sm-12">

        <div class="card" style="width: 18rem;">
            <img src="https://www.dmarge.com/wp-content/uploads/2021/01/dwayne-the-rock-.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center">Marketing</h5>
            </div>
          </div>

    </div>

    <div class="col-xl-4 col-lg-6 col-md-8 col-sm-12">

        <div class="card" style="width: 18rem;">
            <img src="https://www.bentbusinessmarketing.com/wp-content/uploads/2013/02/35844588650_3ebd4096b1_b-1024x683.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title text-center">Interim</h5>
            </div>
          </div>

    </div>

    <div class="col-xl-4 col-lg-6 col-md-8 col-sm-12">

        <div class="card" style="width: 18rem;">
            <img src="https://imageio.forbes.com/specials-images/imageserve/5f469ea85cc82fc8d6083f05/0x0.jpg?format=jpg&width=1200"  class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title text-center">Delivery Guy</h5>
            </div>
          </div>

    </div>
    

</div>

    
@endsection
    














<!--DOCTYPE html>
<html-- lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

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


    <h1 class="title">About Us</h1>
    <h2 class="subtitle">Discover our Team.</h2>

    <hr class="divisor">

    <div class="row p-5 m-5">
        <div class="col-6">
            <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis quae eos fugiat saepe, nisi ipsa quaerat maiores! Tenetur delectus esse reprehenderit aperiam similique atque rerum illum doloremque, soluta, asperiores at!</p>

        </div>
        <div class="col-6">
            <div class="card" style="width: 18rem;">
                <img src="https://i0.wp.com/imgs.hipertextual.com/wp-content/uploads/2022/03/spider_man_tom_holland_andrew_garfield_tobey_maguire.jpg?fit=1600%2C1067&quality=50&strip=all&ssl=1" class="card-img-top" alt="...">
                <div class="card-body">
                  <a href="#" class="btn btn-primary w-100">Go somewhere</a>
                </div>
              </div>
        </div>
    </div>






    <hr class="divisor">

    <div class="row p-5 m-5 d-flex justify-content-center">
        <div class="col-xl-4 col-lg-6 col-md-8 col-sm-12">

            <div class="card mb-5" style="width: 18rem;">
                <img src="https://www.usnews.com/object/image/0000017e-79c1-d763-a7ff-f9e39bd60000/gettyimages-1365684462.jpg?update-time=1642720688250&size=responsive640" class="card-img-top" alt="..." >
                <div class="card-body">
                  <h5 class="card-title text-center">CEO</h5>
                </div>
              </div>

        </div>

        <div class="col-xl-4 col-lg-6 col-md-8 col-sm-12">

            <div class="card" style="width: 18rem;">
                <img src="https://cdn.vox-cdn.com/thumbor/DiantFR0rO205D-fd2VOVp4OhGk=/0x0:4000x2667/1400x1050/filters:focal(1525x402:2165x1042):no_upscale()/cdn.vox-cdn.com/uploads/chorus_image/image/69237422/1231446945.0.jpg" class="card-img-top" alt="..." style="width: 286px; height:192px;">
                <div class="card-body">
                    <h5 class="card-title text-center">Public Relations</h5>

                </div>
              </div>

        </div>

        <div class="col-xl-4 col-lg-6 col-md-8 col-sm-12">

            <div class="card" style="width: 18rem;">
                <img src="https://imageio.forbes.com/specials-images/imageserve/61fc7726d157534e175b5b7b/Profile-Of-Adani-Group-Chairman--Gautam-Adani/1960x0.jpg?format=jpg&width=960" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center">CTO</h5>
                </div>
              </div>

        </div>

        <div class="col-xl-4 col-lg-6 col-md-8 col-sm-12">

            <div class="card" style="width: 18rem;">
                <img src="https://www.dmarge.com/wp-content/uploads/2021/01/dwayne-the-rock-.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center">Marketing</h5>
                </div>
              </div>

        </div>

        <div class="col-xl-4 col-lg-6 col-md-8 col-sm-12">

            <div class="card" style="width: 18rem;">
                <img src="https://www.bentbusinessmarketing.com/wp-content/uploads/2013/02/35844588650_3ebd4096b1_b-1024x683.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center">Interim</h5>
                </div>
              </div>

        </div>

        <div class="col-xl-4 col-lg-6 col-md-8 col-sm-12">

            <div class="card" style="width: 18rem;">
                <img src="https://imageio.forbes.com/specials-images/imageserve/5f469ea85cc82fc8d6083f05/0x0.jpg?format=jpg&width=1200"  class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center">Delivery Guy</h5>
                </div>
              </div>

        </div>
        

    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>

</html-->
