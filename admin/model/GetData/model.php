<?php

/**
 * Lưu dữ liệu vào CSDL
 * $data là mảng chứa dữ liệu.
 */
class GetData
{

//Insert dữ liệu
function save($table, $data = array()) {
    //xử lý dữ liệu $data
    $values = array();
    foreach ($data as $key => $value) {
        $value = escape($value);
        $values[] = "`$key`='$value'";
    }

    //insert
  
     $sql = "INSERT INTO `$table` SET " . implode(',', $values);
     mysql_query($sql) or die(mysql_error());
}

function update($table,$colum,$value,$colid,$id)
{     
      mysql_query("UPDATE `$table` SET `$colum` = '$value' WHERE `$colid`= '$id'");
}
/**
 * Trả về bản ghi có cột $colum là $value
 */
function get_a_record($table, $colum, $value , $select = '*') {
    //truy vấn
    $sql = "SELECT $select FROM `$table` WHERE $colum='$value'";
    $query = mysql_query($sql) or die(mysql_error());

    //dữ liệu trả về
    $data = NULL;
    if (mysql_num_rows($query) > 0) {
        $data = mysql_fetch_assoc($query);
        mysql_free_result($query);
    }
     return $data;
  
}
/* Lấy tất cả bagnr ghi trong bảng */
function get_all($table,$select = '*'){
    $sql = "SELECT $select FROM $table";
    $query = mysql_query($sql) or die(mysql_error());
    
    $data = array();
    if(mysql_num_rows($query) >0){
        while($row = mysql_fetch_assoc($query))
            $data[]= $row;
        return $data;
    }
    else return null;
}
function get_from_to($table,$from,$to,$colum,$value, $select ='*'){
    if($colum && $value)
    $sql = "SELECT $select FROM `$table`  WHERE $colum = '$value' LIMIT $from,$to " ;
    else
    $sql = "SELECT $select FROM `$table` LIMIT $from,$to " ;
    $query = mysql_query($sql) or die(mysql_error());
    
    $data = array();
    if(mysql_num_rows($query) >0){
        while($row = mysql_fetch_assoc($query))
            $data[]= $row;
        return $data;
    }
    else return null;
    }
    
function get_number_recored($table)
{   
    
    $sql = "SELECT COUNT(*) as total FROM $table";
    $query = mysql_query($sql) or die(mysql_error());

    //dữ liệu trả về
    $row = mysql_fetch_assoc($query);
    mysql_free_result($query);
    return $row['total'];
}

function get_all_record($table,$colum,$value,$select ='*'){

    $sql = "SELECT $select FROM `$table` WHERE $colum='$value'";
    $query = mysql_query($sql) or die(mysql_error());
    $data = array();
    if(mysql_num_rows($query) >0){
        while($row = mysql_fetch_assoc($query))
            $data[]= $row;
        mysql_free_result($query);
        return $data;

    }

    else return null;
    
}
function delete($table,$colum,$value){
    $sql= "DELETE FROM `$table` WHERE $colum='$value'";
    $query = mysql_query($sql) or die(mysql_error());

}


function get_a_record_x($table, $colum, $value ,$colum1,$value1,$colum2,$value2, $select = '*') {
    //truy vấn
    $sql = "SELECT $select FROM `$table` WHERE $colum='$value' AND $colum1='$value1'AND $colum2='$value2'";
    $query = mysql_query($sql) or die(mysql_error());

    //dữ liệu trả về
    $data = NULL;
    if (mysql_num_rows($query) > 0) {
        $data = mysql_fetch_assoc($query);
        mysql_free_result($query);
    }
     return $data;
  
}
}