<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php 

        session_start();//khởi động session trc thẻ html,dùng để chạy giỏ hàng
   
    

?>


    <div class="khung">
    

    <?php
        include("admindb/modules/cofig.php");
        include('modules/header.php');
        include('modules/menu.php');
        include('modules/content.php');
    
    ?>    
    
    </div>
</body>
</html>