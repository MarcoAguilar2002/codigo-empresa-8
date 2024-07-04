<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MensajeRecibido;

class ContactoController extends Controller
{
    //
    public function store(){
        $mensaje = request()->validate([
            'nombre' => 'required',
            'email' => 'required|email',
            'asunto' => 'required',
            'mensaje' => 'required',
        ],[
            'nombre.required'=>'Ingresa tu nombre',
            'email.required'=>'Ingresa tu email',
            'asunto.required'=>'Ingresa tu asunto',
            'mensaje.required'=>'Ingresa tu mensaje',
        ]);

        Mail::to('marco.ra2002@gmail.com')->send(new MensajeRecibido($mensaje));
        return 'Mensaje Enviado';
    }
}
