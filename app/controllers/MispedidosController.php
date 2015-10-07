<?php

class MispedidosController extends BaseController {

	public function __construct()
    {
        $this->beforeFilter('auth', array('except' => 'ver'));            
        $this->beforeFilter(function(){            
            Auth::check() ? $this->layout = 'layout.plantillausuario' : $this->layout = 'layout.plantilla'; 
        });
    }

    public function ver()
    {    
        if(Auth::check())
        {
            $email = Auth::user()->email;
            $usuario = DB::table('datosusuarios')->where('email', $email)->first();
            $this->layout->usuario=$usuario;

            $pedidos = DB::table('datosventas')->where('idcliente', Auth::user()->id)->get();

    $this->layout->content = View::make('usuario.pedidos', array('usuario'=>$usuario,'pedidos'=>$pedidos)); 
        }
        else
        {           
             return Redirect::to('/')->withInput(); 
        }  
    }

}