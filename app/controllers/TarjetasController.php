<?php

class TarjetasController extends BaseController {

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
        		$this->layout->content = View::make('home.tarjetas', array('vista' => $vista));
            }        
            else if (Request::isMethod('post'))
            {
        	  	$vista=2;
                $producto='Tarjetas Personales';
        	  	$cantidad=Input::get('cantidad');
                $cantidad2= $cantidad.' millares';
        	  	$papel=Input::get('papel');
        	  	$cantos=Input::get('cantos');
        	  	$diseno=Input::get('diseno');

                // aqui calculare el precio del producto

                $costo = DB::table('tarjetas')->where('papel', $papel)->where('cantidad', $cantidad)->pluck('precio');
                if($cantos==2){ $costo= $costo+5;}

                // -------------------------------------

        	  	if($cantos==1){ $cantos2 = 'Bordes Redondeados';}
        	  	if($cantos==2){ $cantos2= 'Bordes en punta';}

        	  	if($diseno==1){ $diseno2 = 'Haganme un diseño';}
        	  	if($diseno==2){ $diseno2= 'Tengo un diseño';}

                $an = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
                $su = strlen($an) - 1;
                $codigo= substr($an, rand(0, $su), 1) .substr($an, rand(0, $su), 1).substr($an, rand(0, $su), 1).substr($an, rand(0, $su), 1).substr($an, rand(0, $su), 1);

                $email = Auth::user()->email;
                $usuario = DB::table('datosusuarios')->where('email', $email)->first();
                $this->layout->usuario=$usuario;  

    	    	$this->layout->content = View::make('home.tarjetas', array('producto'=>$producto,'vista' => $vista,
    	    	'cantidad'=>$cantidad,'cantidad2'=>$cantidad2, 'papel'=>$papel, 'cantos'=>$cantos,'cantos2'=>$cantos2, 
                'diseno2' => $diseno2,'diseno' => $diseno, 'costo'=>$costo, 'codigo'=> $codigo));
    	    }
        }
        else
        {
            if (Request::isMethod('get'))
            {            
                $vista=1; 
                $this->layout->content = View::make('home.tarjetas', array('vista' => $vista));
            }        
            else if (Request::isMethod('post'))
            {
                $vista=2;
                $producto='Tarjetas';
                $cantidad=Input::get('cantidad');
                $cantidad2= $cantidad.' millares';
                $papel=Input::get('papel');
                $cantos=Input::get('cantos');
                $diseno=Input::get('diseno');

                // aqui calculare el precio del producto

                $costo = DB::table('tarjetas')->where('papel', $papel)->where('cantidad', $cantidad)->pluck('precio');
                if($cantos==2){ $costo= $costo+5;}

                // -------------------------------------

                if($cantos==1){ $cantos2 = 'Bordes Redondeados';}
                if($cantos==2){ $cantos2= 'Bordes en punta';}

                if($diseno==1){ $diseno2 = 'Haganme un diseño';}
                if($diseno==2){ $diseno2= 'Tengo un diseño';}

                $an = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
                $su = strlen($an) - 1;
                $codigo= substr($an, rand(0, $su), 1) .substr($an, rand(0, $su), 1).substr($an, rand(0, $su), 1).substr($an, rand(0, $su), 1).substr($an, rand(0, $su), 1);


                $this->layout->content = View::make('home.tarjetas', array('producto'=>$producto,'vista' => $vista,
                'cantidad'=>$cantidad,'cantidad2'=>$cantidad2, 'papel'=>$papel, 'cantos'=>$cantos,'cantos2'=>$cantos2, 
                'diseno2' => $diseno2,'diseno' => $diseno, 'costo'=>$costo,'codigo'=>$codigo));
           
            }

        } 
    }

}