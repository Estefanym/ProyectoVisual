<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reparacion;
use App\Models\cita;
use App\Models\tecnico;

class ReparacionController extends Controller
{
    public function reparaciones(){
        $reparacion=reparacion::all();
        $cita=cita::all();
        $tecnico=tecnico::all();
        return view('usuario.reparaciones',compact('reparacion','cita','tecnico'));
    }

    public function create(Request $request,cita $cita){
        $tecnico=tecnico::all();
        $reparacion=new reparacion();
        $reparacion->id_reparacion=$request->id;
        $reparacion->precio=$request->precio;
        $reparacion->descripcion=$request->descripcion;
        $reparacion->save();
        
        return view('administrador.reparaciones.reparacion',compact('tecnico','cita','reparacion'));
    }

    
    public function destroy(reparacion $reparacion){
        $reparacion->delete();
        return back()->with('succes','Reparacion eliminada correctamente');
    }
    
    public function edit(reparacion $reparacion){
        return view('administrador.reparaciones.editar',compact('reparacion'));
    }

    public function update(Request $request,$id){
        $reparacion=reparacion::findOrFail($id);
        $data=$request->only('precio','descripcion');
        $reparacion->update($data);
        return redirect()->route('reparaciones');
    }
}