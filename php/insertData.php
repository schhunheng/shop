<?php
    $servername="sql12.freesqldatabase.com";
    $dbname="sql12352045";
    $password="B6LiMuqEjl";
    $username="sql12352045";

    $conn=new mysqli($servername,$username,$password,$dbname);

    if($conn->connect_error){
        echo 'Connection Failed:'. $conn-connect_error;
    }
    else echo 'Connected!';
    $rscpath='../asset/img/productionList/closthes.png';

    // $sql="insert into assets (id,product_id,sort,is_feature,resource_path)
    //                 values (1,1,4,1,'../asset/img/productionList/closthes.png'),
    //                         (2,2,7,1,'../asset/img/productionList/closthes.png'),
    //                         (3,3,4,1,'../asset/img/productionList/closthes.png'),
    //                         (4,4,4,1,'../asset/img/productionList/closthes.png'),
    //                         (5,5,4,1,'../asset/img/productionList/closthes.png'),
    //                         (6,6,4,1,'../asset/img/productionList/closthes.png'),
    //                         (7,7,4,1,'../asset/img/productionList/closthes.png'),
    //                         (8,8,4,1,'../asset/img/productionList/closthes.png'),
    //                         (9,9,4,1,'../asset/img/productionList/closthes.png');
    //     ";
    // if($conn->query($sql)===TRUE){
    //     echo 'Success Record';
    // }
    // else{
    //     echo 'Failed Record'.$sql.'<br>' .$conn->error;
    // } 
    // $sql="insert into products (id,name,price,amount,discount,description,category_id)
    //         values(1,'clothes',25.0,50,15,'Production Description',1 ),
    //         (2,'clothes',25.0,50,15,'Production Description',1 ),
    //         (3,'clothes',30.5,50,20,'Production Description',1 ),
    //         (4,'clothes',25.1,50,10,'Production Description',1 ),
    //         (5,'clothes',15.1,50,15,'Production Description',1 ),
    //         (6,'clothes',25.3,50,15,'Production Description',1 ),
    //         (7,'bags',25.8,50,15,'Production Description',2 ),
    //         (8,'bags',25.1,50,25,'Production Description',2),
    //         (9,'bags',25.6,50,15,'Production Description',2 )";
    //         if($conn->query($sql)===TRUE){
    //             echo 'Success Record';
    //         }
    //         else{
    //             echo 'Failed Record'.$sql.'<br>' .$conn->error;
    //         } 
    // $sql="insert into categories (id, name, icon, parent_id)
    // values (1,'Electronics','computer.png',1),
    //     (2,'Hand bags','bag.png',1),
    //     (3,'Wallet','wallet.png',1),
    //     (4,'Clothes','shirt.png',1)";
    //     if($conn->query($sql)===TRUE){
    //         echo 'Success Record';
    //     }
    //     else{
    //         echo 'Failed Record'.$sql.'<br>' .$conn->error;
    //     } 

    $sql="UPDATE `categories` SET `icon` = '../asset/img/navproduction/shirt.png' WHERE `categories`.`id` = 4;";
    if($conn->query($sql)===TRUE){
        echo 'Success Record';
    }else{
        echo 'Failed Record'.$sql.'<br>' .$conn->error;
    } 
    // $sql="insert into assets (id,product_id,sort,is_feature,resource_path)
    //                 values (10,10,4,0,'../asset/img/navproduction/computer.png'),
    //                         (11,11,7,0,'../asset/img/navproduction/bag.png'),
    //                         (12,12,4,0,'../asset/img/navproduction/wallet.png'),
    //                         (13,13,4,0,'../asset/img/navproduction/shirt.png');
                          
    //     ";
    //     if($conn->query($sql)===TRUE){
    //         echo 'Success Record';
    //     }
    //     else{
    //         echo 'Failed Record'.$sql.'<br>' .$conn->error;
    //     } 
?>