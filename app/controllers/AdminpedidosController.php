<?php

class AdminpedidosController extends BaseController {

	protected $layout = 'layout.plantilla';

    public function ver()
    {    
    	if (Request::isMethod('get'))
        {
        	$usuario=null;
        	$pedidos = DB::table('datosventas')->where('estado', 1)->orderBy('id', 'desc')->get();
        	$this->layout->content = View::make('admin.lospedidos', array('pedidos'=>$pedidos) ); 
        }
        else if (Request::isMethod('post'))
        {
        	$estado=Input::get('estado');
        	$pedidos = DB::table('datosventas')->where('estado', $estado)->orderBy('id', 'desc')->get();

        	if ($estado==8){
        		$pedidos = DB::table('datosventas')->orderBy('id', 'desc')->get();

        	}
        	$usuario=null;
        	$this->layout->content = View::make('admin.lospedidos', array('pedidos'=>$pedidos) ); 

        }
        
         
    }

}