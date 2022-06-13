<?php

function customer_insert($CustomerID, $FirstName, $MidlleInitial, $LastName, $Address1, $Address2, $City, $State, $PostalCode, $Country, $PhoneNumber){
    $sql = "INSERT INTO customers (
        CustomerID,
        FirstName, 
        MidlleInitial, 
        LastName, 
        Address1, 
        Address2, 
        City, 
        State, 
        PostalCode, 
        Country, 
        PhoneNumber) VALUES (
            $CustomerID, 
            '$FirstName', 
            '$MidlleInitial', 
            '$LastName', 
            '$Address1', 
            '$Address2', 
            '$City', 
            '$State', 
            $PostalCode, 
            '$Country', 
            $PhoneNumber)";
    
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

function customer_remove($CustomerID){
    $sql = "DELETE FROM customers WHERE CustomerID=$CustomerID";

    if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    } else {
    echo "Error deleting record: " . $conn->error;
    }
}

function customer_update($CustomerID, $FirstName, $MidlleInitial, $LastName, $Address1, $Address2, $City, $State, $PostalCode, $Country, $PhoneNumber){
    $sql = "UPDATE customers SET 
     FirstName='$FirstName',
     MidlleInitial='$MidlleInitial',
     LastName='$LastName',
     Address1='$Address1',
     Address2='$Address2',
     City='$City',
     State='$State',
     PostalCode=$PostalCode,
     Country='$Country',
     PhoneNumber=$PhoneNumber,
     WHERE CustomerID=$CustomerID";

    if ($conn->query($sql) === TRUE) {
      echo "Record updated successfully";
    } else {
      echo "Error updating record: " . $conn->error;
    }
}
