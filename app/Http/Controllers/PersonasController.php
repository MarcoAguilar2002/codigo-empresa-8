<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use App\Http\Requests\CreatePersonaRequest;
use Illuminate\Support\Facades\Storage;
use App\Events\PersonaSaved;

class PersonasController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except('index','show');
    }

    public function index(Request $request){
        $estado = $request->get('estado', 'todos'); 

        
        if ($estado == 'inactivo') {
            $personas = Persona::inactivas()->get();
        } elseif ($estado == 'activo') {
            $personas = Persona::activas()->get();
        } else {
            
            $personas = Persona::all();
        }

        return view('personas', compact('personas', 'estado'));
    }

    public function create(){
        return view('createPersona');
    }

    public function store(CreatePersonaRequest $request){
        $path = null;
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
        }

        $persona = Persona::create([
            'cPerApellido' => $request->cPerApellido,
            'cPerNombre' => $request->cPerNombre,
            'cPerDireccion' => $request->cPerDireccion,
            'dPerFecNac' => $request->dPerFechaNac,
            'nPerEdad' => $request->nPerEdad,
            'nPerSueldo' => $request->nPerSueldo,
            'cPerSexo' => $request->cPerSexo,
            'cPerRnd' => ' ',
            'cPerEstado' => $request->cPerEstado,
            'image' => $path,
            'remember_token' => ' '
        ]);

        
        event(new PersonaSaved($persona));

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
    
    public function update(Persona $persona, CreatePersonaRequest $request){
        $path = $persona->image;

        if ($request->hasFile('image')) {
            if ($persona->image) {
                Storage::disk('public')->delete($persona->image);
            }
            $path = $request->file('image')->store('images', 'public');
        }

        $persona->update([
            'cPerApellido' => $request->cPerApellido,
            'cPerNombre' => $request->cPerNombre,
            'cPerDireccion' => $request->cPerDireccion,
            'dPerFecNac' => $request->dPerFechaNac,
            'nPerEdad' => $request->nPerEdad,
            'nPerSueldo' => $request->nPerSueldo,
            'cPerSexo' => $request->cPerSexo,
            'cPerEstado' => $request->cPerEstado,
            'image' => $path,
        ]);

        
        event(new PersonaSaved($persona));

        return redirect()->route('personas.show', $persona)->with('estado', 'Datos de la persona actualizada');
    }

    public function destroy(Persona $persona){
        if ($persona->image) {
            Storage::disk('public')->delete($persona->image);
        }
        $persona->delete();
        return redirect()->route('personas.index')->with('estado','Persona eliminada correctamente');
    }
}
