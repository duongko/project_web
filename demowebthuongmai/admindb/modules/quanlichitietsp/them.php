
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>tinymce.init({selector:'textarea'});</script>
<form action="modules/quanlichitietsp/xuli.php" method="post"enctype="multipart/form-data">
 <table width="100%" border="1">
    <tr>
        <td colspan="2" ><h2 style="text-align:center;color:red;margin-top:10px">thêm chi tiết sản phẩm</h2></td>
    </tr>
    <tr>
        <td>tên sp:</td>
        <td><input type="text" name="tensp"style="width:99%"/></td>
    </tr>
    <tr>
        <td>price:</td>
        <td><input type="text" name="price"style="width:99%"/></td>
    </tr>
    <tr>
        <td>Hình ảnh</td>
        <td><input type="file" name="hinhanh"style="width:99%"/></td>
    </tr>
    <tr>
        <td>mô tả </td>
        <td>
            <textarea name="mota"cols="45"rows="10">
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
            while($dong=mysqli_fetch_assoc($run)){
         
         ?>   
        <option value="<?php echo $dong["id_loaisp"] ?>"><?php echo $dong["tenloaisp"] ?></option> 
        <!-- chưa rõ thành phần value -->
        
<?php }?>
        </select></td>
    </tr>
    <tr>
        <td>thứ tự</td>
        <td><input type="text" name="thutu"style="width:99%;outline:none"/></td>
    </tr>
    <tr>
        <td colspan="2">
        <div align="center">
        <input type="submit" name='them'value="thêm"style="width:150px;height:40px;color:white;background:red;font-size:20px"/>
        </div>
        </td>
       
    </tr>
   
</table>
</form> 