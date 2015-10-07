<div class="container clearfix">


	<div class="panel col-md-3 col-sm-4 col-xs-12">
	 	<div style="text-align:center;">
	 		<img src="/imagenes/usuario.png">
	 	</div></br></br>

	 	<div class="micuenta">MI CUENTA</div>

	 	<div class="panelselec">Panel de la Cuenta</div>

        <div class="apanel"><a href="misd">Editar mi información</a></div>

	 	<div class="apanel"><a href="misd">Dirección de envío</a></div>

	 	<div class="apanel"><a href="/mispedidos">Mis Pedidos</a></div>

	 	<div class="apanel"><a href="misd">Consultas</a></div>
	</div>

	<div class="panel2 col-md-8 col-sm-7 col-xs-12  col-md-offset-1 col-sm-offset-1">
	 	
	 	<p class="tpanel"> PANEL DE CONTROL DE LA CUENTA <span class="line"></span></p>
        <p> Hola <strong> <?php echo $usuario->appaterno.' '.$usuario->apmaterno.' '.$usuario->nombres ;?> </strong>, desde el tablero de su cuenta, tienes la posibilidad de conocer las actividad recientes 
        y actualizar la información de tu cuenta. Selecciona entre los siguiente enlace para ver o editar la información.</p></BR></BR></BR>
    	
        <p class="tpanel2">Tu información personal</p>
        <p> <span class="misdatos2"> Nombres </span>  <span class="misdatosp"> <?php echo $usuario->nombres?> </span></p>

        <p> <span class="misdatos2"> Apellido Materno </span>  <span class="misdatosp"> <?php echo $usuario->appaterno?> </span></p>

        <p> <span class="misdatos2"> Apellido Paterno  </span>  <span class="misdatosp"> <?php echo $usuario->apmaterno?> </span></p>
    	
        <p> <span class="misdatos2"> Correo Electrónico </span>  <span class="misdatosp"> <?php echo $usuario->email;?> </span></p>


    	<?php if($usuario->ruc=='') {?>	
    		<p> <span class="misdatos2"> D.N.I. </span> <span class="misdatosp"><?php echo $usuario->dni?> </span></p>
    	<?php 
    	}else{?>
    		<p> <span class="misdatos2"> R.U.C. </span> <span class="misdatosp"><?php echo $usuario->ruc; ?> </span></p>
    		<p> <span class="misdatos2"> Razón Social </span> <span class="misdatosp"><?php echo $usuario->razonsocial;?> </span></p>
    		<p> <span class="misdatos2"> Dirección Fiscal </span> <span class="misdatosp"><?php echo $usuario->direccionfiscal;?> </span></p>
    	<?php }?>

    	<p> <span class="misdatos2"> Teléfono Celular </span> <span class="misdatosp"><?php echo $usuario->telefono1 ?> </span></p>
    	<p> <span class="misdatos2"> Telefono alternativo </span>  <span class="misdatosp"> <?php echo $usuario->telefono2 ?> </span></p>
        
        <p> <a href="/contrasena/nuevo" class="cambiarcontra"> Cambiar la contraseña </a></p>
        </div>



</div>