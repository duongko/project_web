<?php
    include("../config.php");
    $id =$_GET['i'];
    $tenloaisp=$_POST['tenloaisp'];
    $thutu=$_POST['thutu'];
    if(isset($_POST['them'])){
        $sql="insert into loaisp(tenloaisp,thutu)values('$tenloaisp','$thutu')";
       $alo= mysqli_query($conn,$sql);
       if(!$alo){
           die('lỗi'.mysqli_error($conn));

       }
       header("location:../../index.php?quanli=quanlisp&ac=them");
    }else if(isset($_POST['sua'])){
        //sửa
        $sql="update loaisp set tenloaisp='$tenloaisp',thutu='$thutu' where id_loaisp='$id'";
        $alo= mysqli_query($conn,$sql);
        if(!$alo){
            die('lỗi'.mysqli_error($conn));
 
        }
        header("location:../../index.php?quanli=quanlisp&ac=sua&i=".$id);

    }else{
        $sql="delete from loaisp where id_loaisp='$id'";
        $alo= mysqli_query($conn,$sql);
        if(!$alo){
            die('lỗi'.mysqli_error($conn));
 
        }
        header("location:../../index.php?quanli=quanlisp&ac=them");
    }




?>