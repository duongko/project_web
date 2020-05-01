<div class="sanphamall">
    <h2>tất cả sản phẩm</h2>
                <ul>
                <?php 
                    $sql="select * from chitietsp" ;
                    $run=mysqli_query($conn,$sql);
                    while($dong=mysqli_fetch_assoc($run)){
               ?>
                    <li><a href="#">
                        <img src="admindb/modules/quanlichitietsp/uploads/<?php echo $dong['hinhanh'] ?>" with="250px" height="150px">
                        <p><?php echo $dong['tensp'] ?></p>
                        <p><?php echo $dong['price'] ?></p>
                        <a href="index.php?xem=chitietsp&id=<?php echo $dong['id_sp'] ?>">mua</a>

                    </a><li>

                   <?php 
                        }
                   ?>
                    
                <ul>

            </div>
