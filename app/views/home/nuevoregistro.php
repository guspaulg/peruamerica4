<div class="container clearfix">


<div class="fondo">

  <div class="float col-md-5">

        <div class="yaestoy">
            <div class="iniciarsesion"> REGISTRATE </div>

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
            echo Form::open(array('url' => 'nuevo/registro','method' => 'post', 'class'=>'form-horizontal')); 
            ?>

            <div class="form-group">
                
                <div class="col-sm-offset-1 col-sm-12">
                <?php
                echo Form::email('email3',null, array('class' => 'controlp form-control', 'placeholder'=> 'Correo electrónico')); 
                ?>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-8">
                <?php
                    echo Form::submit('REGISTRARME', array('class' => 'btn btn-primary btn-lg btn-block')); 
                    echo Form::close();     
                ?> 
                </div>
            </div>

            <br><br>

        </div>
                
    </div>

  </div>


</div>