<h1>giỏ hàng</h1>
<?php

// session_destroy();
        //thêm sản phẩm(thêm số lượng sản phẩm thêm vào giỏ hàngf)
        if(isset($_GET['ad']) && !empty($_GET['ad'])){
            $id=$_GET['ad'];
            @$_SESSION['cart_'.$id] += 1;
        }

        if(isset($_GET['them'])){
            $them=$_GET['them'];
            @$_SESSION['cart_'.$them]+=1;
             header("location:../../index.php?xem=giohang");
        }
        
        if(isset($_GET['tru'])){
            $tru=$_GET['tru'];
            @$_SESSION['cart_'.$tru]-=1;
             header("location:../../index.php?xem=giohang");
        }
        if(isset($_GET['xoa'])){
            $xoa=$_GET['xoa'];
            @$_SESSION['cart_'.$xoa]=0;
             header("location:../../index.php?xem=giohang");
        }



       //hiển thị sản phảm đã thêm 
       foreach($_SESSION as $name => $value){//value là gắn vào giá trị session,$nam là tên gán biến
        if($value>0){
            if(substr($name,0,5)=='cart_'){
               
                $id=substr($name,5,9).'<br>';//substr lấy một chuỗi kí tự,Strlen là hàm độ dài chu,định kiểu cho $name
             
                $sql="select * from chitietsp where id_sp='".$id."'";//id này là của cái số du lấy của biến cart_id
                $query=mysqli_query($conn,$sql);
                while($dong=mysqli_fetch_assoc($query)){

                    $tongtien= $dong['price']*$value;
                    echo $dong['tensp'].' -  '.'price:'.$dong['price'].'- số lượng '.$value.'-tổng tiền='.$tongtien.
                    '<a href="index.php?xem=giohang&tru='.$id.'">[-]</a><a href="index.php?xem=giohang&them='.$id.'">[+]</a><a href="index.php?xem=giohang&xoa='.$id.'">delete</a></br>';
                }
              
            }
        }
       }

?>
    