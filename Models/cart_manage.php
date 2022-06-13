<?php

function cart_insert($CustomerID, $ProductID){
    $sql = "INSERT INTO cart (CustomerID, ProductID) VALUES ('$CustomerID', '$ProductID')";
    
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

function cart_remove($CustomerID){
    $sql = "DELETE FROM cart WHERE CustomerID=$CustomerID";

    if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    } else {
    echo "Error deleting record: " . $conn->error;
    }
}

function cart_update($CustomerID, $ProductID){
    $sql = "UPDATE cart SET ProductID='$ProductID' WHERE CustomerID=$CustomerID";

    if ($conn->query($sql) === TRUE) {
      echo "Record updated successfully";
    } else {
      echo "Error updating record: " . $conn->error;
    }
}
