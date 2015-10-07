
<div class="container clearfix">


<div class="fondo">

  <div class="float col-md-5">
            <div class="yaestoy">
                <div class="iniciarsesion"> INICIAR SESIÓN</div>
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
                echo Form::open(array('url' => 'iniciarsesion','method' => 'post', 'class'=>'form-horizontal')); 
                ?>

                    <div class="form-group">
                        
                        <div class="col-sm-offset-1 col-sm-12">
                        <?php
                        echo Form::email('email2',null, array('class' => 'controlp form-control', 'placeholder'=> 'Correo electrónico')); 
                        ?>
                        </div>
                    </div>

                    <div class="form-group">
                       
                        <div class="col-sm-offset-1 col-sm-12">
                        <?php
                        echo Form::password('contrasena2', $attributes = array('class' => 'controlp','placeholder'=>'Contraseña')); 
                        ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-1 col-sm-12">
                            <div class="checkbox">
                                <?php
                                    echo("Mantener mi sesión abierta.&nbsp;&nbsp&nbsp"); 
                                    echo Form::checkbox('recordar', 'recordar', true);
                                 ?>
                            </div>
                        </div>    
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-1 col-sm-12">
                            <a href="#" class="olvide">¿olvidaste tu contraseña?</a >
                        </div>    
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-8">
                        <?php
                            echo Form::submit('INGRESAR', array('class' => 'btn btn-secundario btn-lg btn-block')); 
                            echo Form::close(); 
                        ?> 
                        </div>
                    </div>

                    <br><br>

                </div>
                
            </div>

  </div>


</div>