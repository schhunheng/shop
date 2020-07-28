<?php 
  $servername="sql12.freesqldatabase.com";
  $dbname="sql12352045";
  $password="B6LiMuqEjl";
  $username="sql12352045";

  $conn=new mysqli($servername,$username,$password,$dbname);

  // if($conn->connect_error){
  //     die ("Connection Failed: ". $conn-connect_error);
  // }
  // else echo 'Connected!';
  $sql="select * from assets as ass join products as p where product_id=p.id";
  $result=$conn->query($sql);
  $sql="select * from categories";
  $resultnavproduct=$conn->query($sql);
  $conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <?php include "includes/meta.php" ?>
</head>
<body>
  <?php 
    include "includes/nav_bar.php" ;
    include "includes/feature.php";
    include "includes/promotion.php";
  ?>
  
   
  <div class="products">
  <?php 
      include "includes/category.php";
      include "includes/productdetail.php";
  ?>     
  </div>
   
</body>
</html>