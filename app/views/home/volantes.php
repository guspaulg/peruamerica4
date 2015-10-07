

<div class="container gallery clearfix">
  
   <div class="sixteen columns">
      <h1 class="page-title">Volantes Publicitarios<span class="line"></span></h1>  </br></br>
   </div><!-- Page Title -->
 

   <!-- Start Project Details -->
   <div class="seven columns  bottom">
     
      <div class="row">          
        <div class="col-md-12"> 
          <div class="well bs-component">

              
              <?php 
              if($vista>1) {  
              ?>  
              <div class="div-antes-comprar">

                  <div style="width:50% ;float:left; margin-left:10%;"> 
                      <P class="resumen">Costo Final:</P>
                      <div class="costos"> S/. <?php echo $costo;?></div>
                      <p class="costo2"> 
                        <strong>Incluido:</strong></br> 
                        I.G.V. y Gastos de envio </br>
                        Dscto: 15 %</br>
                        Precio Normal <strong> S/. <?php $costoant=$costo*1.15; echo $costoant ?></strong></br>
                        Precio Final<strong> S/. <?php echo $costo; ?></strong></br>

                      </P>
                  </div>

                  <div class="caja"> 
                      <img src="/imagenes/caja.png" style="margin: 0 auto;">
                  </div>

              </div>    

              <div class="div-comprar">
                   <?php 
                      echo Form::open(array('url' => '/carrito/confirm','method' => 'get')); 
                      $detalles='tipo de papel: '.$papel.' ; bordes: '.$color.' ; Diseño: '.$diseno2;
                      echo Form::submit('Comprar ahora', array(
                          'class' => 'comprar btn-primary btn-lg btn-block',
                          'data-precio' => $costo,
                          'data-cantidad' => $cantidad2,
                          'data-detalles' => $detalles,
                          'data-codigo' => $codigo,  
                          'data-producto' => $producto,)); 
                      echo Form::close(); 
                    ?>
              </div>

              <?php
                }else{
                  $papel='cartulina';
                  $cantidad='1';
                  $diseno='1';
                  $color='1';
                }
              ?>

              <div class="titulo-param">Elige tus Parametros </div>
              <?php 
              echo Form::open(array('url' => '/volantes' , 'method' => 'post')); 
              ?>
              <div class="form-group">
                  <?php
                  echo Form::label('cantidad', ' Cantidad', array('class' => 'pregunta')); 
                  ?>
                  <div id="popup">
                    <a>
                      <img src="/imagenes/info.png">
                      <span> <div class="titulo-selec"> Cantidad </div>Elige la <b>cantidad</b> que desees, seleccionando en el desplegable 
                      alguna de las opciones más usuales.</span>
                    </a>
                  </div>
                  <?php
                  echo Form::select('cantidad', array('1' => '1 millar','2' => '2 millares', 
                    '4' => '4 millares','8' => '8 millares','12' => '12 millares'), $cantidad, array('class' => 'form-control2'));
                  ?>                   
              </div>


              <div class="form-group">
                  <?php
                  echo Form::label('papel', 'Tipo de papel', array('class' => 'pregunta')); 
                  ?>
                  <div id="popup">
                    <a>
                      <img src="/imagenes/info.png">
                      <span> <div class="titulo-selec"> Papel</div>El material más utilizado para este producto es el <strong>Plastificado
                       mate</strong> por su presentación elegante. tambien Utilizamos cartulina opalina que tiene mayor opacidad y blancura, 
                       es rígida y sedosa al tacto, y es la ideal para poder escribir encima sin ningún tipo de problema.<br><br>Puedes escoger 
                      también elegir el plastificado brillante si deseas un producto de fantasía que ofrece un resultado excelente.</span>
                    </a>
                  </div>
                  <?php
                  echo Form::select('papel', array('periodico' => 'Papel Periodico', 'bond' => 'Papel Bond 75gr.',
                   'couche' => 'Papel couche 130gr.'), $papel ,array('class' => 'form-control2'));
                  ?>
              </div>
              <div class="form-group">
                  <?php
                  echo Form::label('cantos', '¿Cuantos Colores deseas?', array('class' => 'pregunta')); 
                  ?>
                  <div id="popup">
                    <a>
                      <img src="/imagenes/info.png">
                      <span> <div class="titulo-selec"> Bordes </div>Si quieres dar un toque distinto a este producto, 
                      puedes  escoger  para que los vértices queden redondeados</span>
                    </a>
                  </div>
                  <?php
                  echo Form::select('color', array('1' => 'Un solo Color', '2' => 'Dos Colores', 'full' => 'Full Color'),$color, array('class' => 'form-control2'));
                  ?>
              </div>
              <div class="trabajamos"> Trabajamos con el tamaño ideal para mayor eficiencia de tu publicidad, 1/4 de una hoja A4. </div>
              <div class="form-group">
                  <?php
                  echo Form::label('diseno', '¿Tienes tu propio diseño?', array('class' => 'pregunta')); 
                  ?>
                  <div id="popup">
                    <a>
                      <img src="/imagenes/info.png">
                      <span> <div class="titulo-selec"> Diseño</div> Nosotros tenemos diseñadores Profesionales a tu disposicion, no 
                      tiene costo el diseño en Peruamerica.
                      </span>
                    </a>
                  </div>
                  <?php
                  echo Form::select('diseno', array('1' => 'No, quiero que Peruamerica me proponga un diseño', 
                      '2' => 'si, tengo un diseño',), $diseno, array('class' => 'form-control2'));
                  ?>
              </div>
              <?php
              echo Form::submit('¡Calcular presupuesto!', array('class' => 'calcular btn btn-primary btn-lg btn-block')); 
              echo Form::close(); ?>


                                
          </div>  
        </div>
      </div>
   </div>

      <!-- ++++++++++++++++++ columna tres +++++++++++++++++++++++++++ -->
           <div class="nine columns top bottom">

             <div class="espacio-2 col-md-12 col-sm-12">
               
                  <div id="bigPic">
                    <img src="/imagenes/volantes/volante1.jpg" alt="" style="display: none; opacity: 1; z-index: 1;">
                    <img src="/imagenes/volantes/volante2.jpg" alt="" style="display: none; opacity: 1; z-index: 1;">
                    <img src="/imagenes/volantes/volante3.jpg" alt="" style="display: none; opacity: 1; z-index: 1;">
                    <img src="/imagenes/volantes/volante4.jpg" alt="" style="display: none; opacity: 1; z-index: 1;">
                    <img src="/imagenes/volantes/volante5.jpg" alt="" style="display: none; opacity: 1; z-index: 1;">
                    
                  </div>
                  
                  <ul id="thumbs">
                    <li class=" " rel="1"><img src="/imagenes/volantes/volante-1.jpg" alt=""></li>
                    <li class=" " rel="2 "><img src="/imagenes/volantes/volante-2.jpg" alt=""></li>
                    <li rel="3" class=" "><img src="/imagenes/volantes/volante-3.jpg" alt=""></li>
                    <li rel="4" class=" "><img src="/imagenes/volantes/volante-4.jpg" alt=""></li>
                    <li rel="5" class=" "><img src="/imagenes/volantes/volante-5.jpg" alt=""></li>
                  
                  </ul>
                  

             </div><!-- End slider-project -->  

             <h2 class="title top-2 bottom-2">Detalles del servicio :<span class="line"></span></h2>
               
               <div class="about-project bottom">
                 <p>
                  Solo <strong>Peruamerica</strong> es capaz de ofrecer un servicio óptimo al<strong> Precio Justo</strong>. 
                  Podras optar por enviarnos tu propio diseño o hacer uso de los servicios de nuestros diseñadores gráficos 
                  para lograr un diseño profesional acorde a tus necesidades.</p>
               </div>
               
              
               
               <h2 class="title bottom-2">Nuestro servicio incluye :<span class="line"></span></h2>
               
                <ul class="square-list job bottom-2">
                  <li class="mili"> Gigantografias en Alta Resolución de 1440 dpi </li>
                  <li class="mili">Impresión con Garantía y Calidad.</li>
                  <li class="mili"> Diseño Personalizado. </li>
                  <li class="mili"> Reparto a domicilio GRATIS. </li>
                  <li class="mili"> Asistencia online y telefónica permanente para nuestros clientes. </li>
                </ul><!-- End square-list -->



           </div>
   <!-- ++++++++++++++++++ final columna tres +++++++++++++++++++++++++++ -->


</div><!-- <<< End Container >>> -->
  
      
<script type="text/javascript">
  var currentImage;
    var currentIndex = -1;
    var interval;
    function showImage(index){
        if(index < $('#bigPic img').length){
          var indexImage = $('#bigPic img')[index]
            if(currentImage){   
              if(currentImage != indexImage ){
                    $(currentImage).css('z-index',2);
                    clearTimeout(myTimer);
                    $(currentImage).fadeOut(250, function() {
              myTimer = setTimeout("showNext()", 3000);
              $(this).css({'display':'none','z-index':1})
          });
                }
            }
            $(indexImage).css({'display':'block', 'opacity':1});
            currentImage = indexImage;
            currentIndex = index;
            $('#thumbs li').removeClass('active');
            $($('#thumbs li')[index]).addClass('active');
        }
    }
    
    function showNext(){
        var len = $('#bigPic img').length;
        var next = currentIndex < (len-1) ? currentIndex + 1 : 0;
        showImage(next);
    }
    
    var myTimer;
    
    $(document).ready(function() {
      myTimer = setTimeout("showNext()", 3000);
    showNext(); //loads first image
        $('#thumbs li').bind('click',function(e){
          var count = $(this).attr('rel');
          showImage(parseInt(count)-1);
        });
  });
    


  </script> 