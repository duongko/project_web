
<form action="modules/quanlichitietsp/xuli.php" method="POST"enctype="multipart/form-data">
<!-- giá trị enctype="myltipart/form_data" để có thể hiểu thị ảnh -->

        <table width="100%" border="1">
                    <tr>
                        <td colspan="2"><h3 style="text-align:center;use-select:none;color:red;margin-top:10px">them chi tiết sp</h3></td>
                    </tr>
                    <tr>
                        <td>tên sp:</td>
                        <td><input type="text" name="tensp"style="width:99%;border:none;outline:none" ></td>
                    </tr>
                    <tr>
                    <td>price:</td>
                        <td><input type="text" name="price"style="width:99%" ></td>
                    </tr>
                    <tr>
                        <td>hinh ảnh:</td>
                        <td><input type="file" name="hinhanh"style="width:99%" ></td>
                    </tr>
                    <tr><td>mô tả</td>
                        <td><textarea name="mota"cols='30'rows="10"></textarea></td></tr>
                        <?php 
                            $sql="select * from loaisp";
                            $run=mysqli_query($conn,$sql);

                        ?>
                    <tr><td>loai sp</td>
                        <td><select  name="loaisp" id="">
                        <?php
                        
                        while($dong=mysqli_fetch_assoc($run)){
                            
                            
                        ?>
                            <option value="<?php echo $dong['id_loaisp'] ?>"><?php echo $dong['tenloaisp'] ?></option>

                        <?php } ?>
                            </select>
                        </td>
                    </tr>
                        
                    <tr><td>thứ tự</td>
                        <td><input type="text" name="thutu"style="width:99%" ></td></tr>
                    <tr>
                      <td colspan="2"><div align="center">
                        <button type="submit" name="them" style="width:100px;height:35px;background:red;color:white;font-size:18px">thêm</button>
                                        </div>
                      </td>
                    </tr>

        
        
        </table>





</form>