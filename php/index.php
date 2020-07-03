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
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- Flaticon -->
  <link rel="stylesheet"  href="../asset/img/navproduction/font/flaticon.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/css/mdb.min.css" rel="stylesheet">
  <!-- JQuery -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/js/mdb.min.js"></script>
  <link rel="stylesheet" href="../css/index.css">
</head>
<body>
  <div class="navbar">
    <div class="title">
      <h2>Awesome<span style="color:lightgreen">Shop</span></h2>
    </div>
    <div class="rightnav">
      <svg class="bi bi-question-circle" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
      <path d="M5.25 6.033h1.32c0-.781.458-1.384 1.36-1.384.685 0 1.313.343 1.313 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.007.463h1.307v-.355c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.326 0-2.786.647-2.754 2.533zm1.562 5.516c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"/>
      </svg>
      <span>Need Help</span>
      <button id="btnjoin">Join</button>
    </div>
    </div>
    <div class="feature">
       <!-- <img src="./" alt=""> -->
      <div class="content">
        <h2 id="title">Shop your designer dresses</h2>
        <p id="decription">Ready to wear dereses tailored for you from online. Hurry up while stock lasts.</p>
        <div class="searchbox">
           <!-- Search form -->
          <form method="POST" action="searchbox.php" class="form-inline active-cyan-4">
            <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search" name="search"
              aria-label="Search by name products">
            <button type="submit" name="button" value="search"> <i class="fas fa-search" aria-hidden="true"></i><button>
          </form>
        </div>
      </div>
    </div>
    <div class="promotions">
    <div class="promotion">
            <div class="text">
                <h3>Coupon Savings</h3>
                <span>Up to 60% enjoy </span>
            </div>
            <div class="button">
                <button>Shop Coupons</button>
            </div>
            <div class="image">
                <img src="../asset/img/promotion/discount.png" alt="Discount">
            </div>
        </div>
        <div class="promotion">
            <div class="text">
                <h3>Coupon Savings</h3>
                <span>Up to 60% enjoy </span>
            </div>
            <div class="button">
                <button>Delivery More</button>
            </div>
            <div class="image">
                <img src="../asset/img/promotion/delivery.png" alt="">
            </div>
        </div>
        <div class="promotion">
            <div class="text">
                <h3>Coupon Savings</h3>
                <span>Up to 60% enjoy </span>
            </div>
            <div class="button">
                <button>Gift More</button>
            </div>
            <div class="image">
                <img src="../asset/img/promotion/gift.jpg" alt="">
            </div>
        </div>
    </div>
    <div class="products">
        <div class="navproduct">
            <?php
                if($resultnavproduct->num_rows>0){
                    // echo $resultnavproduct->num_rows."<br>";
                    while($row=$resultnavproduct->fetch_assoc()){

                        echo "
                            <ul>
                                <a href=\"\" name=\"\"> <li><img src=\"$row[icon]\" ><b>$row[name]</b></li></a>
                            </ul>
                            ";
                    }
                }
                else{echo "0 result";}
            ?>
        </div>
    <div class="listproduct">
      <?php
        if($result->num_rows>0){
          while($row=$result->fetch_assoc()){
            $disPrice=$row['price']-$row['price']*$row['discount']/100;
            echo "
              <div class=\"product\" >
                <span id=\"discount\">$row[discount]%</span>
                <img src=\"$row[resource_path]\" >
                <div class=\"description\">
                  $row[description]
                </div>
                  <span id=\"fullvalues\"><del>$row[price]$</del></span>
                  <span id=\"values\"> $disPrice$</span>
                  <button id=\"btnbook\"><img style=\"width:24px ;padding: 0px 5px;margin:0px \" src=\"../asset/img/buttons/btnbook.png\">Cart</button>
              </div>
                ";
          }
        }else{echo "0 result";}
      ?>   
    </div>
   
</body>
</html>