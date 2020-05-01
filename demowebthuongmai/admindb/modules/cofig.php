<?php 
//kết nối csdl
    $tenmaychu='localhost';
    $tentaikhoan='root';
    $pass='';
    $csdl='webbanhang';
    $conn= mysqli_connect($tenmaychu,$tentaikhoan,$pass,$csdl);
   if($conn){
        mysqli_query($conn,"SET NAMES 'utf8'");//try vẫn cơ sở dữ liệu/
   }else{
       echo'không tai dc'.mysqli_error();
   }

   


?>