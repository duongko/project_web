 
    <div class="content">
      <?php 
          // hàm GET đẻ truyền tham số vào thanh url : quanli
        if(isset($_GET['quanli'])){
            $tam=$_GET['quanli'];
           // gán biến vào tham số đó cho dễ gọi
        }else{
            $tam='';
        }if($tam=="quanlisp"){
          // nếu mà trên thanh url dc gọi tới tham số quanli=quanlisp thì sẽ được trỏ tới trang main.php
            include("quanlisp/main.php");
        }if($tam=="quanlichitietsp"){
          include("quanlichitietsp/main.php");
        }
      
      ?>
    </div>

