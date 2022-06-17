<?php

namespace App\Http\Controllers;

use App\Models\tecnico;
use Illuminate\Http\Request;

class TecnicoController extends Controller
{
    public function create(Request $request){
        $tecnico=new tecnico();
        $tecnico->id_tecnico=$request->id_tecnico;
        $tecnico->nombre=$request->nombre;
        $tecnico->save();
        
        return view('administrador.tecnicos.gestion');
    }

    public function destroy(tecnico $tecnico){
        $tecnico->delete();
        return back()->with('succes','Tecnico eliminado correctamente');
        //return redirect()->route('tecnicos');
    }
    
    public function edit(tecnico $tecnico){
        return view('administrador.tecnicos.editar',compact('tecnico'));
    }

    public function update(Request $request,$id){
        $tecnico=tecnico::findOrFail($id);
        $data=$request->only('nombre');
        $tecnico->update($data);
        return redirect()->route('tecnicos');
    }
}
