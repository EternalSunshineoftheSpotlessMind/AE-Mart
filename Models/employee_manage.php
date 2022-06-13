<?php

function employee_insert($EmployeeID, $FirstName, $MidlleInitial, $LastName){
    $sql = "INSERT INTO employees (
        EmployeeID,
        FirstName, 
        MidlleInitial, 
        LastName) VALUES (
            $CustomerID, 
            '$FirstName', 
            '$MidlleInitial', 
            '$LastName')";
    
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

function employee_remove($EmployeeID){
    $sql = "DELETE FROM employees WHERE CustomerID=$EmployeeID";

    if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    } else {
    echo "Error deleting record: " . $conn->error;
    }
}

function employee_update($EmployeeID, $FirstName, $MidlleInitial, $LastName){
    $sql = "UPDATE employees SET 
     FirstName='$FirstName',
     MidlleInitial='$MidlleInitial',
     LastName='$LastName'
     WHERE EmployeeID=$EmployeeID";

    if ($conn->query($sql) === TRUE) {
      echo "Record updated successfully";
    } else {
      echo "Error updating record: " . $conn->error;
    }
}
