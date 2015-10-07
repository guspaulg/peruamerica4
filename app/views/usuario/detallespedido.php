<script type="text/javascript">

    function mostrar2(){
        document.getElementById('anadircomentario').style.display='block';
        document.getElementById('enviarcomentario').style.display='none';
    }

    function mostrar(){
        document.getElementById('anadircomentario').style.display='none';
        document.getElementById('enviarcomentario').style.display='block';
    }

</script>





<div class="container clearfix">


    <div class="panel col-md-3 col-sm-4 col-xs-12">
        <div style="text-align:center;">
            <img src="/imagenes/usuario.png">
        </div></br></br>

        <div class="micuenta">MI CUENTA</div>

        <div class="apanel"><a href="/micuenta">Panel de la Cuenta</a></div>

        <div class="apanel"><a href="misd">Editar mi información</a></div>

        <div class="apanel"><a href="misd">Dirección de envío</a></div>

        <div class="apanel"><a href="/mispedidos">Mis Pedidos</a></div>

        <div class="apanel"><a href="misd">Consultas</a></div>
    </div>

    <div class="panel2 col-md-8 col-sm-7 col-xs-12  col-md-offset-1 col-sm-offset-1">
        
        <p class="tpanel"> Mi orden<span class="line"></span></p>

        <p><span class="misdatos2"> Codigo del Pedido :</span><span class="codigop"> <?php echo $elpedido->codigo; ?> </span></p>
        <p><span class="misdatos2"> Producto :</span><span class="misdatosp"> <?php echo $elpedido->producto; ?> </span></p>
        <p><span class="misdatos2"> Cantidad : </span><span class="misdatosp"><?php echo $elpedido->cantidad; ?> </span></p>
        <p><span class="misdatos2"> Costo: </span><span class="misdatosp">S/. <?php echo $elpedido->precio; ?> </span></p>
        <p><span class="misdatos2"> Fecha: </span><span class="misdatosp"> <?php echo $elpedido->created_at; ?> </span></p>
        <p><span class="misdatos2"> Detalles del Pedido : </span><span class="misdatosp"><?php echo $elpedido->detalles; ?> </span></p>

        <p class="tpanel"> Diseño<span class="line"></span></p>

        
        <?php 
        $coment = 'si';
        if($elpedido->img3 != '') {

            $coment = 'no';?>

            <div class="disenoface">

                <p class="titulodiseno"> Propuesta de diseño </p>
                <img src="/imagenes/disenos/<?php echo $elpedido->img3 ?>">

                <div class="anadircomentario" id="anadircomentario" onclick="mostrar()">
                  Añadir observaciones
                </div>
                <div id="enviarcomentario">
                <?php 
                    echo Form::open(array('url' => '/mispedidos/detalles','method' => 'post')); 
                    echo Form::hidden('num_img', 3);
                    echo Form::hidden('id_cliente', $elpedido->idcliente);
                    echo Form::hidden('idpedido',$elpedido->id);
                    echo Form::textarea('comentario',$value = null, array('class' => 'comentario','placeholder' => '... puedes agregar todas las observaciones que desees, un diseñador asignado modificará el diseño actual y agregara en este panel otra propuesta en las próximas horas ...' ));
                    ?>
                    <div style="width: 100%;">
                    <div class="cancelo" onclick="mostrar2()">Cancelar</div>
                    <?php echo Form::submit('Enviar observaciones al diseñador', array('class' => 'btn btn-primary3 btn-lg btn-block')); ?>
                    
                    </div>
                    <?php
                    echo Form::close(); 
                ?>

                </div>
                <?php 

                if($comentarios!= null) {
                  foreach($comentarios as $comentario){
                    if($comentario->num_img == 3) {
                      ?> <div class="comentarios"><?php echo $comentario->comentario; ?> </div> <?php
                    }
                  }

                }?>
            </div>
        <?php }?>

        

        <?php if($elpedido->img2 != '') {?>

            <div class="disenoface">

                <p class="titulodiseno"> Propuesta de diseño </p>
                <img src="/imagenes/disenos/<?php echo $elpedido->img2 ?>">

                <?php if($coment=='si'){ 

                        $coment ='no';
                        ?>
                        <div class="anadircomentario" id="anadircomentario" onclick="mostrar()">
                          Añadir observaciones
                        </div>
                        <div id="enviarcomentario">
                        <?php 
                            echo Form::open(array('url' => '/mispedidos/detalles','method' => 'post')); 
                            echo Form::hidden('num_img', 2);
                            echo Form::hidden('id_cliente', $elpedido->idcliente);
                            echo Form::hidden('idpedido',$elpedido->id);
                            echo Form::textarea('comentario',$value = null, array('class' => 'comentario','placeholder' => '... puedes agregar todas las observaciones que desees, un diseñador asignado modificará el diseño actual y agregara en este panel otra propuesta en las próximas horas ...' ));
                            ?>
                            <div style="width: 100%;">
                            <div class="cancelo" onclick="mostrar2()">Cancelar</div>
                            <?php echo Form::submit('Enviar observaciones al diseñador', array('class' => 'btn btn-primary3 btn-lg btn-block')); ?>
                            
                            </div>
                            <?php
                            echo Form::close(); ?>
                        </div>
                <?php }        
                ?>

                <?php 

                if($comentarios!= null) {
                  foreach($comentarios as $comentario){
                    if($comentario->num_img == 2) {
                      ?> <div class="comentarios"><?php echo $comentario->comentario; ?> </div> <?php
                    }
                  }

                } ?>
            </div>
        <?php }?>


        <?php if($elpedido->img != '') {?>
            
            <div class="disenoface">
                
                <p class="titulodiseno"> Propuesta de diseño </p>
                <img src="/imagenes/disenos/<?php echo $elpedido->img ?>">

                <?php if($coment=='si'){ 

                        $coment ='no';
                        ?>
                        <div class="anadircomentario" id="anadircomentario" onclick="mostrar()">
                          Añadir observaciones
                        </div>
                        <div id="enviarcomentario">
                        <?php 
                            echo Form::open(array('url' => '/mispedidos/detalles','method' => 'post')); 
                            echo Form::hidden('num_img', 1);
                            echo Form::hidden('id_cliente', $elpedido->idcliente);
                            echo Form::hidden('idpedido',$elpedido->id);
                            echo Form::textarea('comentario',$value = null, array('class' => 'comentario','placeholder' => '... puedes agregar todas las observaciones que desees, un diseñador asignado modificará el diseño actual y agregara en este panel otra propuesta en las próximas horas ...' ));
                            ?>
                            <div style="width: 100%;">
                            <div class="cancelo" onclick="mostrar2()">Cancelar</div>
                            <?php echo Form::submit('Enviar observaciones al diseñador', array('class' => 'btn btn-primary3 btn-lg btn-block')); ?>
                            
                            </div>
                            <?php
                            echo Form::close(); ?>
                        </div>
                <?php }        
                ?>

                <?php 

                if($comentarios!= null) {
                  foreach($comentarios as $comentario){
                    if($comentario->num_img == 1) {
                      ?> <div class="comentarios"><?php echo $comentario->comentario; ?> </div> <?php
                    }
                  }

                }?>
            </div>    
        <?php }?>
        
       
    </div>


</div>
