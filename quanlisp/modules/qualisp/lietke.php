<table width="100%" border="1">
                <h2 style="text-align:center;margin-top:20px;color:red" > bảng thông tin sp</h2>
                    <tr>
                        <td>ID</td>
                        <td>ten sản phẩm</td>  
                        <td>thứ tự</td>
                        <td colspan="2"> quản lí</td>
                    </tr>
                    <?php 
                    
                    $sql="select * from loaisp order by id_loaisp desc";
                    $run=mysqli_query($conn,$sql);
                    $i=0;
                    while($dong=mysqli_fetch_assoc($run)){



               
                    
                    ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $dong['tenloaisp'] ?></td>
                        <td><?php echo $dong['thutu'] ?></td>
                        <td><a href="index.php?quanli=quanlisp&ac=sua&i=<?php echo $dong['id_loaisp'] ?>">sửa</td>
                        <td><a href="modules/qualisp/xuli.php?i=<?php echo $dong['id_loaisp'] ?>">xóa</td>
                    <tr>  
                        <?php $i++; }?>
</table>           