<?php

namespace App\Http\Controllers;
use App\Models\producto;
use App\Models\reparacion;
use App\Models\tecnico;
use App\Models\cita;
use App\Models\pedido;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class AdministradorController extends Controller
{
    public function logi(){
        return view('login');
    }

    public function productos(){
        $producto=producto::all();
        return view('administrador.productos.productos',compact('producto'));
    }

    public function reparaciones(){
        $reparacion=reparacion::all();
        $cita=cita::all();
        $tecnico=tecnico::all();
        return view('administrador.reparaciones.reparacion',compact('reparacion','cita','tecnico'));
    }
    
    public function tecnicos(){
        $tecnico=tecnico::all();
        return view('administrador.tecnicos.gestion',compact('tecnico'));
    }

    public function pedidos(){
        $pedido=pedido::all();
        return view('administrador.pedidos.pedidos',compact('pedido'));
    }

    public function login(Request $request){
        $usuario='fanny@gmail.com';
        $contrasenia='perroazul';
        if($usuario==$request->email){
            if($contrasenia==$request->password){
                return view('administrador.index');
            }
        }else{
            $mensaje='Nombre de usuario o constraseña son incorrectos';
            return view('login',compact('mensaje'));
        }
        /*if($usuario!=$request->email){
            $mensaje='El usuario es incorrecto';
        }else{      
        //$usuario=producto::where('correo_electronico',$request->email)->firstOrFail();
            if($contrasenia!=$request->password){
                $mensaje='La constraseña es incorrecta';
                return view('login',compact('mensaje'));
            }else{
                return redirect('administrador/index');
            }
        }*/
        
    }
    public function index(){
        return view('administrador.index');
    }

    public function pdf(){
        $producto=producto::paginate();

        $pdf = PDF::loadView('pdf',['producto'=>$producto]);
        //$pdf->loadHTML('<h1>Test</h1>');
        //return $pdf->stream();
        return $pdf->download('productos.pdf');
        //return view('pdf',compact('producto'));
        
    }

    /*public function login(){
        return view('auth.login');
    }

    public function __construct(){
        $this->middleware('AdminMiddleware');
    }*/
    

}
