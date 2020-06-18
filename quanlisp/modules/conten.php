<div class="content">
           <?php 
                
                if(isset($_GET['quanli'])){
                    $tam=$_GET['quanli'];
                }else{
                    $tam='';
                }if($tam=="quanlisp"){
                   include("qualisp/main.php");
                }if($tam=="quanlichitietsp"){
                    include("quanlichitietsp/main.php");
                }
           
           ?>

  </div>