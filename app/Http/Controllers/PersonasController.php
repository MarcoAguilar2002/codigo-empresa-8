<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;

class PersonasController extends Controller
{
    public function index(){
        $personas = Persona::get();
        return view('personas', compact('personas'));
    }

    public function create(){
        return view('createPersona');
    }

    public function store(Request $request){
        $request->validate([
            'cPerApellido' => 'required',
            'cPerNombre' => 'required',
            'cPerDireccion' => 'required',
            'dPerFechaNac' => 'required|date',
            'nPerEdad' => 'required|integer',
            'cPerSexo' => 'required',
            'nPerSueldo' => 'required|numeric',
            'cPerEstado' => 'required',
        ]);
    
        Persona::create([
            'cPerApellido'=> $request->cPerApellido,
            'cPerNombre'=> $request->cPerNombre,
            'cPerDireccion'=> $request->cPerDireccion,
            'dPerFecNac'=> $request->dPerFechaNac,
            'nPerEdad'=> $request->nPerEdad,
            'nPerSueldo'=> $request->nPerSueldo,
            'cPerSexo' => $request->cPerSexo,
            'cPerRnd' => ' ',
            'cPerEstado'=> $request->cPerEstado,
            'remember_token' => ' '
        ]);
    
        return redirect()->route('personas.index');
    }
    
}
