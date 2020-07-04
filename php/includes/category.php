
<?php
    echo "<div class=\"categories\">";
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
    echo "</div>"
?>
       