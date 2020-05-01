 
 
 <?php
    $sql="select *from loaisp where id_loaisp=$_GET[id]"; //lấy id
    $r=mysqli_query($conn,$sql);// kết nối csdl
    $dong=mysqli_fetch_assoc($r);// duyệt bảng csdl

 ?>
 <form action="modules/quanlisp/xuli.php?id=<?php echo $dong['id_loaisp']?>" method="post"enctype="multipath/form-data">
 <table width="100%" border="1">
 <tr><td colspan="2"><h3 style="color:red;text-align:center">update thông tin sản phẩm</h3></td></tr>
    <tr>
        <td>tên loại sản phẩm</td>
        <td><input type="text" name="tenloaisp"value='<?php echo $dong['tenloaisp']?>'/></td>
    </tr>
    <tr>
        <td>thứ tự</td>
        <td><input type="text" name="thutu"value='<?php echo $dong['thutu'] ?>'/></td>
    </tr>
    <tr><td colspan="2"><div align="center">
    <button type="submit" name="sua" id="sua" value="thêm"style="width:140px;height:30px;color:white;background:red">update</button>
    </div></td></tr>
</table>
</form> 