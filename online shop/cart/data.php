<?php 

include('../db.php');
session_start();
date_default_timezone_set('Asia/Manila');
$jim = new Shopping();
$q = $_GET['q'];
if(!isset($_SESSION['cart'])){
    $_SESSION['cart'] = array(); 
    $_SESSION['proID'] = 0;
}
if($q == 'addtocart'){
    $product = $_POST['product'];
    $price = $_POST['price'];
    $qty = $_POST['qty'];
    $jim->addtocart($product,$price,$qty);
}else if($q == 'emptycart'){
    unset($_SESSION['cart']); 
    unset($_SESSION['proID']); 
    header("location:../cart.php");
}else if($q == 'removefromcart'){
    $id = $_GET['id'];
    $jim->removefromcart($id);
}else if($q == 'updatecart'){
    $id = $_GET['id'];
    $qty = $_POST['qty'];
    $jim->updatecart($id,$qty);
}else if($q == 'countcart'){
    $jim->countcart();
}else if($q == 'countorder'){
    $jim->countorder();
}else if($q == 'countproducts'){
    $jim->countproducts();
}else if($q == 'countcategory'){
    $jim->countcategory();
}else if($q == 'checkout'){
    $jim->checkout();
}else if($q == 'verify'){
    $jim->verify();   
}
/*$_SESSION['cart'];
$product = 'product101';
$price ='300';
$jim->addtocart($product, $price);*/
class Shopping {
    function addtocart($product, $price, $qty){
        $cart = array(
            'proID' => $_SESSION['proID'],
            'product' => $product,
            'price' => $price,
            'qty' => $qty
        );
        $_SESSION['proID'] = $_SESSION['proID'] + 1;
        array_push($_SESSION['cart'],$cart); 
        
        return true;
    }
    
    function removefromcart($id){        
        $_SESSION['cart'][$id]['qty'] = 0;
        //print_r($_SESSION['cart'][$id]['qty']);
        header("location:../cart.php");
    }
    
    function updatecart($id,$qty){
        $_SESSION['cart'][$id]['qty'] = $qty;
       
        
       header("location:../cart.php");
    }
    
    function countcart(){
        $count = 0;
        $cart = isset($_SESSION['cart']) ? $_SESSION['cart']:array();
        foreach($cart as $row):
            if($row['qty']!=0){
                $count = $count + 1;
            }            
        endforeach;

        echo $count;   
    }
    function countorder(){
        $q = "select * from dbgadget.order where status='unconfirmed'";
        $result = mysql_query($q);
        echo mysql_num_rows($result);
    }
    function countproducts(){
        $q = "select * from dbgadget.products";
        $result = mysql_query($q);
        echo mysql_num_rows($result);
    }
    function countcategory(){
        $q = "select * from dbgadget.category";
        $result = mysql_query($q);
        echo mysql_num_rows($result);
    }
    function checkout(){
        include('../db.php');
        $fname = $_POST['fname'];   
        $lname = $_POST['lname'];   
        $contact = $_POST['contact'];   
        $email = $_POST['email'];   
        $address = $_POST['address'];   
        $fullname = $fname.' '.$lname;
        $date = date('m/d/y h:i:s A');
        $item = '';
        foreach($_SESSION['cart'] as $row):
            if($row['qty'] != 0){
                $product = '('.$row['qty'].') '.$row['product'];
                $item = $product.', '.$item;
            }
        endforeach;
        $amount = $_SESSION['totalprice'];
        echo $q = "INSERT INTO dbgadget.order VALUES (NULL, '$fullname', '$contact', '$address', '$email', '$item', '$amount', 'unconfirmed', '$date', '')";

        mysql_query($q);
        
        unset($_SESSION['cart']); 
        header("location:../success.php");
    }
    
    function verify(){
        $username = $_POST['username'];   
        $password = $_POST['password'];   
        
        $q = "SELECT * from dbgadget.user where username='$username' and password='$password'";
        $result = mysql_query($q);
        $_SESSION['login']='yes';
        echo mysql_num_rows($result);
    }
}

?>