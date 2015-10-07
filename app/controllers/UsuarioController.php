<?php

class UsuarioController extends BaseController {
    
    public function __construct()
    {
        $this->beforeFilter('auth', array('except' => 'sesion'));            
        $this->beforeFilter(function(){            
            Auth::check() ? $this->layout = 'layout.plantillausuario' : $this->layout = 'layout.plantilla'; 
        });
    }


    public function sesion()
    {  
        if(Auth::check())
        {
            $email = Auth::user()->email;
            $usuario = DB::table('datosusuarios')->where('email', $email)->first();
            $this->layout->usuario=$usuario;
            $this->layout->content = View::make('usuario.datos', array('usuario'=>$usuario)); 
        
        }
        else{

            if (Request::isMethod('get'))
            {            
                $this->layout->content = View::make('home.iniciarsesion');
            } 
            else if (Request::isMethod('post'))
            { 
                $rules = array(
                'email2' => 'required',
                'contrasena2' =>'required',
                );

                $validator = Validator::make(Input::all(), $rules);
                if ($validator->fails()) 
                {                
                    return Redirect::to('/iniciarsesion')
                            ->withErrors($validator)->withInput();                
                } 
                else 
                {  
                    if (Auth::attempt(array('email' => Input::get('email2'), 'password' => Input::get('contrasena2') )))
                    {                                 
                        return Redirect::to('/')->withInput();
                    }
                    else
                    {
                        return Redirect::to('/iniciarsesion')->withInput();
                    }
                }
            }

        }
    }

}    