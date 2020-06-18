<?php 

include('../config.php');
$id=$_GET['id'];
$tensp=$_POST['tensp'];// lấy giá tri cua phần name trong input cho vao tham số giống GET
$mota=$_POST['mota'];
$price=$_POST['price'];
$loaisp=$_POST['loaisp'];

$hinhanh=$_FILES['hinhanh']['name'];
$hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];
$thutu=$_POST['thutu'];

move_uploaded_file($hinhanh_tmp,'imgs/'.$hinhanh);
if(isset($_POST['them'])){//lấy từ nut thêm của tran them.php
    //cau lệnh sql thêm//
    $sql="insert into chitietsp(tensp,thutu,mota,price,id_loaisp,hinhanh) values('$tensp','$thutu','$mota','$price','$loaisp','$hinhanh')";
    mysqli_query($conn,$sql);//câu lênh try vấn vs csdl
   header('location:../../index.php?quanli=quanlichitietsp&ac=them');

}elseif(isset($_POST['sua'])){
    if($hinhanh!=''){
        $sql="update chitietsp set tensp='$tensp',thutu='$thutu',mota='$mota',price='$price',id_loaisp='$loaisp',hinhanh='$hinhanh'where id_sp='$id'";
        }else{
            $sql="update chitietsp set tensp='$tensp',thutu='$thutu',mota='$mota',price='$price',id_loaisp='$loaisp' where id_sp='$id'";
        }
        mysqli_query($conn,$sql);//câu lênh try vấn vs csdl

        header('location:../../index.php?quanli=quanlichitietsp&ac=sua&id='.$id);

}else{
    $sql="delete from chitietsp where id_sp='$id'";
    mysqli_query($conn,$sql);
    header('location:../../index.php?quanli=quanlichitietsp&ac=them');
}



?>