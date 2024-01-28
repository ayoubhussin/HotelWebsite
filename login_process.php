<?php 
require_once("settings.php"); 

session_start(); // Start the session

if (isset($_SESSION['login_sess'])) {
    header("Location: book.php"); // Redirect to the dashboard if the user is already logged in
    exit(); // Make sure to exit to prevent further script execution
}

if (isset($_POST['user_login'])) {

    // Get user input from the form
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Perform user authentication
    $query = "SELECT * FROM user WHERE email='$email'";
    $result = mysqli_query($conn, $query);
    
    if ($result) {
        if (mysqli_num_rows($result) == 1) {
            $user_data = mysqli_fetch_assoc($result);

            // Verify the password
            if ($password==$user_data['password']) {
                // Password is correct, set session and redirect to the dashboard
                $_SESSION['login_sess'] = "1";
                $_SESSION['login_email']=$user_data['email'];
                $_SESSION['fname']=$user_data['firstName'];
                $_SESSION['lname']=$user_data['lastName'];
                $_SESSION['user_id']=$user_data['id'];
                header("Location: book.php"); // Redirect to the dashboard
                exit();
            } else {
                // Password is incorrect, set an error message
                $error = "Invalid password. Please try again.";
            }
        } else {
            // User does not exist, set an error message
            $error = "User not found. Please check your email or register.";
        }
    } else {
        // Database query error
        $error = "Database query error: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}

// If there are errors, redirect back to the login page with error messages
if (isset($error)) {
    $_SESSION['login_error'] = $error;
    $_SESSION['login_email']=$email;
    header("Location: login.php");
    exit();
}
?>
