<?php

function sales_insert($ProductID, $Name, $Price, $Category){
    $sql = "INSERT INTO sales (
        ProductID,
        Name, 
        Price, 
        Category) VALUES (
            $ProductID, 
            '$Name', 
            $Price, 
            '$Category')";
    
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

function sales_remove($ProductID){
    $sql = "DELETE FROM sales WHERE ProductID=$ProductID";

    if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    } else {
    echo "Error deleting record: " . $conn->error;
    }
}

function sales_update($ProductID, $Name, $Price, $Category){
    $sql = "UPDATE sales SET 
     Name='$Name',
     Price=$Price,
     Category='$Category',
     WHERE ProductID=$ProductID";

    if ($conn->query($sql) === TRUE) {
      echo "Record updated successfully";
    } else {
      echo "Error updating record: " . $conn->error;
    }
}
