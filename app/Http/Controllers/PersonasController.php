<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use App\Http\Requests\CreatePersonaRequest;

class PersonasController extends Controller
{
    public function __construc(){
        $this->middleware('auth')->except('index','show');
    }

    public function index(){
        $personas = Persona::get();
        return view('personas', compact('personas'));
    }

    public function create(){
        return view('createPersona');
    }

    public function store(CreatePersonaRequest $request){
        Persona::create([
            'cPerApellido' => $request->cPerApellido,
            'cPerNombre' => $request->cPerNombre,
            'cPerDireccion' => $request->cPerDireccion,
            'dPerFecNac' => $request->dPerFechaNac,
            'nPerEdad' => $request->nPerEdad,
            'nPerSueldo' => $request->nPerSueldo,
            'cPerSexo' => $request->cPerSexo,
            'cPerRnd' => ' ',
            'cPerEstado' => $request->cPerEstado,
            'remember_token' => ' '
        ]);

        return redirect()->route('personas.index')->with('estado','Persona creada exitosamente');
    }

    public function show($nPerCodigo){
        $persona = Persona::find($nPerCodigo);


        return view('showPersona', ['persona' => $persona]);
    }

    public function edit(Persona $persona){
        return view('editPersona',[
            'persona' => $persona
        ]);
    }
    
    public function update(Persona $nPerCodigo, CreatePersonaRequest $request){
        $nPerCodigo->update([
            'cPerApellido' => $request->cPerApellido,
            'cPerNombre' => $request->cPerNombre,
            'cPerDireccion' => $request->cPerDireccion,
            'dPerFecNac' => $request->dPerFechaNac,
            'nPerEdad' => $request->nPerEdad,
            'nPerSueldo' => $request->nPerSueldo,
            'cPerSexo' => $request->cPerSexo,
            'cPerEstado' => $request->cPerEstado,
        ]);
        return redirect()->route('personas.show',$nPerCodigo)->with('estado', 'Datos de la persona actualizada');
    }

    public function destroy(Persona $persona){
        $persona->delete();
        return redirect()->route('personas.index')->with('estado','Persona eliminada correctamente');
    }
}

