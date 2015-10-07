<script type="text/javascript">

    $('ul#my-order').hide(); 
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

    $(function(){
    var cart = JSON.parse($.cookie('cart'));
      $('input#cart').val($.cookie('cart'));  

        $('.subtotal').append('S/. ' + cart.data.precio + '</b></td></tr>'); 
        $('.subtotal3').append('S/. ' + cart.data.precio + '</b></td></tr>');              
    });

</script>















<div class="container clearfix">
    
    </br></br></br></br>
    <ol id="progressbar">
        <li class="point col1b col1a active" value="2">Elije tus productos</li>
        <li class="point col1b col1a active" value="3">Confirma tu Compra</li>
        <li class="point col1b col1a active" value="4">Datos Personales</li>
        <li class="point col1b col1a" value="5">Pagar</li>
    </ol>
    <div class="linea"> </div>
    </br></br>

            <div class="col-md-6" id="registro1">

                <div class="registrate">
            
                    <div class="datos1"> Regístrate  <div class="usuario" onclick="mostrar2()">¿Ya estas Registrado?</div> </div>
                  
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
                    echo Form::open(array('url' => 'carrito/datos' ,'method' => 'post', 'class'=>'form-horizontal', 'name' => 'formulario')); 
                    ?>

                        <div class="form-group">
                            <?php
                            echo Form::label('email', 'E-mail : *',array('class' => 'col-sm-5 control-label')); 
                            ?>
                            <div class="col-sm-7">
                            <?php
                            echo Form::email('email', $value = null, array('class' => 'form-control')); 
                            ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <?php
                            echo Form::label('contrasena', 'Contraseña : *',array('class' => 'col-sm-5 control-label')); 
                            ?>
                            <div class="col-sm-7">
                            <?php
                            echo Form::password('password', $value = null, array('class' => 'form-control')); 
                            ?>
                            </div>
                        </div>

                        <div class="form-group">
                             <?php
                            echo Form::label('contrasena', ' Repetir Contraseña : *',array('class' => 'col-sm-5 control-label')); 
                            ?>
                            <div class="col-sm-7">
                            <?php
                            echo Form::password('contrasena', $value = null, array('class' => 'form-control')); 
                            ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <?php
                            echo Form::label('nombre', 'Nombres Completos : *',array('class' => 'col-sm-5 control-label'));
                             ?>
                            <div class="col-sm-7">
                            <?php 
                            echo Form::text('nombrecompleto', $value = null, array( 'class' => 'form-control')); 
                            ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <?php
                            echo Form::label('apellidos_p', 'Apellido Paterno : *',array('class' => 'col-sm-5 control-label')); 
                            ?>
                            <div class="col-sm-7">
                            <?php 
                            echo Form::text('apellidosp', $value = null, array('class' => 'form-control')); 
                            ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <?php
                            echo Form::label('apellido_sm', 'Apellido Materno: *',array('class' => 'col-sm-5 control-label'));
                            ?>
                            <div class="col-sm-7">
                            <?php  
                            echo Form::text('apellidosm', $value = null, array('class' => 'form-control')); 
                            ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <?php
                            echo Form::label('', 'Tipo: *',array('class' => 'col-sm-5 control-label'));
                            ?>
                            <div class="col-sm-7">
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
                                    echo Form::label('dni', 'D.N.I. : *',array('class' => 'col-sm-5 control-label'));
                                    ?>
                                    <div class="col-sm-7">
                                    <?php  
                                    echo Form::text('dni', $value = null, array( 'class' => 'form-control')); 
                                    ?>
                                    </div>
                                </div>
                            </div>

                            <div id="oculto" style="display:none">

                                <div class="form-group">
                                    <?php
                                    echo Form::label('ruc', 'R.U.C. : *',array('class' => 'col-sm-5 control-label'));
                                    ?>
                                    <div class="col-sm-7">
                                    <?php  
                                    echo Form::text('ruc', $value = null, array( 'class' => 'form-control')); 
                                    ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <?php
                                    echo Form::label('razon', 'Razón social o nombre : *',array('class' => 'col-sm-5 control-label'));
                                    ?>
                                    <div class="col-sm-7">
                                    <?php  
                                    echo Form::text('razon', $value = null, array( 'class' => 'form-control')); 
                                    ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <?php
                                    echo Form::label('direccionfiscal', 'Dirección fiscal : *',array('class' => 'col-sm-5 control-label'));
                                    ?>
                                    <div class="col-sm-7">
                                    <?php  
                                    echo Form::text('direccionfiscal', $value = null, array( 'class' => 'form-control')); 
                                    ?>
                                    </div>
                                </div>

                            </div>


                        <div class="form-group">
                            <?php
                            echo Form::label('telefon', 'Teléfono celular : *',array('class' => 'col-sm-5 control-label'));
                            ?>
                            <div class="col-sm-7">
                            <?php  
                            echo Form::text('telefono', $value = null, array('class' => 'form-control')); 
                            ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <?php
                            echo Form::label('telefon', 'Teléfono alternativo: ',array('class' => 'col-sm-5 control-label'));
                            ?>
                            <div class="col-sm-7">
                            <?php  
                            echo Form::text('telefono2', $value = null, array('class' => 'form-control')); 
                            ?>
                            </div>
                        </div>

                         <div class="form-group">
                            <?php
                            echo Form::label('tipodireccion', 'Tipo de dirección',array('class' => 'col-sm-5 control-label'));
                            ?>
                            <div class="col-sm-7">
                            <?php  
                            echo Form::select('tipodireccion', array(
                            'Casa' => 'Casa','Departamento' => 'Departamento','Condominio' => 'Condominio','Residencial' => 'Residencial',
                            'Oficina' => 'Oficina','Local comercial' => 'Local comercial','Centro comercial' => 'Centro comercial',
                            'Mercado' => 'Mercado','Galeria' => 'Galeria','Otro' => 'Otro',
                            ), 
                            'tipodireccion', array('class' => 'form-control'));
                            ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <?php
                            echo Form::label('direccion', 'Dirección: *',array('class' => 'col-sm-5 control-label'));
                            ?>
                            <div class="col-sm-7">
                            <?php  
                            echo Form::text('direccion', $value = null, array('class' => 'form-control')); 
                            ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <?php
                            echo Form::label('referencias', 'Referencias :',array('class' => 'col-sm-5 control-label'));
                            ?>
                            <div class="col-sm-7">
                            <?php  
                            echo Form::text('referencias', $value = null, array('class' => 'form-control')); 
                            ?>
                            </div>
                        </div>     

                    <?php 
                    echo Form::hidden('cart', null, array('id' => 'cart'));
                    ?>
                    </br></br>

                 </div>  

            </div>
            
            <div class="col-md-4" id="registro2">

                <div class="registrate">
                    <div class="datos2">Confirmación de pedido </div>

                    <div class="recuadro">
                        <p class="res"> Resumen de pedido</p>

                        <p class="res2">Sub total &nbsp;&nbsp; <span class="subtotal"></span></p>
                        <hr class="punteado">
                        <p class="res2">Gastos de envío &nbsp;&nbsp;  <span class="subtotal2"> S/. 00.00</span></p>
                        <hr class="punteado">
                        <p class="res2">Total &nbsp;&nbsp; <span class="subtotal3"></span></p>
                        </br>
                        <?php
                            echo Form::submit('Finalizar compra', array('class' => 'btn btn-primary2 btn-lg btn-block')); 
                            echo Form::close(); 
                        ?> 
                        </br>
                        <p class="terminos">Al hacer click en "Finalizar compra" acepto los Términos de Uso y Condiciones de Entrega,
                         el Acuerdo de Privacidad, y la Política de Garantía y Devoluciones.</p>
                         </br>
                    </div>
                  
                </div>

            </div>    

       


        <div class="col-md-6" id="registro3">
            <div class="yaestoy">
                <div class="datos1"> Iniciar sesión <div class="usuario" onclick="mostrar3()">Aún no estoy registrado</div></div>

                <?php 
                echo Form::open(array('url' => 'carrito/datosconfirmados','method' => 'get', 'class'=>'form-horizontal')); 
                ?>

                    <div class="form-group">
                        
                        <div class="col-sm-offset-2 col-sm-10">
                        <?php
                        echo Form::email('email2',null, array('class' => 'controlp form-control', 'placeholder'=> 'Correo electrónico')); 
                        ?>
                        </div>
                    </div>

                    <div class="form-group">
                       
                        <div class="col-sm-offset-2 col-sm-10">
                        <?php
                        echo Form::password('contrasena2', $attributes = array('class' => 'controlp','placeholder'=>'Contraseña')); 
                        ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <div class="checkbox">
                                <?php
                                    echo("Mantener mi sesión abierta.&nbsp;&nbsp&nbsp"); 
                                    echo Form::checkbox('recordar', 'recordar', true);
                                 ?>
                            </div>
                        </div>    
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <a href="#" class="olvide">¿olvidaste tu contraseña?</a >
                        </div>    
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-8">
                        <?php
                            echo Form::submit('Ingresar', array('class' => 'btn btn-secundario btn-lg btn-block')); 

                        ?> 
                        </div>
                    </div>

                    <br><br>

                </div>
                
            </div>


            <div class="col-md-4" id="registro4">

                <div class="registrate">
                    <div class="datos2">Confirmación de pedido </div>

                    <div class="recuadro">
                        <p class="res"> Resumen de pedido</p>

                        <p class="res2">Sub total &nbsp;&nbsp; <span class="subtotal"></span></p>
                        <hr class="punteado">
                        <p class="res2">Gastos de envío &nbsp;&nbsp;  <span class="subtotal2"> S/. 00.00</span></p>
                        <hr class="punteado">
                        <p class="res2">Total &nbsp;&nbsp; <span class="subtotal3"></span></p>
                        </br>
                        <?php
                            echo Form::close(); 
                        ?> 
                        </br>
                        <p class="terminos">Al hacer click en "Finalizar compra" acepto los Términos de Uso y Condiciones de Entrega,
                         el Acuerdo de Privacidad, y la Política de Garantía y Devoluciones.</p>
                         </br>
                    </div>
                  
                </div>

            </div> 

</div>