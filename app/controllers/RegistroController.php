<?php

class RegistroController extends BaseController {
    
    public function __construct()
    {
        $this->beforeFilter('auth', array('except' => 'correo'));            
        $this->beforeFilter(function(){            
            Auth::check() ? $this->layout = 'layout.plantillausuario' : $this->layout = 'layout.plantilla'; 
        });
    }


    public function correo()
    {  
        if(Auth::check())
        {
            return Redirect::to('/')->withInput();  
        
        }
        else{


            if (Request::isMethod('get'))
            {            
                $this->layout->content = View::make('home.nuevoregistro');
            } 
            else if (Request::isMethod('post'))
            { 
                $rules = array('email3' => 'required',);

                $validator = Validator::make(Input::all(), $rules);

                if ($validator->fails()) 
                {                
                    return Redirect::to('nuevo/registro')
                            ->withErrors($validator)->withInput();                
                } 
                else 
                {  
                    $email=Input::get('email3');
                    $this->layout->content = View::make('home.nuevoregistrocompleto', array('email'=>$email));
                }
            }

        }
    }


}    