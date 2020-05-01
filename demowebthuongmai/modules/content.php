<div class="content">
        <div class="left">
            <?php 
                 
                 include('left/danhsach.php');
            
            ?>

        </div>
        <div class="right">
            <?php 

                if(isset($_GET["xem"])){
                    $tam=$_GET['xem'];
                }else{
                    $tam='';

                }if($tam=='chitietloaisp'){
                    include('right/chitietloaisp.php');
                }elseif($tam=='chitietsp'){
                    include('right/chitietsp.php');
                }elseif($tam=='giohang'){
                    include('right/admincp/cart.php');    
                }else{
                    include('right/tatcasp.php');
                }

            ?>
           
         </div>
    
    
    </div>
    