/**
* Guest funcionality
*
* @version 1.0
* @license Copyright (c) 2014, Jordi Bassagañas
* @author Jordi Bassagañas
* @created 2014-04-01
* @link http://programarivm.com
*/

$(function(){      
            
    $('#add-book').modal({
        show: false,
        backdrop: 'static',
        keyboard: false
    }); 
            
    var cart = new Cart({'url': '/carrito/confirm'});

    if(!$.isEmptyObject($.cookie('cart'))) {
        cart.setData(JSON.parse($.cookie('cart')).data).printHTML('#my-order-items');
    }
    else {
        var cart = new Cart({'url': '/carrito/confirm'});
    }                
    
    $('.comprar').click(function(){
        var chachibook = {
            'index': cart.data.counter,
            'producto': $(this).attr('data-producto'),
            'cantidad': $(this).attr('data-cantidad'),
            'detalles': $(this).attr('data-detalles'),
            'codigo': $(this).attr('data-codigo'),
            'precio': parseFloat($(this).attr('data-precio'))
        };
        cart.addItem(chachibook).printHTML('#my-order-items');
        $('#add-book-text').empty().append("Acabas de añadir: <br/><br/>" + chachibook.title + ", " + chachibook.price + " €");
   
        $.cookie('cart', JSON.stringify(cart), { expires: 7, path: '/' }); 
        return true;
    });
    


    $(document).on('click', 'a.remove', function(){
        cart.removeItem($(this).attr('data-index')).printHTML('#my-order-items');
        return false;

    });

    $(document).on('click', 'a#pay-now', function(){
        $.cookie('cart', JSON.stringify(cart), { expires: 1, path: '/' });                
        return true;
    });
            
});