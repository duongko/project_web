<?php

    $sql="select * from chitietsp where id_sp=$_GET[id]";
    $run=mysqli_query($conn,$sql);
    $dong=mysqli_fetch_assoc($run);

?>
<form action="modules/quanlichitietsp/xuli.php?id=<?php echo $dong['id_sp'] ?>" method="POST"enctype="multipart/form-data">
<!-- giá trị enctype="myltipart/form_data" để có thể hiểu thị ảnh -->

        <table width="100%" border="1">
                    <tr>
                        <td colspan="2"><h3 style="text-align:center;use-select:none;color:red;margin-top:10px">Sửa chi tiết sp</h3></td>
                    </tr>
                    <tr>
                        <td>tên sp:</td>
                        <td><input type="text" name="tensp"style="width:99%;border:none;outline:none" value="<?php echo $dong['tensp']?>"></td>
                    </tr>
                    <tr>
                    <td>price:</td>
                        <td><input type="text" name="price"style="width:99%" value="<?php echo $dong['price']?>"></td>
                    </tr>
                    <tr>
                        <td>hinh ảnh:</td>
                        <td><input type="file" name="hinhanh"style="width:99%" >
                            <img src="modules/quanlichitietsp/imgs/<?php echo $dong['hinhanh'] ?>"width="57"height="61">
                        </td>
                    </tr>
                    <tr><td>mô tả</td>
                        <td><textarea name="mota"cols='30'rows="10"><?php echo $dong['mota']?></textarea></td></tr>
                        <?php 
                            $sql_loaisp="select * from loaisp";
                            $run=mysqli_query($conn,$sql_loaisp);

                        ?>
                     <tr><td>thứ tự</td>
                        <td><input name="thutu"style="width:99%"value="<?php echo $dong['thutu']?>" ></td>
                    </tr>    
                    <tr><td>loai sp</td>
                        <td><select name="loaisp" id="">
                        
                        <?php
                        ///dòng dùng để xử lí loại sản phẩm
                            while($dong_loaisp=mysqli_fetch_assoc($run)){
                            if($dong['id_loaisp']==$dong_loaisp['id_loaisp']){
                        ?>
                            <option  selected="selected" value="<?php echo $dong_loaisp['tenloaisp'] ?>">
                            <?php echo $dong_loaisp['tenloaisp'] ?></option>
                            
                            <?php 
                            }else{
                            ?>
                            <option   value="<?php echo $dong_loaisp['tenloaisp'] ?>">
                            <?php echo $dong_loaisp['tenloaisp'] ?></option>

                        <?php
                            }
                            }
                         ?>
                            </select>
                        </td>
                    </tr>
                        
                   
                    <tr>
                      <td colspan="2"><div align="center">
                        <button type="submit" name="sua" style="width:100px;height:35px;background:red;color:white;font-size:18px">sua</button>
                                        </div>
                      </td>
                    </tr>

        
        
        </table>





</form>