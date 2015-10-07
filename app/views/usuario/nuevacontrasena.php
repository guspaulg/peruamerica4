<div class="container clearfix">


	<div class="panel col-md-3 col-sm-4 col-xs-12">
	 	<div style="text-align:center;">
	 		<img src="/imagenes/usuario.png">
	 	</div></br></br>

	 	<div class="micuenta">MI CUENTA</div>

	 	<div class="apanel"><a href="/micuenta">Panel de la Cuenta</a></div>

        <div class="apanel"><a href="misd">Editar mi información</a></div>

	 	<div class="apanel"><a href="misd">Dirección de envío</a></div>

	 	<div class="apanel"><a href="/mispedido">Mis Pedidos</a></div>

	 	<div class="apanel"><a href="misd">Consultas</a></div>
	</div>

	<div class="panel2 col-md-8 col-sm-7 col-xs-12  col-md-offset-1 col-sm-offset-1">
	 	
	 	<p class="tpanel"> EDITAR CONTRASEÑA<span class="line"></span></p>
        <p> Elige una contraseña segura y no la vuelvas a utilizar en otras cuentas, Si cambias la contraseña,
        cerrarás sesión en todos los dispositivos, incluido tu teléfono. Deberás introducir tu nueva contraseña 
        en todos los dispositivos.</p></BR></BR></BR>

        <div class="form-group">
			<?php
	        $htmlErrors = HTML::ul($errors->all());
	        if(!empty($htmlErrors))
	        { ?>
	            <div class="alert alert-dismissable alert-warning">
	                <button data-dismiss="alert" class="close" type="button">×</button>
	                <?php echo $htmlErrors; ?>
	            </div>
	            <?php
	        } ?> 
	    </div> 

        <?php 
        echo Form::open(array('url' => 'contrasena/nuevo' ,'method' => 'post', 'class'=>'form-horizontal', 'name' => 'formulario')); 
        ?>

            <div class="form-group">
                <?php
                echo Form::label('contrasena', 'Contraseña actual : *',array('class' => 'col-sm-5 control-label')); 
                ?>
                <div class="col-sm-7">
                <?php
                echo Form::password('passwordant', $value = null, array('class' => 'form-control')); 
                ?>
                </div>
            </div>

            <div class="form-group">
                <?php
                echo Form::label('contrasena', 'Nueva Contraseña : *',array('class' => 'col-sm-5 control-label')); 
                ?>
                <div class="col-sm-7">
                <?php
                echo Form::password('passwordnue', $value = null, array('class' => 'form-control')); 
                ?>
                </div>
            </div>

            <div class="form-group">
                 <?php
                echo Form::label('contrasena', ' Repetir nueva Contraseña : *',array('class' => 'col-sm-5 control-label')); 
                ?>
                <div class="col-sm-7">
                <?php
                echo Form::password('passwordnue_confirmation', $value = null, array('class' => 'form-control')); 
                ?>
                </div>
            </div>
            <div class="form-group">
            <?php
                echo Form::submit('Guardar', array('class' => 'guardar btn btn-primary btn-lg btn-block')); 
                echo Form::close(); 
            ?> 
    		</div>
        

    </div>



</div>