@extends('layout.locals')

{{-- title head --}}
@section('titleHead')
    Añade Cerveceria Nueva
@endsection

{{-- title body--}}
@section('title', 'Añade Cerveceria Nueva')


{{-- name --}}
@section('name', "Federico")

    

@section('content')
    
<div class="d-flex align-content-center justify-center">

    <form class="w-50 form-contact shadow p-2" method="post" action="" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="name" class="form-control" id="name" placeholder="Nombre de la Cervezeria" name="name" value="{{old("name")}}">
        </div>

        <div class="mb-3">
        <label for="text-area" class="form-label">Comment</label>
        <textarea type="text" class="form-control" id="text-area" placeholder="Describe tu cervezeria" name="message" rows="6" value="{{old("message")}}"> </textarea>
        </div>


        <div class="mb-3">
            <label for="img" class="form-label">Imagen</label>
            <input type="file" class="form-control" id="img" name="img">
        </div>

        
        <button type="submit" class="btn btn-primary w-100 btn-add-contact">Submit</button>
        <x-message-flash />
    </form>
</div>

@endsection