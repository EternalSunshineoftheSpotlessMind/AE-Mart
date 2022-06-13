<?php

function delivery_insert($DeliveryID, $OrderID_CH, $CustomerID, $OrderID_IN){
    $sql = "INSERT INTO delivery (
        DeliveryID,
        OrderID_CH, 
        CustomerID, 
        OrderID_IN ) VALUES (
            $DeliveryID, 
            '$OrderID_CH', 
            '$CustomerID', 
            $OrderID_IN)";
    
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

function delivery_remove($DeliveryID){
    $sql = "DELETE FROM delivery WHERE DeliveryID=$DeliveryID";

    if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    } else {
    echo "Error deleting record: " . $conn->error;
    }
}

function delivery_update($DeliveryID, $OrderID_CH, $CustomerID, $OrderID_IN){
    $sql = "UPDATE delivery SET 
     OrderID_CH='$OrderID_CH',
     CustomerID='$CustomerID',
     OrderID_IN=$OrderID_IN
     WHERE DeliveryID=$DeliveryID";

    if ($conn->query($sql) === TRUE) {
      echo "Record updated successfully";
    } else {
      echo "Error updating record: " . $conn->error;
    }
}
