<?php
session_start();

// initializing variables
$first_name = "";
$last_name = "";
$email    = "";
$cellphone   = "";
$message   = "";
$errors = array(); 


// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'applications');

// REGISTER USER
if (isset($_POST['reg_user'])) {
    // receive all input values from the form
    $first_name = mysqli_real_escape_string($db, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($db, $_POST['last_name']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $cellphone  = mysqli_real_escape_string($db, $_POST['cellphone']);
    $message = mysqli_real_escape_string($db, $_POST['message']);


 // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($first_name)) { array_push($errors, "field is required"); }
  if (empty($last_name)) { array_push($errors, "field is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($cellphone )) { array_push($errors, "cellphone is required"); }
  if (empty($message)) { array_push($errors, "message is required"); }



  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM aplicants WHERE first_name='$first_name' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['first_name'] === $first_name) {
      array_push($errors, "name already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists"); 
    }
  }



// Finally, register user if there are no errors in the form
if (count($errors) == 0) {
    // $password = md5($password_1);//encrypt the password before saving in the database

    $query = "INSERT INTO aplicants (first_name,last_name, email,cellphone, message) 
              VALUES('$first_name ', '$last_name', '$email', '$cellphone', '$message')";
    mysqli_query($db, $query);
    $_SESSION['first_name'] = $first_name;
    $_SESSION['success'] = "You are now logged in";
    header('location: index.php');
}

}


?>