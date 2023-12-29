<?php
$server='localhost';
$username='root';
$password='';
$database='crud_php';

if(isset($_POST))

$conn=new mysqli($server,$username,$password,$database);
if($conn){
}else{
    die(mysqli_error($conn));
}
?>