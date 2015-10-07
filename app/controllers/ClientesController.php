<?php

class ClientesController extends BaseController {

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
            $this->layout->content = View::make('home.clientes'); 
        }
        else
        {           
            $this->layout->content = View::make('home.clientes'); 
        }   
    }

}