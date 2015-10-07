<?php

class UsuariocontrasenaController extends BaseController {

	public function __construct()
    {
        $this->beforeFilter('auth', array('except' => 'cambiar'));            
        $this->beforeFilter(function(){            
            Auth::check() ? $this->layout = 'layout.plantillausuario' : $this->layout = 'layout.plantilla'; 
        });
    }

    public function cambiar()
    {    
        if(Auth::check())
        {
            
            if (Request::isMethod('get'))
            {   
                $email = Auth::user()->email;
                $usuario = DB::table('datosusuarios')->where('email', $email)->first();
                $this->layout->usuario=$usuario;
                $this->layout->content = View::make('usuario.nuevacontrasena', array('usuario'=>$usuario)); 
            }        
            else if (Request::isMethod('post'))
            {
                $email = Auth::user()->email;
                $rules = array('passwordant' =>'required|exists:datosusuarios,contrasena','passwordnue' => 'required|confirmed');
                $validator = Validator::make(Input::all(), $rules);
                if ($validator->fails()) 
                {                
                    return Redirect::to('contrasena/nuevo')
                            ->withErrors($validator)->withInput();                
                } 
                else 
                {
                    $miuser = Auth::user();
                    $password=Hash::make(Input::get('passwordnue'));
                    $miuser->password = $password;
                    $miuser->save();

                    $miuserdatos = Datosusuario::find($miuser->id);
                    $miuserdatos->contrasena= Input::get('passwordnue');
                    $miuserdatos->save();
                    
                    $email = Auth::user()->email;
                    $usuario = DB::table('datosusuarios')->where('email', $email)->first();
                    $this->layout->usuario=$usuario;
                    $this->layout->content = View::make('usuario.datos', array('usuario'=>$usuario)); 

                }
            }

        }
        else
        {           
            return Redirect::to('/')->withInput(); 
        }  
    }

}