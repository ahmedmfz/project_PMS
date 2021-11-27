<?php

//check if value in database or not
function db_real_escape($value){
    global $connection;
    return mysqli_real_escape_string($connection,$value);
}

//check if query is true or not
function db_affected_rows(){
    global $connection;
    if(mysqli_affected_rows($connection) >= 0){
        return true;
    }else{
        die("database error : ". mysqli_error($connection));
    }
}

// insert into database 
function InsertInTable($table,&$fields){
    global $connection;

    $col = "insert into $table (`".implode("` , `",array_keys($fields))."`)";
    $val = " values('";		

    foreach($fields as $key => $value) { 
        $fields[$key] =  db_real_escape($value);
    }

    $val .= implode("' , '",array_values($fields))."');";		
	
    $fields = array();
    $query = $col . $val;
    $result = mysqli_query($connection,$query);
    return db_affected_rows();
}


// Modify database data
function UpdateTable($table,&$fields,$condition) {
    global $connection;
    $sql = "UPDATE $table SET ";
    foreach($fields as $key => $value) { 
        $fields[$key] = " `$key` = '".db_real_escape($value)."' ";
    }
    $sql .= implode(" , ",array_values($fields))." WHERE ".$condition.";";	
    $fields = array();
    $result = mysqli_query($connection,$sql);
    return db_affected_rows();
}

// delete items from database
function db_delete($table,$condition){
    global $connection;
    $query ="DELETE FROM `$table` WHERE $condition";
    $result =mysqli_query($connection,$query);
    return db_affected_rows();
}

//retreve all data  in same time
function db_get_all($table,$order){
    global $connection;
    $query ="SELECT * FROM `$table` ORDER BY $order DESC";
    $result = mysqli_query($connection,$query);
    if(mysqli_num_rows($result) > 0){
        return mysqli_fetch_all($result,MYSQLI_ASSOC);
    }else{
        return [];
    }
}

//retreve data as row
function db_get_row($table, $condition){
    global $connection;
    $query ="SELECT * FROM `$table` WHERE $condition";
    $result = mysqli_query($connection,$query);
    if(mysqli_num_rows($result)>0){
        return mysqli_fetch_assoc($result);
    }else{
        return [];
    }
}

function db_join_all($F_table,$S_table,$F_column,$S_column,$order){
    global $connection;
    $query ="SELECT * FROM `$F_table` INNER JOIN $S_table ON $F_column = $S_column ORDER BY $order DESC";
    $result = mysqli_query($connection,$query);
    if(mysqli_num_rows($result)>0){
        return mysqli_fetch_all($result,MYSQLI_ASSOC);
    }else{
        return [];
    }
}

function db_join_row($F_table,$S_table,$F_column,$S_column,$condition){
    global $connection;
    $query ="SELECT * FROM `$F_table` INNER JOIN $S_table ON $F_column = $S_column WHERE $condition";
    $result = mysqli_query($connection,$query);
    if(mysqli_num_rows($result)>0){
        return mysqli_fetch_assoc($result);
    }else{
        return [];
    }
}

function count_items($item,$elis,$table){
    global $connection;
    $query = "SELECT COUNT('$item') AS $elis FROM `$table`";
    $result = mysqli_query($connection,$query);
    if(mysqli_num_rows($result)>0){
        return mysqli_fetch_assoc($result);
    }else{
        return [];
    }
}
