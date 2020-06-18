<!-- hiển thị dữ liệu ra màn hình -->


<table width="100%" border="1"height="200">
<tr><td colspan="8"><h2 style="color:red;text-align:center">Bảng thông tin sản phẩm</h2></td></tr>
    <tr>
        <td>ID</td>
        <td>ten sản phẩm</td>  
        <td>hinh anh</td>
        <td>price</td>
        <td> loại sp</td>
        <td>thứ tự</td>
        <td colspan="2"> quản lí</td>
    </tr>
    <?php 
        $sql="select *from chitietsp order by id_sp desc";
        $run=mysqli_query($conn,$sql);
        $i=0;
        while($dong=mysqli_fetch_assoc($run)){

        
        
    ?>
    
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $dong['tensp'] ?></td>
        <td><img src="modules/quanlichitietsp/imgs/<?php echo $dong['hinhanh']  ?>"width="65"height="80"></td>
        <td><?php echo $dong['price'] ?></td>
       
        <td><?php echo $dong['id_loaisp'] ?></td>
      
        <td><?php echo $dong['thutu'] ?></td>
        <td><a href="index.php?quanli=quanlichitietsp&ac=sua&id=<?php echo $dong['id_sp'] ?>">sửa</td>
        <td><a href="modules/quanlichitietsp/xuli.php?id=<?php echo $dong['id_sp'] ?>"> xóa</td>
    

    </tr>
   
     <?php
       $i++;
        }
    ?>
    
</table>
