<?php

class InicioController extends BaseController {

	public function __construct()
    {
        $this->beforeFilter('auth', array('except' => 'index'));            
        $this->beforeFilter(function(){            
            Auth::check() ? $this->layout = 'layout.plantillausuario' : $this->layout = 'layout.plantilla'; 
        });
    }

	public function index()
    {    
        if(Auth::check())
        {
            $email = Auth::user()->email;
            $usuario = DB::table('datosusuarios')->where('email', $email)->first();
            $this->layout->usuario=$usuario;
            $this->layout->content = View::make('home.index',array('usuario' => $usuario)); 
        }
        else
        {           
            $usuario=null;
            $this->layout->content = View::make('home.index',array('usuario' => $usuario)); 
        }   
    }

}