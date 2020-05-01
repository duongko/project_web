
<!-- là trang hiển thị nội dung,trang điều hướng -->

<div class="left">
    <?php 
            //tạo ra 1 tham số tại thanh url giống như để kết nối tới giá trị liên quan tói tham số đó
        if(isset($_GET['ac'])){
            $tam=$_GET['ac'];//trên thanh url có tham số ac
        }else{
            $tam='';
        }if($tam=="them"){
            include("modules/quanlisp/them.php");//them  gắn giá trị vào biến tam
        }elseif($tam=='sua'){
            include("modules/quanlisp/sua.php");

        }

    ?>
           

        
 </div>
<div class="right">
    <?php 
    // hiển thị trang liệt kê ra màn hình
        include("modules/quanlisp/lietke.php");
    
    
    ?>
   
</div>