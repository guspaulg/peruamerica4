<?php

class AdmindetallesController extends BaseController {

	protected $layout = 'layout.plantilla';

    public function ver()
    {    
  
            $usuario =null;
            $this->layout->usuario=$usuario;
            $idpedido = Input::get('idpedido');
            $elpedido = DB::table('datosventas')->where('id', $idpedido)->first();
            $comentarios = DB::table('comentarios')->where('id_pedido', $idpedido)->orderBy('id', 'desc')->get();            

            if (Request::isMethod('get')){

                if($elpedido==null){
                    $pedidos = DB::table('datosventas')->where('idcliente', Auth::user()->id)->get();
                    $this->layout->content = View::make('admin.lospedidos', array('usuario'=>$usuario,
                    'pedidos'=>$pedidos)); 
                }else{

                    $this->layout->content = View::make('admin.detallespedido', array(
                    'usuario'=>$usuario,'elpedido'=>$elpedido,'comentarios'=>$comentarios)); 
                }

            } else if (Request::isMethod('post')){

                $img = Input::file('img');
                $idpedido = Input::get('id');
                $destino ='imagenes/disenos/'.$idpedido;
                $img->move( $destino , $img->getClientOriginalName() );

            }

        
    }


}