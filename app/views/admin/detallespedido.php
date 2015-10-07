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


   

    <div class="panel2 col-md-12 col-sm-12 col-xs-12">
        
        <p class="tpanel">Información del pedido<span class="line"></span></p>

        <p><span class="misdatos2"> Codigo del Pedido :</span><span class="codigop"> <?php echo $elpedido->codigo; ?> </span></p>
        <p><span class="misdatos2"> Producto :</span><span class="misdatosp"> <?php echo $elpedido->producto; ?> </span></p>
        <p><span class="misdatos2"> Cantidad : </span><span class="misdatosp"><?php echo $elpedido->cantidad; ?> </span></p>
        <p><span class="misdatos2"> Costo: </span><span class="misdatosp">S/. <?php echo $elpedido->precio; ?> </span></p>
        <p><span class="misdatos2"> Fecha: </span><span class="misdatosp">S/. <?php echo $elpedido->created_at; ?> </span></p>
        <p><span class="misdatos2"> Detalles del Pedido : </span><span class="misdatosp"><?php echo $elpedido->detalles; ?> </span></p>


        <p class="tpanel"> Diseño<span class="line"></span></p>

        <div class="">
        <?php 
          echo Form::open(array('url' => '/admin/detalles','method' => 'post','files'=>true)); 
          echo Form::hidden('id',$elpedido->id) ;
          echo Form::hidden('num',$elpedido->id) ;
          echo Form::file('img');
          echo Form::submit('subir foto', array('class' => 'btn btn-primary btn-lg btn-block'));
          echo Form::close(); 
        ?>
        </div>

        <?php 
        if($elpedido->img3 != '') { ?>

         <div class="disenoface">
            
             <p class="titulodiseno"> tercer diseño propuesto </p>

            <img src="/imagenes/disenos/<?php echo $elpedido->img3 ?>">

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
            
             <p class="titulodiseno"> Segundo diseño propuesto </p>

            <img src="/imagenes/disenos/<?php echo $elpedido->img2 ?>">

            <?php 

            if($comentarios!= null) {
              foreach($comentarios as $comentario){
                if($comentario->num_img == 2) {
                  ?> <div class="comentarios"><?php echo $comentario->comentario; ?> </div> <?php
                }
              }

            }?>
        </div>
        <?php }?>



        <?php if($elpedido->img != '') {?>

        <div class="disenoface">
            
             <p class="titulodiseno"> Primer diseño propuesto </p>
            
             <img src="/imagenes/disenos/<?php echo $elpedido->img ?>">

            <?php 

            if($comentarios!= null) {
              foreach($comentarios as $comentario){
                if($comentario->num_img == 1) {
                  ?> <div class="comentarios"><?php echo $comentario->comentario; ?> </div> <?php
                }
              }

            } ?>
        </div>
        <?php }?>

        
       
    </div>


</div>
