<?php

class VolantesController extends BaseController {

	public function __construct()
    {
        $this->beforeFilter('auth', array('except' => 'mostrar'));            
        $this->beforeFilter(function(){            
            Auth::check() ? $this->layout = 'layout.plantillausuario' : $this->layout = 'layout.plantilla'; 
        });
    }

	public function mostrar()
    {   

        if(Auth::check())
        {       

            if (Request::isMethod('get'))
            {            
                $vista=1;
                $email = Auth::user()->email;
                $usuario = DB::table('datosusuarios')->where('email', $email)->first();
                $this->layout->usuario = $usuario;   
        		$this->layout->content = View::make('home.volantes', array('vista' => $vista));
            }        
            else if (Request::isMethod('post'))
            {
        	  	$vista=2;
                $producto='Volantes';
        	  	$cantidad=Input::get('cantidad');
                $cantidad2= $cantidad.' millares';
        	  	$papel=Input::get('papel');
        	  	$color=Input::get('color');
        	  	$diseno=Input::get('diseno');

                // aqui calculare el precio del producto

                $costo = DB::table('volantes')->where('papel', $papel)->where('color', $color)->where('cantidad', $cantidad)->pluck('precio');

                // -------------------------------------

        	  	if($diseno==1){ $diseno2 = 'Haganme un diseño';}
        	  	if($diseno==2){ $diseno2= 'Tengo un diseño';}

                 $an = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
                $su = strlen($an) - 1;
                $codigo= substr($an, rand(0, $su), 1) .substr($an, rand(0, $su), 1).substr($an, rand(0, $su), 1).substr($an, rand(0, $su), 1).substr($an, rand(0, $su), 1);


                $email = Auth::user()->email;
                $usuario = DB::table('datosusuarios')->where('email', $email)->first();
                $this->layout->usuario=$usuario;  

    	    	$this->layout->content = View::make('home.volantes', array('producto'=>$producto,'vista' => $vista,
    	    	'cantidad'=>$cantidad,'cantidad2'=>$cantidad2, 'papel'=>$papel, 'color'=>$color, 'diseno2' => $diseno2,
                'diseno' => $diseno, 'costo'=>$costo,'codigo'=> $codigo));
    	    }
        }
        else
        {
            if (Request::isMethod('get'))
            {            
                $vista=1; 
                $this->layout->content = View::make('home.volantes', array('vista' => $vista));
            }        
            else if (Request::isMethod('post'))
            {
                $vista=2;
                $producto='Volantes';
                $cantidad=Input::get('cantidad');
                $cantidad2= $cantidad.' millares';
                $papel=Input::get('papel');
                $color=Input::get('color');
                $diseno=Input::get('diseno');

                // aqui calculare el precio del producto

                 $costo = DB::table('volantes')->where('papel', $papel)->where('color', $color)->where('cantidad', $cantidad)->pluck('precio');


                // -------------------------------------

                  $an = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
                $su = strlen($an) - 1;
                $codigo= substr($an, rand(0, $su), 1) .substr($an, rand(0, $su), 1).substr($an, rand(0, $su), 1).substr($an, rand(0, $su), 1).substr($an, rand(0, $su), 1);


                if($diseno==1){ $diseno2 = 'Haganme un diseño';}
                if($diseno==2){ $diseno2= 'Tengo un diseño';}

                $this->layout->content = View::make('home.volantes', array('producto'=>$producto,'vista' => $vista,
                'cantidad'=>$cantidad,'cantidad2'=>$cantidad2, 'papel'=>$papel, 'color'=>$color, 'diseno2' => $diseno2,
                'diseno' => $diseno, 'costo'=>$costo,'codigo'=> $codigo));
           
            }

        } 
    }

}