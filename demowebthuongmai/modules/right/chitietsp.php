
<?php
  $sql="select * from chitietsp where id_sp=$_GET[id]";
  $run=mysqli_query($conn,$sql);
  $dong=mysqli_fetch_assoc($run);

?>



 <table width="200"height="300" border="1"style="float:left">
    <tr>
        <td colspan="2" ><h2 style="text-align:center;color:red;margin-top:0"> chi tiết sản phẩm</h2></td>
    </tr>
    <tr>
        <td rowspan='2'width="90"height="100"><img src="admindb/modules/quanlichitietsp/uploads/<?php echo $dong['hinhanh'] ?>"width="90"height="100"style="align:center"></td>
        <td>ten sp: <?php echo $dong['tensp'] ?></td>
    </tr>
    <tr>

        <td>price:<?php echo $dong['price'] ?></td>
        
      
    
   
    <tr>
        <td colspan="2">
        <div align="center">
        <h3 style="width:250px;height:40px;font-size:20px">thông số sản phẩm</h3>
        </div>
        </td>
       
    </tr>
    <tr>
    <td colspan="2">
        <?php echo $dong['mota']?>
        </td>
        
    </tr>
    <a href="index.php?xem=giohang&ad=<?php echo $dong['id_sp'] ?>">mua</a>
   
</table>
<h2>giỏ hàng</h2>
   
