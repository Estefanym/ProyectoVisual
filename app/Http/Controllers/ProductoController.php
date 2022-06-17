<?php

namespace App\Http\Controllers;
use App\Models\producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function productos(){
        $producto=producto::all();
        return view('usuario.productos',compact('producto'));
    }

    public function create(Request $request){
        $producto=new producto();
        $producto->id_producto=$request->id_producto;
        $producto->nombre=$request->nombre;
        $producto->categoria=$request->categoria;
        $producto->descripcion=$request->descripcion;
        $producto->precio=$request->precio;
        $producto->existencia=$request->existencia;
        if($request->hasFile('imagen')){
            $file=$request->file('imagen');
            $rutaDestino='img/Productos/thumbs/';
            $filename=time().'-'.$file->getClientOriginalName();
            $uploadSuccess=$request->file('imagen')->move($rutaDestino,$filename);
            $producto->imagen=$rutaDestino.$filename;
        }
        $producto->save();
        
        return view('administrador.productos.productos');
    }

    public function destroy(producto $producto){
        $producto->delete();
        return back()->with('succes','Producto eliminado correctamente');
        //return redirect()->route('tecnicos');
    }

    public function edit(producto $producto){
        return view('administrador.productos.editar',compact('producto'));
    }

    public function update(Request $request,$id){
        $producto=producto::findOrFail($id);
        $data=$request->only('nombre','categoria','descripcion','precio','existencia');
        //$img=$request->input('imagen');
        if($request->hasFile('imagen')){
            $file=$request->file('imagen');
            $rutaDestino='img/Productos/thumbs/';
            $filename=time().'-'.$file->getClientOriginalName();
            $uploadSuccess=$request->file('imagen')->move($rutaDestino,$filename);
            $producto->imagen=$rutaDestino.$filename;
            $data['imagen']=$producto->imagen;
        }
        $producto->update($data);
        return redirect()->route('productos');
    }
    
}
