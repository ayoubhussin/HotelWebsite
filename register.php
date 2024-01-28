<!DOCTYPE html>
<?php
require_once("settings.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
          crossorigin="anonymous">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="styles/style.css?<?php echo time(); ?>">
    <title>Register</title>
</head>
<body>
<?php
include_once("header.inc.php");
if (isset($_POST['signup'])) {
    extract($_POST);
    $error = array();

    //  // Check if the email already exists in the database
    //  $stmt = mysqli_prepare($dbc, "SELECT * FROM user WHERE email = ?");
    //  mysqli_stmt_bind_param($stmt, "s", $email);
    //  mysqli_stmt_execute($stmt);
     
    //  $result = mysqli_stmt_get_result($stmt);
     
    //  if (!$result) {
    //      // Handle the database query error
    //      $error['db'] = 'Database query error: ' . mysqli_error($dbc);
    //  } else {
    //      if (mysqli_num_rows($result) > 0) {
    //          $error['email'] = 'Email already exists.';
    //      }
    //  }

    if (strlen($fname) < 3) { // Minimum
        $error['fname'] = 'Please enter First Name using 3 characters at least.';
    }

    if (strlen($fname) > 20) { // Max
        $error['fname'] = 'First Name: Maximum length of 20 characters is not allowed.';
    }

    if (!preg_match("/^[A-Za-z _]*[A-Za-z ]+[A-Za-z _]*$/", $fname)) {
        $error['fname'] = 'Invalid Entry First Name. Please enter letters without any Digit or special symbols like (1,2,3#,$,%,&,*,!,~,`,^,-,)';
    }

    if (strlen($lname) < 3) { // Minimum
        $error['lname'] = 'Please enter Last Name using 3 characters at least.';
    }

    if (strlen($lname) > 20) { // Max
        $error['lname'] = 'Last Name: Maximum length of 20 characters is not allowed.';
    }

    if (!preg_match("/^[A-Za-z _]*[A-Za-z ]+[A-Za-z _]*$/", $lname)) {
        $error['lname'] = 'Invalid Entry Last Name. Please enter letters without any Digit or special symbols like (1,2,3#,$,%,&,*,!,~,`,^,-,)';
    }

    if (strlen($email) > 50) { // Max
        $error['email'] = 'Email: Maximum length of 50 characters is not allowed.';
    }

    if (strlen($password) < 8) { // Max
        $error['password'] = 'Password: Please enter 8 characters at least.';
    }

    if (strlen($confirmPassword) < 8) {
        $error['confirmPassword'] = 'Confirm Password: Please enter 8 characters at least.';
    }

    if ($password !== $confirmPassword) {
        $error['confirmPassword'] = 'Passwords do not match.';
    }

    if (!empty($phone) && !preg_match("/^[0-9]{10}$/", $phone)) {
        $error['phone'] = 'Invalid Phone Number. Please enter a 10-digit phone number without spaces or special characters.';
    }

   

    if (empty($error)) {
        $result = mysqli_query($conn, "INSERT INTO user (firstName, lastName, email, password, phone) VALUES ('$fname', '$lname', '$email', '$password', '$phone')");

        if ($result) {
            $userId = mysqli_insert_id($conn);

            $done = 2;
        } else {
            $error['db'] = 'Failed: Something went wrong.';
        }
    }
}
?>

<?php
if (isset($error['db'])) {
    // Handle the database query error here
    echo '<p class="errmsg text-light">&#x26A0;' . $error['db'] . ' </p>';
}
?>

<?php if(isset($done)) 
      {  
         $_SESSION["login_sess"]="1"; 
         $_SESSION['login_email']=$email;
                $_SESSION['fname']=$fname;
                $_SESSION['lname']=$lname;
                $_SESSION['user_id']=$userId;
        header("location:book.php");
       } ?>

<div class="container text-light mt-5">
    <form action="register.php" method="POST">
        <div class="row g-3">
        <h4 class="mb-4 text-center mt-4text-light" >User Registeration</h4><hr>

            <!-- First Name -->
            <div class="col-md-6">
                <label class="form-label">First Name</label>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="" required="" name="fname"
                           value="<?php if (isset($error) && isset($error['fname'])) {
                               echo $_POST['fname'];
                           } ?>">
                </div>
                <?php
                if (isset($error['fname'])) {
                    echo '<span class="errmsg text-danger">' . $error['fname'] . '</span>';
                }
                ?>
            </div>

            <!-- Last Name -->
            <div class="col-md-6">
                <label class="form-label">Last Name *</label>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="" required="" name="lname"
                           value="<?php if (isset($error) && isset($error['lname'])) {
                               echo $_POST['lname'];
                           } ?>">
                </div>
                <?php
                if (isset($error['lname'])) {
                    echo '<span class="errmsg text-danger">' . $error['lname'] . '</span>';
                }
                ?>
            </div>

            <!-- Phone -->
            <div class="col-md-6">
                <label class="form-label">Phone</label>
                <div class="input-group">
                    <input type="number" class="form-control" placeholder="" required="" name="phone"
                           value="<?php if (isset($error) && isset($error['phone'])) {
                               echo $_POST['phone'];
                           } ?>">
                </div>
                <?php
                if (isset($error['phone'])) {
                    echo '<span class="errmsg text-danger">' . $error['phone'] . '</span>';
                }
                ?>
            </div>

            <!-- Email -->
            <div class="col-md-6">
                <label class="form-label">Email *</label>
                <div class="input-group">
                    <input type="email" class="form-control" placeholder="" required="" name="email"
                           value="<?php if (isset($error) && isset($error['email'])) {
                               echo $_POST['email'];
                           } ?>">
                </div>
                <?php
                if (isset($error['email'])) {
                    echo '<span class="errmsg text-danger">' . $error['email'] . '</span>';
                }
                ?>
            </div>

            <!-- Password -->
            <div class="col-md-6">
                <label class="form-label">Password *</label>
                <div class="input-group">
                    <input type="password" class="form-control" placeholder="" required="" name="password"
                           value="<?php if (isset($error) && isset($error['password'])) {
                               echo $_POST['password'];
                           } ?>">
                </div>
                <?php
                if (isset($error['password'])) {
                    echo '<span class="errmsg text-danger">' . $error['password'] . '</span>';
                }
                ?>
            </div>

            <!-- Confirm Password -->
            <div class="col-md-6">
                <label class="form-label">Confirm Password *</label>
                <div class="input-group">
                    <input type="password" class="form-control" placeholder="" required="" name="confirmPassword"
                           value="<?php if (isset($error) && isset($error['confirmPassword'])) {
                               echo $_POST['confirmPassword'];
                           } ?>">
                </div>
                <?php
                if (isset($error['confirmPassword'])) {
                    echo '<span class="errmsg text-danger">' . $error['confirmPassword'] . '</span>';
                }
                ?>
            </div>

            <!-- Submit -->
            <div class="col-md-6 d-flex justify-content-center">
                <button type="submit" name="signup"
                        style="width: 100%; height:55%; margin:25px; font-weight:700"
                        class="btn btn-danger">Register
                </button>
            </div>
            <div class="col-md-6 mt-5 d-flex justify-content-center">
        <p class="text-secondary m-3">Already have an account? </p>
        <a href="login.php" class="text-secondary btn btn-primary m-2 text-light">
            
                Sign In
           
        </a>
    </div>
        </div>
    </form>

    
</div>
</body>
</html>

 
