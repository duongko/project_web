<?php 
 $sql="select * from loaisp where id_loaisp=$_GET[id]";
 $run=mysqli_query($conn,$sql);
$dong_chitiet=mysqli_fetch_assoc($run);

?>

<div class="sanphamall">
<h2><?php echo $dong_chitiet['tenloaisp'] ?></h2>
                <ul>
               <?php 
                    $sql_chitiet="select * from chitietsp where id_loaisp=$_GET[id]" ;
                    $run_chitiet=mysqli_query($conn,$sql_chitiet);
                    while($dong=mysqli_fetch_assoc($run_chitiet)){
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
           

