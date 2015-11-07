<?php
class Product{

function checkSP($masp){
    $sql = "SELECT masp FROM sanpham WHERE masp ='$masp'";
    $query = mysql_query($sql);
    $num = mysql_num_rows($query);
    mysql_free_result($query);
    if($num >0)
        return true;
    else return false;
    
} 
}


?>