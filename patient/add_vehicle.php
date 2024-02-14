<?php
// Include your database connection file
include("../connection.php");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $model = $_POST['model'];
    $license_plate = $_POST['license_plate'];

    // Insert data into the vehicle_info table
    $insertQuery = "INSERT INTO vehicle_info (model, license_plate) VALUES (?, ?)";
    $stmt = $database->prepare($insertQuery);

    // Bind parameters
    $stmt->bind_param("ss", $model, $license_plate);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Data successfully stored in the vehicle_info table.";
    } else {
        echo "Error storing data: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the database connection
$database->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<!-- Form asking for model and license_plate -->
<form action="" method="post">
    <label for="model">Model:</label>
    <input type="text" name="model" required>

    <label for="license_plate">License Plate:</label>
    <input type="text" name="license_plate" required>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

</body>
</html>
