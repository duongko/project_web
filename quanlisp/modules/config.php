<?php
 $maychu="localhost";
 $taikhoan="root";
 $pass="";
 $csdl="webbanhang";
 $conn= mysqli_connect($maychu,$taikhoan,$pass,$csdl);
 mysqli_query($conn,"set names 'utf8'");
 if(!$conn){
     echo"lỗi".mysqli_error($conn);
 }




?>