<?php
require_once("settings.php");
session_start();

if (!isset($_SESSION['login_sess'])) {
    header("Location: login.php");
    exit();
}

// Fetch user's bookings from the database
$userId = $_SESSION['user_id'];
$query = "SELECT bookings.id, rooms.room_name, bookings.check_in, bookings.check_out, bookings.status
          FROM bookings
          INNER JOIN rooms ON bookings.room_id = rooms.id
          WHERE bookings.user_id = '$userId'";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Database query failed: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Bookings</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <style>

       

        h1 {
            color: white;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #007bff;
            color: white;
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

    <div class="container  mt-5">
        <h1>My Bookings</h1>
        <table class='text-light'>
            <thead>
                <tr>
                    <th>Booking ID</th>
                    <th>Room Name</th>
                    <th>Check-In Date</th>
                    <th>Check-Out Date</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>{$row['id']}</td>";
                    echo "<td>{$row['room_name']}</td>";
                    echo "<td>{$row['check_in']}</td>";
                    echo "<td>{$row['check_out']}</td>";
                    echo "<td>{$row['status']}</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
<?php include_once("footer.inc.php")?>

<?php

// Close the database connection
mysqli_close($conn);
?>


