@if ( $message = Session::get("success"))

    <div class="bg-success text-white">
        {{ $message }}
    </div>
    
@elseif ( $message = Session::get("error"))
    <div class="bg-warning text-white">
        {{ $message }}
    </div>


@elseif($errors ->has("name"))

    <div class="bg-danger text-white text-center p-2">
        Pone el nombre
    </div>

@elseif($errors ->has("message"))

    <div class="bg-danger text-white text-center p-2">
        Pone la descripcion
    </div>

@elseif($errors ->has("img"))

    <div class="bg-danger text-white text-center p-2">
        Sube una foto
    </div>


@elseif($errors->all())
<div class="bg-danger text-white">

    @foreach ($errors->all() as $error)
        <p>{{$error}}</p>   
    @endforeach

</div>

@endif