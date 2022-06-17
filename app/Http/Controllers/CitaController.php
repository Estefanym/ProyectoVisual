<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cita;
use App\Models\reparacion;
use App\Models\tecnico;

class CitaController extends Controller
{
    public function create(Request $request){
        //$u_id=cita::latest('id_cita')->first();
        //$contador=$u_id+1;
        //$request=$contador;
        $reparacion=reparacion::all();
        $tecnico=tecnico::all();
        $cita=new cita();
        $cita->id_cita=$request->id;
        $cita->dia=$request->dia;
        $cita->sucursal=$request->sucursal;
        $cita->id_tecnico=$request->id_tecnico;
        $cita->id_reparacion=$request->id_reparacion;
        $cita->save();
        $mensaje='Cita guardada correctamente';
        //$contador++;
        return view('usuario.reparaciones',compact('tecnico','cita','reparacion','mensaje'));
    }
    
    public function destroy(cita $cita){
        $cita->delete();
        return back()->with('succes','Cita eliminada correctamente');
    }
    
    public function edit(cita $cita){
        $tecnico=tecnico::all();
        return view('administrador.citas.editar',compact('cita','tecnico'));
    }

    public function update(Request $request,$id){
        $cita=cita::findOrFail($id);
        $data=$request->only('dia','sucursal','id_tenico','id_reparacion');
        $cita->update($data);
        return redirect()->route('reparaciones');
    }
}
