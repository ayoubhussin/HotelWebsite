<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>
<body>
<?php include_once("header.inc.php") ?>
<?php
// Start the session
session_start();

if (isset($_SESSION['login_sess'])) {
    header("Location: book.php"); 
    exit(); 
}

// Get error message and refilled email from session, if available
$error_message = isset($_SESSION['login_error']) ? $_SESSION['login_error'] : "";
$refilled_email = isset($_SESSION['login_email']) ? $_SESSION['login_email'] : "";

// Clear the session variables to prevent displaying the same error multiple times
unset($_SESSION['login_error']);
unset($_SESSION['login_email']);
?>

<div class="container " style="margin-top:130px; margin-bottom:130px" >
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
    <h4 class="mb-4 mt-3 text-center text-light">User Login</h4>
    <form action="login_process.php" method="POST" class="form-group">
        <label class="form-label text-light">Email</label>
        <div class="input-group">
            <div class="input-group-prepend"></div>
            <input type="email" class="form-control" placeholder="" required="" name="email" value="<?php echo $refilled_email; ?>">
        </div>

        <!-- Password -->
        <label class="form-label text-light">Password *</label>
        <div class="input-group">
            <div class="input-group-prepend"></div>
            <input type="password" class="form-control" placeholder="" required="" name="password">
        </div>

        <?php if (!empty($error_message)): ?>
            <div class="alert alert-danger mt-3"><?php echo $error_message; ?></div>
        <?php endif; ?>

        <div class="col-md-12 d-flex justify-content-center">
            <button type="submit" name="user_login" style="width: 100%; height:55%; margin:25px; font-weight:700" class="btn btn-danger">Login</button>
        </div>
    </form>

    

    <div class="col-md-12 d-flex justify-content-center">
        <p class="text-secondary m-2">Do not have an account?</p>
        <a href="register.php" class="text-secondary">
            <button class="btn btn-outline-primary m-2">Register</button>
        </a>
    </div>
    </div>

    <div class="col-2"></div>
    </div>
</div>

</body>
</html>
