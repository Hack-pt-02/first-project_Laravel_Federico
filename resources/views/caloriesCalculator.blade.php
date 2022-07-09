{{-- lleva el layout --}}

@extends('layout.locals')

{{-- 
    "a" => $this->a,
    "calories" => $calories,
    "protein" => $protein, 
    "fat" => $fat, 
    "carbs" => $carbs, 
    "fiber" => $fiber
--}}




@section('content')


    
    <div class="row m-5">
        <div class="col-12 d-flex align-items-center justify-content-center">
            <div class="card" style="width: 18rem;">
                <div class="card-header">
                  {{$food}}
                </div>

                <table class="table">
                    <tr>
                        <td>Calories</td>
                        <td>{{$calories}}</td>
                    </tr>

                    <tr>
                        <td>Protein</td>
                        <td>{{$protein}}</td>
                    </tr>

                    <tr>
                        <td>Carbs</td>
                        <td>{{$carbs}}</td>
                    </tr>

                    <tr>
                        <td>fiber</td>
                        <td>{{$fiber}}</td>
                    </tr>
                </table>

              </div>
        </div>
    </div>

@endsection
