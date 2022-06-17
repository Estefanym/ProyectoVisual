<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pedido;

class PedidoController extends Controller
{
    public function pedidos(){
        $pedido=pedido::all();
        return view('usuario.pedidos',compact('pedido'));
    }
}
