<?php
require_once("settings.php");


if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
$error_message = ""; // Initialize error message variable


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userId = $_SESSION['user_id'];
    $roomId = $_POST['room_id'];
    $checkIn = $_POST['check_in'];
    $checkOut = $_POST['check_out'];

    // Check room availability
    $availabilityQuery = "SELECT * FROM `bookings` WHERE `room_id`='$roomId' AND (`check_in` BETWEEN '$checkIn' AND '$checkOut' OR `check_out` BETWEEN '$checkIn' AND '$checkOut')";

    $result = mysqli_query($conn, $availabilityQuery);

    if (mysqli_num_rows($result) === 0) {
        // Room is available, insert the booking with 'Pending' status
        $status = "Booked";

        $insertQuery = "INSERT INTO `bookings` (`user_id`, `room_id`, `check_in`, `check_out`, `status`) 
                        VALUES ('$userId', '$roomId', '$checkIn', '$checkOut', '$status')";

        if (mysqli_query($conn, $insertQuery)) {
            // Output the HTML for the booking confirmation page
            echo '<!DOCTYPE html>';
            echo '<html lang="en">';
            echo '<head>';
            echo '<meta charset="UTF-8">';
            echo '<meta http-equiv="X-UA-Compatible" content="IE=edge">';
            echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
            echo '  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous">
      ';
            echo '<title>Booking Confirmation</title>';
            echo '<style>';
            echo 'body {';
            echo '    font-family: Arial, sans-serif;';
            echo '     background-color: rgb(40, 40, 43);'            ;
            echo '    margin: 0;';
            echo '    padding: 0;';
            echo '}';
            echo '.container {';
            echo '    max-width: 800px;';
            echo '    margin: 0 auto;';
            echo '     background-color:#343434;';
            echo '    padding: 20px;';
            echo '    border-radius: 5px;';
            echo '    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);';
            echo '    text-align: center;';
            echo ' margin-top:200px;';
            echo '}';
            echo 'h1 {';
            echo '    color: white';
            echo '}';
            echo 'p {';
        
            echo '    margin-bottom: 20px;';
            echo '}';
            echo '.btn {';
            echo '    background-color: #007bff;';
            echo '    color: #fff;';
            echo '    padding: 10px 20px;';
            echo '    text-decoration: none;';
            echo '    border-radius: 5px;';
            echo '    transition: background-color 0.3s;';
            echo '}';
            echo '.btn:hover {';
            echo '    background-color: #0056b3;';
            echo '}';
            echo '</style>';
            echo '</head>';
            
            echo '<body>';
            echo '    <div class="container text-light">';
            echo '        <h1>Booking Confirmation</h1>';
            echo '        <p>Your room has been successfully booked!</p>';
            echo '        <p>Check-In Date: ' . $checkIn . '</p>';
            echo '        <p>Check-Out Date: ' . $checkOut . '</p>';
            echo '        <p>Thank you for choosing our hotel.</p>';
            echo '        <a href="index.php" class="btn">Back to Home</a>';
            echo '    </div>';
            echo '</body>';
            echo '</html>';
            
            exit();
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo '<!DOCTYPE html>';
        echo '<html lang="en">';
        echo '<head>';
        echo '<meta charset="UTF-8">';
        echo '<meta http-equiv="X-UA-Compatible" content="IE=edge">';
        echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
        echo '  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous">
  ';
        echo '<title>Room Reservation Error</title>';
        echo '<style>';
        echo 'body {';
        echo '    font-family: Arial, sans-serif;';
        echo '     background-color: rgb(40, 40, 43);'            ;
        echo '    margin: 0;';
        echo '    padding: 0;';
        echo '}';
        echo '.container {';
        echo '    max-width: 800px;';
        echo '    margin: 0 auto;';
        echo '     background-color:#343434;';
        echo '    padding: 20px;';
        echo '    border-radius: 5px;';
        echo '    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);';
        echo '    text-align: center;';
        echo ' margin-top:200px;';
        echo '}';
        echo 'h1 {';
        echo '    color: white';
        echo '}';
        echo 'p {';
        
        echo '    margin-bottom: 20px;';
        echo '}';
        echo '.btn {';
        echo '    background-color: #007bff;';
        echo '    color: #fff;';
        echo '    padding: 10px 20px;';
        echo '    text-decoration: none;';
        echo '    border-radius: 5px;';
        echo '    transition: background-color 0.3s;';
        echo '}';
        echo '.btn:hover {';
        echo '    background-color: #0056b3;';
        echo '}';
        echo '</style>';
        
        echo '<body>';
        echo '    <div class="container text-light">';
        echo '        <h1>Room Reservation Error</h1>';
        echo '        <p>The selected room is not available for the specified dates.</p>';
        echo '        <p>Please choose different dates or another room.</p>';
        echo '        <a href="book.php" class="btn">Back to Bokking Page</a>';
        echo '    </div>';
        echo '</body>';
        echo '</html>';
    }
}
?>
