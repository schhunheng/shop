<?php
    require "connectionDB.php";
    $search=$_POST['search'];
    $sql="select * from products where name LIKE '%{$search}%' ";
    if(isset($_POST['button'])){
        
        $result=$conn->query($sql);
        if($result->num_rows>0){
            // echo $resultnavproduct->num_rows."<br>";
            while($row=$result->fetch_assoc()){
                echo "
                    <table>
                        <tr>
                            <td>$row[id]</td>
                            <td>$row[name]</td>
                            <td>$row[price]</td>
                            <td>$row[amount]</td>
                            <td>$row[description]</td>
                        </tr>
                    </table>
                    ";
            }
        }
        else{echo "0 result";}
        // if($conn->query($sql)===TRUE){
           
        // }else{
        //     echo 'Failed run query <br>'.$sql.'<br>' .$conn->error;
        // } 
    }
    
?>