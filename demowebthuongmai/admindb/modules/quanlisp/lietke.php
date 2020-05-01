<!-- hiển thị dữ liệu ra màn hình -->

<table width="100%" border="1">
<tr><td colspan="5"><h2 style="color:red;text-align:center">Bảng thông tin sản phẩm</h2></td></tr>
    <tr>
        <td>ID</td>
        <td>ten sản phẩm</td>  
        <td>thứ tự</td>
        <td colspan="2"> quản lí</td>
    </tr>

    <?php 
             
    $sql="select * from loaisp order by id_loaisp desc ";
    $r=mysqli_query($conn,$sql);
    if(!$r){
        die("lỗi".mysqli_error($conn));
    }

        $i=0;
        while($dong=mysqli_fetch_assoc($r)){
                //gắn biến dong vào câu lệnh trên//
    ?>
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $dong['tenloaisp']; ?></td>
        <td><?php echo $dong['thutu']; ?></td>
        <td><a href="index.php?quanli=quanlisp&ac=sua&id=<?php echo $dong['id_loaisp'] ?>">sửa </td>
        <td ><a href="modules/quanlisp/xuli.php?id=<?php echo $dong['id_loaisp']?>"> xóa</a></td>
    </tr>
    <?php
        $i++;
        }
    ?>
</table>
