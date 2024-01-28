<?php
// Start the session
session_start();
$dbHost = 'localhost';
$dbName = 'hotelDB';
$dbUsername = 'admin';
$dbPassword = 'admin';

// Attempt to connect to the database
$conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

// Check if the connection was successful
$dbConnected = false;
if ($conn) {
    $dbConnected = true;
} else {
    die("Connection failed: " . mysqli_connect_error());
}
// Check if the session variable 'login_sess' is not set or is not equal to 1
if (!isset($_SESSION['login_sess']) || $_SESSION['login_sess'] !== '1') {
    header("Location: login.php");
    exit(); // Make sure to exit to prevent further script execution
}
$roomsQuery = "SELECT * FROM `rooms`";
$roomsResult = mysqli_query($conn, $roomsQuery);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Room</title>
    <link rel="stylesheet" href="styles/style.css?<?php echo time(); ?>">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
          crossorigin="anonymous">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    
<style>
    body{
  background-color: rgb(40, 40, 43); 
    
}

.container-bg{
    background-color:#343434;
}
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark ">
        <div class="container">
      <a class="navbar-brand" href="#">Smart Hotel</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse links" id="navbarSupportedContent">
        <ul class="navbar-nav">
         
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only"></span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="rooms.php">Rooms <span class="sr-only"></span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="bookings.php">My Bookings <span class="sr-only"></span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="logout.php">Logout <span class="sr-only"></span></a>
          </li>
       
        </ul>
      </div>
    </nav>



    <div class="container  text-light">
        <h1 class='mt-2'>Welcome <?php echo $_SESSION['fname']; ?> !</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5 container-bg">
                    <div class="card-header">
                        <h1 class="text-center">Room Booking</h1>
                    </div>
                    <div class="card-body p-5">
                        <form action="process_booking.php" method="POST">
                            <div class="mb-3">
                                <label for="room_id" class="form-label">Select Room:</label>
                                <select name="room_id" id="room_id" class="form-select" required>
                                    <?php while ($row = mysqli_fetch_assoc($roomsResult)) : ?>
                                        <option value="<?php echo $row['id']; ?>"><?php echo $row['room_name']; ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="check_in" class="form-label">Check-In Date:</label>
                                <input type="date" name="check_in" id="check_in" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="check_out" class="form-label">Check-Out Date:</label>
                                <input type="date" name="check_out" id="check_out" class="form-control" required>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Book Room</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include_once("footer.inc.php")?>
</body>
</html>
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Head content remains unchanged -->
</head>
<body>
    <!-- Navbar and other HTML content remains unchanged -->

    <div class="container text-light">
        <h1 class='mt-2'>Welcome <?php echo $_SESSION['fname']; ?> !</h1>
        <?php if ($dbConnected): ?>
            <!-- Display "Hello, World!" if the database connection was successful -->
            <div class="text-center">
                <h2>Hello, World!</h2>
            </div>
        <?php endif; ?>
        <!-- Rest of your HTML content remains unchanged -->
    </div>

    <!-- Include footer or other content -->
    <?php include_once("footer.inc.php")?>
</body>
</html>