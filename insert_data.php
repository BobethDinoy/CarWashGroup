<?php
include("connection.php");

// Insert Carwash Owner
$email = $_POST['newemail'];
$newpassword = $_POST['newpassword'];
$carwashOwnerType = 0;

$insertCarwashOwner = "INSERT INTO `account` (`username`, `password`, `account_type`) VALUES ('$email', '$newpassword', '$carwashOwnerType')";

if ($conn->query($insertCarwashOwner) === TRUE) {
    echo "Carwash Owner inserted successfully.";
} else {
    echo "Error inserting Carwash Owner: " . $conn->error;
}

// Insert Vehicle Owner
$email = $_POST['newemail'];
$newpassword = $_POST['newpassword'];
$vehicleOwnerType = 1;

$insertVehicleOwner = "INSERT INTO `account` (`username`, `password`, `account_type`) VALUES ('$email', '$newpassword', '$vehicleOwnerType')";

if ($conn->query($insertVehicleOwner) === TRUE) {
    echo "Vehicle Owner inserted successfully.";
} else {
    echo "Error inserting Vehicle Owner: " . $conn->error;
}

$conn->close();
?>
