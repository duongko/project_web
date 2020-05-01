<?php 
 $sql="select * from loaisp";
 $run=mysqli_query($conn,$sql);


?>

<p style="background:blue;color:white;height:40px;line-height:40px;text-align:center;user-select:none"> LOẠI SẢN PHẨM </p>
             <div class="danhsachsanpham">
                <ul>
                    <?php 
                        while( $dong=mysqli_fetch_assoc($run)){
                    
                    ?>
                    <li><a href="index.php?xem=chitietloaisp&id=<?php echo $dong['id_loaisp'] ?>"><?php echo $dong['tenloaisp'] ?></a></li>
                    
                            <?php 
                                }
                            ?>
                </ul>

            </div>
