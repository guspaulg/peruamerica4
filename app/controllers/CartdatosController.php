<?php

class CartdatosController extends BaseController {
    

    protected $layout = 'layout.plantillausuario';
    
    public function datos()
    {        
        
	    if (Request::isMethod('get')){

            $rules = array(
                'email2' => 'required',
                'contrasena2' =>'required',
            );

            $validator = Validator::make(Input::all(), $rules);
            if ($validator->fails()) 
            {                
                return Redirect::to('carrito/datos')
                        ->withErrors($validator)->withInput();                
            } 
            else 
            {  
                if (Auth::attempt(array('email' => Input::get('email2'), 'password' => Input::get('contrasena2'))))
                {                                 
                    $email = Input::get('email2');
                    $usuario = DB::table('datosusuarios')->where('email', $email)->first();
                    $this->layout->usuario = $usuario;
                    $this->layout->content = View::make('carrito.datosconfirmados', array('usuario1' => $usuario));

                }
                else
                {
                    return Redirect::to('carrito/datos')->withInput();
                }
            }

        } else if (Request::isMethod('post')){

            $id = Auth::user()->id;

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
            return Redirect::to('/micuenta')->withInput();

        }    
       
    }  
        
}    

