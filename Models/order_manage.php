<?php

function order_insert($OrderID, $OrderDate, $ShippingDate, $ArrivalDate, $Status, $CustoerID, $ProductID){
    $sql = "INSERT INTO orders (
        OrderID,
        OrderDate, 
        ShippingDate, 
        ArrivalDate, 
        CustoerID, 
        ProductID) VALUES (
            $OrderID, 
            '$OrderDate', 
            '$ShippingDate', 
            '$ArrivalDate', 
            '$Status', 
            $CustoerID, 
            $ProductID)";
    
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

function order_remove($OrderID){
    $sql = "DELETE FROM orders WHERE OrderID=$OrderID";

    if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    } else {
    echo "Error deleting record: " . $conn->error;
    }
}

function order_update($OrderID, $OrderDate, $ShippingDate, $ArrivalDate, $Status, $CustoerID, $ProductID){
    $sql = "UPDATE orders SET 
     OrderDate='$OrderDate',
     ShippingDate='$ShippingDate',
     ArrivalDate='$ArrivalDate',
     Status='$Status',
     CustoerID=$CustoerID,
     ProductID=$ProductID,
     WHERE OrderID=$OrderID";

    if ($conn->query($sql) === TRUE) {
      echo "Record updated successfully";
    } else {
      echo "Error updating record: " . $conn->error;
    }
}
