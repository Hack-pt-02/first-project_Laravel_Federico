
{{-- lleva la plantilla desde layout --}}
@extends('layout.locals')

{{-- title head --}}
@section('titleHead')
    Lista Cervezeria
@endsection

{{-- title body--}}
@section('title', 'Cerveza')


{{-- name --}}
@section('name', "Federico")

    

{{-- cards --}}
@section('content')

<div class="card m-auto" style="width: 30rem;">
    <div class="card-body text-center">
        <div>
            <img src="{{$objlocals->url}}" alt="not working" class="img-fluid">
        </div>
        <h5 class="card-title">{{ $objlocals->id }}</h5>
        <p class="card-text">{{ $objlocals->name }}</p>
        <a href="/home" class="btn btn-volver">Volver</a>

    </div>
</div>

@endsection


@section('footer-section')
    <x-footer />
@endsection



@section("message")

{{-- MEJOR USAR ESTA --}}
<x-message :texto="$texto"/> 


{{-- <x-message texto="{{ $texto }}"/>  EVITAR DE USAR ESTA--}}

{{-- <x-message texto="texto"/>  PONER VALOR ESTATICO--}}

@endsection
