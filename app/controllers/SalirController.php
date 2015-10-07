<?php

class SalirController extends BaseController {
    
    public function __construct()
    {
        $this->beforeFilter('auth', array('except' => 'salir'));            
        $this->beforeFilter(function(){            
            Auth::check() ? $this->layout = 'layout.plantillausuario' : $this->layout = 'layout.plantilla'; 
        });
    }


    public function sesion()
    {  
        if(Auth::check()){
            //Desconctamos al usuario
            Auth::logout();
            //Redireccionamos al inicio de la app con un mensaje
            return Redirect::to('/')->withInput();


        }           
    }

}    