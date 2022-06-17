<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\producto;
use App\Models\Carrito;

class CarritoController extends Controller
{
    public function carrito(){
        $carrito=Carrito::all();
        return view('carrito',compact('carrito'));
    }

    public function remove(Request $request){
        Carrito::remove($request->id);
        return redirect()->route('carrito.index')->with('success_msg', 'Item eliminado!');
    }

    public function add(Request$request){
        Carrito::add(array(
            'id' => $request->id,
            'nombre' => $request->nombre,
            'cantidad' => $request->cantidad,
            'precio' => $request->precio,
            'cantidad' => $request->cantidad,
                'imagen' => $request->img
        ));

        /*$carrito=new carrito();
        $carrito->id=$request->id;
        $carrito->nombre=$request->nombre;
        $carrito->cantidad=$request->cantidad;
        $carrito->descripcion=$request->descripcion;
        $carrito->precio=$request->precio;
            if($request->hasFile('imagen')){
                $file=$request->file('imagen');
                $rutaDestino='img/Carrito/thumbs/';
                $filename=time().'-'.$file->getClientOriginalName();
                $uploadSuccess=$request->file('imagen')->move($rutaDestino,$filename);
                $carrito->imagen=$rutaDestino.$filename;
            }
            $carrito->save();
        */
        return redirect()->route('carrito.index')->with('success_msg', 'Se ha agregado correctamente a su Carrito!');
    }


    public function clear(){
        Carrito::clear();
        return redirect()->route('carrito.index')->with('success_msg', 'Carrito borrado!');
    }

}
