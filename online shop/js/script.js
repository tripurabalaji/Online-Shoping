$(function(){
   
    //when add to cart is clicked
    $('#add-to-cart').on('click',function(){
        $(this).siblings('.info').fadeIn(700).fadeOut(1000);
        var price = $(this).siblings('p').children('.price').html();
        var product = $(this).siblings('.product').html();
        $.post('cart/data.php?q=addtocart',
               {
                    price:price,
                    product:product,
                    qty:1
               }
        );
    });
    
    //remove product from cart
    $('.removeproduct').on('click',function(){
        $(this).parent().parent().fadeOut(300);
        var id = $(this).siblings('.proID').val();
        $.post('cart/data.php?q=removefromcart',
               {
                    proID:id
               }
        );

    });    
    //set time
    setInterval(function() {
        $.get("cart/data.php?q=countcart",function(data){
            $('.badge').html(data);
        });
        
        $.get("cart/data.php?q=countorder",function(data){
            $('.order-admin-badge').html(data);
        });
        
        $.get("cart/data.php?q=countproducts",function(data){
            $('.products-admin-badge').html(data);
        });
        
        $.get("cart/data.php?q=countcategory",function(data){
            $('.category-admin-badge').html(data);
        });
        
    }, 500);
    
    //confirmation
    $('.confirm').on('click',function(){
        var confirmation = confirm("Are you sure?");
        if(!confirmation){
            return false;   
        }
    });
    
    //login
    $('#login').on('click',function(){
        var username = $('#username').val(); 
        var password = $('#password').val(); 
        
        $.post('cart/data.php?q=verify',
               {
                   username:username,
                   password:password
               },
               function(data){
                    if(data == 1){                        
                        $('.error').removeClass().addClass('alert alert-success').html('<i class="fa fa-unlock"></i> Logging in...'); 
                        setInterval(function(){
                            window.location = 'admin.php';
                        },1000);
                    }else{
                        $('.error').addClass('alert alert-danger').html('Username/Password is Incorrect!');
                        $('#username').val('');
                        $('#password').val(''); 
                    }
               });
    });
});