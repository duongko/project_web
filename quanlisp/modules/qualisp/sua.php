<?php 


$sql="select *from loaisp where id_loaisp=$_GET[i]"; //lấy id từ thanh url
$r=mysqli_query($conn,$sql);// kết nối csdl
$dong=mysqli_fetch_assoc($r);// duyệt bảng csdl//câu lệnh lấy ra 




?>
<form action="modules/qualisp/xuli.php?i=<?php echo $dong['id_loaisp']?>"method="POST"> <!-- có thêm id thì mới lấy đc id trang xuli.php -->
                    <table width="100%"border="1">
                        <tr>
                            <td colspan="2"><h3 style="text-align:center;color:red">Sửa thông tin sản phẩm</h3></td>
                        </tr>
                        <tr>
                            <td>tên loại sp: </td>

                            <td><input type="text"name="tenloaisp"value="<?php echo $dong['tenloaisp']?>"/></td>
                            
                        </tr>
                        <tr>
                            <td>thứ tự</td>
                            <td><input type="text" name="thutu"value="<?php echo $dong['thutu']?>"/></td>
                        </tr>
                        <tr>
                            <td colspan="2"><button type="submit"name="sua"style="background:red;width:150px;height:30px;margin-left:60px;color:white;font-size:20px" >sửa</button></td>
                        </tr>
                        
                    </table>
</form>