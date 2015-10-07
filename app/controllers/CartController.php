<?php

class CartController extends BaseController {
    
    public function __construct()
    {
        $this->beforeFilter('auth', array('except' => 'datos'));            
        $this->beforeFilter(function(){            
            Auth::check() ? $this->layout = 'layout.plantillausuario' : $this->layout = 'layout.plantilla'; 
        });
    }    

    public function datos(){

        if(Auth::check()){ 

            $email = Auth::user()->email;
            $usuario = DB::table('datosusuarios')->where('email', $email)->first();
            $this->layout->usuario=$usuario;
            $this->layout->content = View::make('carrito.datosconfirmados', array('usuario1' => $usuario) );
        }
        else
        {

                if (Request::isMethod('get'))
                {   
                             
                    $this->layout->content = View::make('carrito.datos');
                }        

                else if (Request::isMethod('post'))
                {       

                    $rules = array('email' => 'required|unique:users',);
                    if (Input::get('radio')=='uno'){
                        $rules = array(
                        'email' => 'required|unique:users',
                        'password' =>'required',
                        'contrasena' => 'required',
                        'apellidosp' => 'required',
                        'apellidosm' => 'required',
                        'nombrecompleto' => 'required',

                        'dni' => 'required',
                        
                        'telefono'=> 'required',
                        'direccion'=> 'required',
                        );
                    }
                 
                    if (Input::get('radio')=='dos'){
                        $rules = array(
                        'email' => 'required|unique:users',
                        'password' =>'required',
                        'contrasena' => 'required',
                        'apellidosp' => 'required',
                        'apellidosm' => 'required',
                        'nombrecompleto' => 'required',

                        'ruc' => 'required',
                        'razon' => 'required',
                        'direccionfiscal' => 'required',

                        'telefono'=> 'required',
                        'direccion'=> 'required',
                        );
                    }
                    
                    $validator = Validator::make(Input::all(), $rules);
                    if ($validator->fails()) 
                    {                
                        return Redirect::to('carrito/datos')
                                ->withErrors($validator)->withInput();                
                    } 
                    else 
                    {  
                        $user= new User;
                        $user->email = Input::get('email');
                        $password=Hash::make(Input::get('password'));
                        $user->password= $password;
                        $user-> save();
                        $id = $user->id;

                        $datosusuario = new Datosusuario;
                        $datosusuario->id=$id;
                        $datosusuario->email = Input::get('email');
                        $datosusuario->contrasena = Input::get('password');
                        $datosusuario->appaterno =Input::get('apellidosp');
                        $datosusuario->apmaterno =Input::get('apellidosm');
                        $datosusuario->nombres =Input::get('nombrecompleto');
                        $datosusuario->dni =Input::get('dni');
                        $datosusuario->ruc =Input::get('ruc');
                        $datosusuario->razonsocial =Input::get('razon');
                        $datosusuario->direccionfiscal=Input::get('direccionfiscal');
                        $datosusuario->telefono1=Input::get('telefono');
                        $datosusuario->telefono2=Input::get('telefono2');
                        $datosusuario->tipodireccion=Input::get('tipodireccion');
                        $datosusuario->direccion=Input::get('direccion');
                        $datosusuario->referencia=Input::get('referencias');
                        $datosusuario->save();
                        $id = $datosusuario->id;

                        $cart = json_decode(Input::get('cart'));

                        foreach($cart->data->items as $item){ 

                            $datosventa= new Datosventa;
                            $datosventa->idcliente=$id;
                            $datosventa->producto="{$item->producto}";
                            $datosventa->cantidad="{$item->cantidad}";
                            $datosventa->detalles="{$item->detalles}";
                            $datosventa->precio="{$item->precio}";
                            $datosventa->codigo="{$item->codigo}";
                            $datosventa->estado='1';

                            $datosventa->save();
                        
                        }

                        if (Auth::attempt(array('email' => Input::get('email'), 'password' =>Input::get('password') )))
                        {  

                            return Redirect::to('/micuenta')->withInput();   
                               
                        }else{

                            return Redirect::to('/')->withInput();

                        }

                        return Redirect::to('/')->withInput();  
                    }
                }
        }
    }


}