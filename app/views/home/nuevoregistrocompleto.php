<script type="text/javascript">

    function mostrar(){
 
        var valor=document.getElementsByName('radio');

        if (valor[0].checked == true) { 
            document.getElementById('visto').style.display='block';
            document.getElementById('oculto').style.display='none';
       
        } else {
            document.getElementById('visto').style.display='none';
            document.getElementById('oculto').style.display='block';
        }
    }

    function mostrar2(){
        document.getElementById('registro1').style.display='none';
        document.getElementById('registro2').style.display='none';

        document.getElementById('registro3').style.display='block';
        document.getElementById('registro4').style.display='block';
    }

    function mostrar3(){
        document.getElementById('registro1').style.display='block';
        document.getElementById('registro2').style.display='block';

        document.getElementById('registro3').style.display='none';
        document.getElementById('registro4').style.display='none';
    }

  
</script>





<div class="container clearfix">

<div class="col-md-8 col-sm-8 col-xs-12  col-md-offset-2 col-sm-offset-2">

    <div class="completa" > Completa tu registro, ¡ya queda poco! </div>
    
    </br></br></br></br>
    <ol id="progressbar3">
        <li class="point col1b col1a active" value="1">TU EMAIL</li>
        <li class="point col1b col1a active" value="2">TUS DATOS</li>
    </ol>
    <div class="linea"> </div>
    </br></br>

</div>

<div class="col-md-6 col-sm-8 col-xs-12  col-md-offset-3 col-sm-offset-2">

                <div class="registro">
            
                  
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

                    <?php 
                    echo Form::open(array('url' => 'nuevo/registro/completar' ,'method' => 'post', 'class'=>'form-horizontal', 'name' => 'formulario')); 
                    ?>

                        <div class="form-group">
                            <?php
                            echo Form::label('nombre', 'Nombres Completos : *',array('class' => 'controlpl control-label' ));
                             ?>
                            <?php 
                            echo Form::text('nombrecompleto', $value = null, array( 'class' => 'controlp form-control','placeholder' => 'Ej. Juan Martin' )); 
                            ?>
                        </div>

                        <div class="form-group">
                            <?php
                            echo Form::label('apellidos_p', 'Apellido Paterno : *',array('class' => 'controlpl control-label')); 
                            ?>
                            <?php 
                            echo Form::text('apellidosp', $value = null, array('class' => 'controlp form-control','placeholder' => 'Ej. Quispe' )); 
                            ?>
                        </div>

                        <div class="form-group">
                            <?php
                            echo Form::label('apellido_sm', 'Apellido Materno: *',array('class' => 'controlpl control-label'));
                            ?>
                            <?php  
                            echo Form::text('apellidosm', $value = null, array('class' => 'controlp form-control','placeholder' => 'Ej. Gadea')); 
                            ?>
                        </div>

                        <div class="form-group">
                            <?php
                            echo Form::label('', 'Tipo: *',array('class' => 'controlpl control-label'));
                            ?>
                            <div class="">
                            <?php
                            echo("D.N.I.&nbsp;&nbsp&nbsp"); 
                            echo Form::radio('radio', 'uno', true ,array('onClick' => 'mostrar()'));
                            echo("&nbsp;&nbsp&nbspFactura&nbsp;&nbsp&nbsp"); 
                            echo Form::radio('radio', 'dos', false, array('onClick' => 'mostrar()'));
                            ?>
                            </div>
                        </div>

                            <div id="visto">

                                <div class="form-group">
                                    <?php
                                    echo Form::label('dni', 'D.N.I. : *',array('class' => 'controlpl control-label'));
                                    ?>
                                    <?php  
                                    echo Form::text('dni', $value = null, array( 'class' => 'controlp form-control','placeholder' => 'Ej. 44569867')); 
                                    ?>
                                </div>
                            </div>

                            <div id="oculto" style="display:none">

                                <div class="form-group">
                                    <?php
                                    echo Form::label('ruc', 'R.U.C. : *',array('class' => 'controlpl control-label'));
                                    ?>
                                    <?php  
                                    echo Form::text('ruc', $value = null, array( 'class' => 'controlp form-control')); 
                                    ?>
                                                                    
                                </div>

                                <div class="form-group">
                                    <?php
                                    echo Form::label('razon', 'Razón social o nombre : *',array('class' => 'controlpl control-label'));
                                    ?>
                                    <?php  
                                    echo Form::text('razon', $value = null, array( 'class' => 'controlp form-control')); 
                                    ?>
                                </div>

                                <div class="form-group">
                                    <?php
                                    echo Form::label('direccionfiscal', 'Dirección fiscal : *',array('class' => 'controlpl control-label'));
                                    ?>
                                    <?php  
                                    echo Form::text('direccionfiscal', $value = null, array( 'class' => 'controlp form-control')); 
                                    ?>
                                </div>

                            </div>


                        <div class="form-group">
                            <?php
                            echo Form::label('telefon', 'Teléfono celular : *',array('class' => 'controlpl control-label'));
                            ?>
                            <?php  
                            echo Form::text('telefono', $value = null, array('class' => 'controlp form-control','placeholder' => 'Ej. 987654398')); 
                            ?>
                        </div>

                        <div class="form-group">
                            <?php
                            echo Form::label('telefon', 'Teléfono alternativo: ',array('class' => 'controlpl control-label'));
                            ?>
                            <?php  
                            echo Form::text('telefono2', $value = null, array('class' => 'controlp form-control','placeholder' => 'Ej. 5678978')); 
                            ?>
                        </div>

                         <div class="form-group">
                            <?php
                            echo Form::label('tipodireccion', 'Tipo de dirección',array('class' => 'controlpl control-label'));
                            ?>
                            <div class="">
                            <?php  
                            echo Form::select('tipodireccion', array(
                            'Casa' => 'Casa','Departamento' => 'Departamento','Condominio' => 'Condominio','Residencial' => 'Residencial',
                            'Oficina' => 'Oficina','Local comercial' => 'Local comercial','Centro comercial' => 'Centro comercial',
                            'Mercado' => 'Mercado','Galeria' => 'Galeria','Otro' => 'Otro',
                            ), 
                            'tipodireccion', array('class' => 'controlp form-control'));
                            ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <?php
                            echo Form::label('direccion', 'Dirección: *',array('class' => 'controlpl control-label'));
                            ?>
                            <?php  
                            echo Form::text('direccion', $value = null, array('class' => 'controlp form-control','placeholder' => 'Ej. av. peruamerica n° 4556 Urb trapiche - Los olivos')); 
                            ?>
                        </div>

                        <div class="form-group">
                            <?php
                            echo Form::label('referencias', 'Referencias :',array('class' => 'controlpl control-label'));
                            ?>
                            <?php  
                            echo Form::text('referencias', $value = null, array('class' => 'controlp form-control','placeholder' => 'a una cuadra del centro comercial peruamerica')); 
                            ?>
                        </div>  

                        <div class="form-group">
                            <?php
                            echo Form::label('contrasena', 'Contraseña : *',array('class' => 'controlpl control-label')); 
                            ?>
                            <?php
                            echo Form::password('password', $value = null, array('class' => 'controlp form-control')); 
                            ?>
                        </div>

                        <div class="form-group">
                             <?php
                            echo Form::label('contrasena', ' Repetir Contraseña : *',array('class' => 'controlpl control-label')); 
                            ?>
                            <?php
                            echo Form::password('contrasena', $value = null, array('class' => 'controlp form-control')); 
                            ?>
                        </div> 

                        <div class="form-group" style="width:80%">
                        Mediante el envío de mis datos personales confirmo que he leído y acepto la política de privacidad.
                        </div> 

                        <div class="form-group">
                            <?php 
                            echo Form::hidden('email', $email);
                            ?>
                             </br>
                            <?php
                                    echo Form::submit('FINALIZAR REGISTRO', array('class' => 'registrobtn btn btn-primary2 btn-lg btn-block')); 
                                    echo Form::close(); 
                            ?> 
                        </div>

                        <div class="cancelar form-group">
                        ¿Quieres anular el proceso de registro? Haz click <a href="/"> aqui</a>
                        </div> 

             

            </div>
         
</div>
</div>