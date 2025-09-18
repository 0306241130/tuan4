<?php
require_once("connet_db.php");
if($_SERVER["REQUEST_METHOD"] == "POST"&&isset( $_POST["fsubmit"])){
   $username=$_POST["fusername"];
   $pass=$_POST["fpass"];
   $email=$_POST["femail"];
   $name=$_POST["name"];
   $conet=connect_db();
   if($conet){
      $sql="INSERT INTO quan_tri_vien(username,password,email,name) VALUES";
      $sql.= "('".$username."','".$pass."','".$email."','".$name."')";
     
      if(mysqli_query($conet, $sql)){
         echo"Them du lieu thanh cong";
      }else{
         echo "Loi thuc thi: ".$sql."<br>".mysqli_error($conet);
      }
   }
   mysqli_close($conet);
}
?>