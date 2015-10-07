<div class="container clearfix">


    <div class="panel col-md-3 col-sm-4 col-xs-12">
        <div style="text-align:center;">
            <img src="/imagenes/usuario.png">
        </div></br></br>

        <div class="micuenta">MI CUENTA</div>

        <div class="apanel"><a href="/micuenta">Panel de la Cuenta</a></div>

        <div class="apanel"><a href="misd">Editar mi información</a></div>

        <div class="apanel"><a href="misd">Dirección de envío</a></div>

        <div class="panelselec">Mis Pedidos</div>

        <div class="apanel"><a href="misd">Consultas</a></div>
    </div>

    <div class="panel2 col-md-8 col-sm-7 col-xs-12  col-md-offset-1 col-sm-offset-1">
        
        <p class="tpanel"> Mis Pedidos <span class="line"></span></p>

        <table class="">

            <thead>

                <tr>
                  <th>Fecha/th>
                  <th>Detalles</th>
                  <th> Costo</th>
                  <th> Estado</th>
                  <th> Ver</th>

                </tr>
            </thead>

            <tbody>
                <?php
                foreach($pedidos as $pedido)
                { ?>
                    <tr>
                    
                        <td> <?php echo $pedido->created_at; ?></td>

                        <td> <?php echo $pedido->producto ?> </td>

                        <td> S/. <?php echo $pedido->precio?> </td>

                        <td> 

                        <?php
                        if ($pedido->estado =='1'){
                          ?>Pendiente, tu diseño esta en proceso<?php
                        }
                        ?>

                        <?php
                        if ($pedido->estado =='2'){
                          ?>Diseño entregado, esperando tu confirmación<?php
                        }
                        ?>

                        <?php
                        if ($pedido->estado =='3'){
                          ?> Estamos revisando de tus observaciones<?php
                        }
                        ?>

                        <?php
                        if ($pedido->estado =='4'){
                          ?>Tu diseño se esta imprimiendo<?php
                        }
                        ?>

                        <?php
                        if ($pedido->estado =='5'){
                          ?>Tu diseño esta en camino <?php
                        }
                        ?>

                        <?php
                        if ($pedido->estado =='6'){
                          ?>Producto entregado<?php
                        }
                        ?>
                        





                        </td>

                        <td>

                        <?php 
                          echo Form::open(array('url' => '/mispedidos/detalles','method' => 'get')); 
                          echo Form::hidden('idpedido', $pedido->id);
                          echo Form::submit('', array('class' => 'lupa',)); 
                          echo Form::close(); 
                        ?>
                        </td>
                    </tr>

                <?php 
                } ?>
            </tbody>
        </table>
    </div>


</div>

