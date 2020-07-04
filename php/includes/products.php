
<?php
echo "<div class=\"listproduct\">";
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
            <button id=\"btnbook\"><img style=\"width:24px ;padding: 0px 5px;margin:0px \" src=\"../../asset/img/buttons/btnbook.png\">Cart</button>
        </div>
        ";
    }
}else{echo "0 result";}
echo "</div>"
?>   
    