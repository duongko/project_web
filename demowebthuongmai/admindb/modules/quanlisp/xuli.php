<?php 

    include('../cofig.php');
    $id=$_GET['id'];
    $tenloaisp=$_POST['tenloaisp'];// lấy giá tri cua phần name trong input cho vao tham số giống GET
    $thutu=$_POST['thutu'];
    if(isset($_POST['them'])){//lấy từ nut thêm của tran them.php
        //cau lệnh sql thêm//
        $sql="insert into loaisp(tenloaisp,thutu) values ('$tenloaisp','$thutu')";
        mysqli_query($conn,$sql);//câu lênh try vấn vs csdl
       header('location:../../index.php?quanli=quanlisp&ac=them');//quay về trang ban đầu


    }else if(isset($_POST["sua"])){
        // câu lênh sql sửa (update)
        $sql="update loaisp set tenloaisp='$tenloaisp',thutu='$thutu'where id_loaisp='$id'";
        mysqli_query($conn,$sql);//câu lênh try vấn vs csdl
        header('location:../../index.php?quanli=quanlisp&ac=sua&id='.$id);
        
    }else{
        // câu lện sql xóa
        $sql="delete from loaisp where id_loaisp='$id'";//id_loaisp là phàn csdl
        mysqli_query($conn,$sql);
        header('location:../../index.php?quanli=quanlisp&ac=them');
        
    };

?>