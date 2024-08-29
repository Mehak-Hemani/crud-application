<?php
require_once "connection/connection.php";

$product_id=$_POST['id'];
$product_name = $_POST["product_name"];
$product_category = $_POST["category"];
$product_price = $_POST["price"];
$product_quantity = $_POST["quantity"];
$product_date = $_POST["added_date"];


$result=mysqli_query($connection, "UPDATE products SET product_name='$product_name', category= '$product_category', price=$product_price, quantity=$product_quantity, added_date='$product_date'");

if($result){
    header("Location: all_products.php");

}else {
    echo mysqli_error($connection);
}
?>