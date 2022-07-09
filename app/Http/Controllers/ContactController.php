<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactNotification;

class ContactController extends Controller
{
    public function show() {
        return view("contact.show" , [
            "texto" => "Designed By Federico Di Natale",
            "title_head" => "contact us"
        ]);
    }


    public function store(Request $request) {

        //return view("contact.show")  // usa esto primero para confirm si hasta aqui funciona todo
    
        Mail::to("federico.dn.11@gmail.com")
            ->send(new ContactNotification(
                $request->email, 
                $request->message
            ));

        if ($request->email == "") {
            return back() ->with("error", "no hemos podido enviar tu mensaje");
        }else {
            return back() ->with ("success", "hemos recibido tu consulta");
        }

    
    }

}
