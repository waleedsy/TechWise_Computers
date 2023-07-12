<?php 
$title = "SignUp";
include "./Components/Connection.php";
include_once "./Components/Header.php"; 


$mysqli = new mysqli($dbhost,$dbuser,$dbpass,$dbname);

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}


if (isset($_POST['signup'])) {
  $username = $_POST['username'];
  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $email = $_POST['email'];
  $tel = $_POST['tel'];
  $address = $_POST['address'];
  $password = password_hash($_POST['pass'], PASSWORD_BCRYPT);

  $sql = "INSERT INTO Users (Username, Password, FirstName, Surname, Address, Email, Tel) VALUES ('$username','$password', '$name', '$surname', '$address', '$email', '$tel')";

  if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

?>


<div class="container">
<form action="" method="POST" id = "signup">
  <h1 class="header-signup">Sign Up</h1>
  <p>Please fill in this form to create an account.</p>
  <hr>
  <label for="usernametxt"><b>Username</b></label>
  <input id="username" type="text" name="username" placeholder="Enter Name" required><br><br>
    <label for="nametxt"><b>First Name</b></label>
  <input id="name" type="text" name="name" placeholder="Enter Name" required><br><br>
  <label for="surnametxt"><b>Surname</b></label>
  <input id="surname" id = "surname" type="text" name="surname" placeholder="Enter Surname" required><br><br>
  <label for="emailtxt"><b>Email</b></label>
  <br>
  <input  type="email" placeholder="Enter Email" name="email" id="email" required></input>
  <br>
  <label for="teltxt"><b>Phone Number</b></label><br>
  <input id="tel" type="text" name="phone" placeholder= "Enter Phone Number" required><br>
  <label for="address"><b>Address</b></label><br>
  <textarea id="address"  name="address" placeholder="Enter Address" required><br>
    <label for="psw"><b>Password</b></label><br>
  <input id="pass" type="password" name="password" placeholder="Enter Password" required><br>
   
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

  <button id="button" type="submit" value="Signup">Sign up</button>
    <button type="reset" class="cancelbtn">Cancel</button>
    <br>
     <div class="signup-link">Already have an account<a href="login.php"> Click to Login</a></div>
  <a href=""></a><br><br>
  </form>
</div>


    <?php require_once "./Components/Footer.php"; ?>