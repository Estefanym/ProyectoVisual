<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\cliente;

class UsuarioController extends Controller
{
    public function Registrarse(){
        return view('usuarios/registro');
      }

    public function getProfile(){

        $ordenes=Auth::user()->ordenes;
        $ordenes->transform(function($order, $key){
          $order->carrito = unserialize($order->carrito);
          return $order;
        });
  
        return view('usuarios/profile', ['ordenes'=> $ordenes]);
      }

      public function login(Request $request){
        $cliente=cliente::where('correo_electronico',$request->email)->firstOrFail();
        if($cliente->contraseña!=$request->password){
          $mensaje='La contraseña es incorrecta';
          return view('loginusuario',compact('mensaje'));
        }else{  
          return redirect()->route('productos.usuario');
        }
    }
    public function log(){
      return view('loginusuario');
  }
}
