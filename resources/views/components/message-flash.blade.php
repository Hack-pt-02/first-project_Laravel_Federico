@if ( $message = Session::get("success"))

    <div class="bg-success text-white">
        {{ $message }}
    </div>
    
@elseif ( $message = Session::get("error"))
    <div class="bg-warning text-white">
        {{ $message }}
    </div>
@endif
