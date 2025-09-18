<?php
function connect_db(){
    $host="localhost";
    $username= "root";
    $password= "";
    $dbname= "my_db";
    $con=mysqli_connect($host,$username,$password);
    if(!$con){
        die("ket noi csdl that bai".mysqli_connect_error());
    }
    mysqli_select_db($con,$dbname);
    $con=mysqli_connect($host,$username,$password,$dbname);
    if(!$con){
        die("ket noi that bai".mysqli_connect_error());
    }
    return $con;
}
?>