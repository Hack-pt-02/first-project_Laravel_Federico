
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
        <h5 class="card-title">{{ $local[1]}}</h5>
        <p class="card-text">{{$local[2]}}</p>
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
