



    <script>
        $(function(){
            var cart = JSON.parse($.cookie('cart'));
            $('ul#my-order').hide();        
            // Let's fill the HTML table with the shopping cart data.        
            $.each(cart.data.items, function(key, value) {
                $('tbody#confirm-cart').append('<tr><td>' + value.producto + '</td> <td> 5 días hábiles </td> <td> S/.' + value.precio + '.00</td><td>' + value.cantidad + '</td> <td> S/.' + value.precio + '.00</td> </tr>');
            }); 
            $('tbody#confirm-cart').append('<tr><td></td><td></td><td></td><td><b>Total a Pagar</b></td><td><b> S/.' + cart.data.precio + '</b></td></tr>');
            // And append the shopping cart in JSON format to the hidden input.        
            $('input#cart').val($.cookie('cart'));       
        });
    </script>

    <div class="container clearfix">
  
        <div class="sixteen columns"> <h1 class="page-title">Confirma tu pedido<span class="line"></span></h1></br></br></br></br>  </div> 
         

        <div class="col-md-9">

            <ol id="progressbar">
                <li class="point col1b col1a active" value="2">Elije tus productos</li>
                <li class="point col1b col1a active" value="3">Confirma tu Compra</li>
                <li class="point col1b col1a" value="4">Datos Personales</li>
                <li class="point col1b col1a" value="5">Pagar</li>
            </ol>

            <div class="linea"> </div>

            <div class="panel-body">
                <div class="panel panel-default">
                    <table class="mitabla">
                        <thead class="tablap">
                            <tr>
                                <th>Producto</th>
                                <th>Tiempo estimado de entrega</th>
                                <th>Precio</th>
                                <th>Cantidad</th>
                                <th>SubTotal</th>
                            </tr>
                        </thead>
                        <tbody id="confirm-cart">
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="col-md-6">
                    <?php 
                          echo Form::open(array('url' => '/tarjetas','method' => 'get')); 
                          echo Form::submit('Seguir comprando', array('class' => 'btn btn-primary btn-lg btn-block',)); 
                          echo Form::close(); 

                    ?>
                </div>
                <div class="col-md-6">
                    <?php 
                          echo Form::open(array('url' => '/carrito/datos','method' => 'get')); 
                          echo Form::submit('Pagar ahora', array('class' => 'btn btn-primary2 btn-lg btn-block',)); 
                          echo Form::close(); 
                    ?>
                </div> 
            </div>
            <div class="col-md-2"></div>
               
        </div>

        <div class="col-md-3">
            <div class="services clearfix">
                <div class="three columns">
                  <div class="item">
                    <div class=""><img src="/imagenes/envio.png" alt="" /></div>
                    <h3>Plazos de envío </h3>
                  </div>
                </div>

                <div class="three columns">
                  <div class="item">
                    <div class=""><img src="/imagenes/garantia.png" alt="" /></div>
                    <h3>Garantía</h3>
                  </div>
                </div>
                <div class="three columns">
                  <div class="item">
                    <div class=""><img src="/imagenes/ahorro.png" alt="" /></div>
                    <h3>Descuentos</h3>
                  </div>
                </div>

                <div class="three columns">
                  <div class="item">
                    <div class=""><img src="/imagenes/seguridad.png" alt="" /></div>
                    <h3>Seguridad</h3>
                  </div>
                </div>
            </div>

        </div>
    </div>    
    </br></br></br></br>              
             
    
