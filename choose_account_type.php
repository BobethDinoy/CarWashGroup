<?php
// This file will handle the logic for choosing the account type
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['account_type'])) {
    $selectedAccountType = $_POST['account_type'];

    // Here, you can handle the selected account type as needed.
    // For example, you might store it in the session or redirect to different signup pages based on the selection.
    
    // For demonstration purposes, we'll just set it in the session.
    $_SESSION['selected_account_type'] = $selectedAccountType;

    // Redirect to the actual signup page based on the account type
    if ($selectedAccountType === 'carwash_owner') {
        header('Location: signup.php');
        exit();
    } elseif ($selectedAccountType === 'vehicle_owner') {
        header('Location: signup.php');
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choose Account Type</title>
    <link rel="stylesheet" href="css/animations.css">  
    <link rel="stylesheet" href="css/main.css">  
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <center>
        <div class="container">
            <table border="0" style="margin: 0;padding: 0;width: 60%;">
                <tr>
                    <td>
                        <p class="header-text">Choose Your Account Type:</p>
                    </td>
                </tr>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                    <tr>
                        <td>
                            <label for="carwash_owner">
                                <input type="radio" name="account_type" value="carwash_owner" id="carwash_owner" required>
                                Carwash Owner
                            </label>
                        </td>
                    </tr>


                    <tr>
                        <td>
                            <label for="vehicle_owner">
                                <input type="radio" name="account_type" value="vehicle_owner" id="vehicle_owner" required>
                                Vehicle Owner
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" value="Next" class="next-btn btn-primary btn">
                        </td>
                    </tr>
                </form>
            </table>
        </div>
    </center>
</body>
</html>
