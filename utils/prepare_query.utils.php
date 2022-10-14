<?php 

function prepare_query($sql, $find_array, $conn) {
    $stmt =  $conn->prepare($sql);
    
    replace_values($stmt, $find_array);
    $stmt->execute();

    return $stmt;
}

?>