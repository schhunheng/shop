<?php
    $servername="sql12.freesqldatabase.com";
    $dbname="sql12352045";
    $password="B6LiMuqEjl";
    $username="sql12352045";

    $conn=new mysqli($servername,$username,$password,$dbname);

    if($conn->connect_error){
        die ("Connection Failed: ". $conn-connect_error);
    }
    else echo 'Connected!';
    
    // $conn->close();
?>