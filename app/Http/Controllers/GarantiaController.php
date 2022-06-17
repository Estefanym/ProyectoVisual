<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\garantia;
class GarantiaController extends Controller
{
    public function garantia(){
        return view('usuario.garantia');
    }
}

