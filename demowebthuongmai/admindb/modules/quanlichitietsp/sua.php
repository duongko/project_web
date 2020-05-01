
<?php 

$sql="select * from chitietsp where id_sp=$_GET[id]";
$run=mysqli_query($conn,$sql);
$dong=mysqli_fetch_assoc($run);
?>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>tinymce.init({selector:'textarea'});</script>

<form action="modules/quanlichitietsp/xuli.php?id=<?php echo $dong['id_sp'] ?>" method="post"enctype="multipart/form-data">
 <table width="100%" border="1">
    <tr>
        <td colspan="2" ><h2 style="text-align:center;color:red;margin-top:10px">Sửa chi tiết sản phẩm</h2></td>
    </tr>
    <tr>
        <td>tên sp:</td>
        <td><input type="text" name="tensp"style="width:99%" value="<?php echo $dong['tensp'] ?>"/></td>
    </tr>
    <tr>
        <td>price:</td>
        <td><input type="text" name="price"style="width:99%"value="<?php echo $dong['price'] ?>"/></td>
    </tr>
    <tr>
        <td>Hình ảnh</td>
        <td><input type="file" name="hinhanh"style="width:99%" /><img src="modules/quanlichitietsp/uploads/<?php echo $dong['hinhanh'] ?>"width="57"height="61"></td>
    </tr>
    <tr>
        <td>mô tả </td>
        <td>
            <textarea name="mota"cols="45"rows="10"><?php echo $dong['mota'] ?>
            </textarea>
        </td>
    </tr>  
    <?php 
     $sql="select * from loaisp";//lấy id từ bảng loại sản phẩm làm ở phần 1
     $run=mysqli_query($conn,$sql);
    
    ?> 
    <tr>
        <td>loại sp</td>
        <td><select name="loaisp">
        <?php
                        ///dòng dùng để xử lí loại sản phẩm
                            while($dong_loaisp=mysqli_fetch_assoc($run)){
                            if($dong['id_loaisp']==$dong_loaisp['id_loaisp']){
                        ?>
                            <option  selected="selected" value="<?php echo $dong_loaisp['id_loaisp'] ?>">
                            <?php echo $dong_loaisp['tenloaisp'] ?></option>
                            
                            <?php 
                            }else{
                            ?>
                            <option   value="<?php echo $dong_loaisp['id_loaisp'] ?>">
                            <?php echo $dong_loaisp['tenloaisp'] ?></option>

                        <?php
                            }
                            }
                         ?>
        </select></td>
    </tr>
    <tr>
        <td>thứ tự</td>
        <td><input type="text" name="thutu"style="width:99%;outline:none"value="<?php echo $dong['thutu'] ?>"/></td>
    </tr>
    <tr>
        <td colspan="2">
        <div align="center">
        <input type="submit" name='sua'value="sửa"style="width:150px;height:40px;color:white;background:red;font-size:20px"/>
        </div>
        </td>
       
    </tr>
   
</table>
</form> 