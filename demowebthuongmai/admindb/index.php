<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<!-- trang để chạy chương trình giống với trang app.js -->
    <div class="khung">
      <?php 
        
        include("modules/cofig.php");//thêm trang kết nối với cơ sở dữ liệu
        include("modules/header.php");
        include("modules/menu.php");
        include("modules/content.php");
      
      ?>

    </div>
</body>
</html>