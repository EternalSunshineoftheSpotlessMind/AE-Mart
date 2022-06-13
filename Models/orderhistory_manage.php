<?php

function orderhistory_insert($HistoryID, $FirstName, $MidlleInitial, $LastName, $OrderID, $CustomerID){
    $sql = "INSERT INTO orderhistory (
        HistoryID,
        FirstName, 
        MidlleInitial, 
        LastName, 
        OrderID, 
        CustomerID) VALUES (
            $HistoryID, 
            '$FirstName', 
            '$MidlleInitial', 
            '$LastName', 
            $OrderID, 
            $CustomerID)";
    
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

function orderhistory_remove($HistoryID){
    $sql = "DELETE FROM orderhistory WHERE HistoryID=$HistoryID";

    if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    } else {
    echo "Error deleting record: " . $conn->error;
    }
}

function orderhistory_update($HistoryID, $FirstName, $MidlleInitial, $LastName, $OrderID, $CustomerID){
    $sql = "UPDATE orderhistory SET 
     FirstName='$FirstName',
     MidlleInitial='$MidlleInitial',
     LastName='$LastName',
     OrderID=$OrderID,
     CustomerID='$CustomerID',
     WHERE HistoryID=$HistoryID";

    if ($conn->query($sql) === TRUE) {
      echo "Record updated successfully";
    } else {
      echo "Error updating record: " . $conn->error;
    }
}
