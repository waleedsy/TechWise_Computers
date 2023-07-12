<?php 
$title = "Login";
include "./Components/Connection.php";
include_once "./Components/Header.php";

$mysqli = new mysqli($dbhost,$dbuser,$dbpass,$dbname);

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}


if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT Password FROM Users WHERE Email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $password_hash = $row['password'];

        if (password_verify($password, $password_hash)) {
            $_SESSION['email'] = $email;
            setcookie("email", $email, time() + (86400 * 30)); // 86400 = 1 day
            header("Location: dashboard.php");
        } else {
            echo "Invalid email or password";
			header('Refresh: 3;url=login.php');
        }
    } else {
        echo "Invalid email or password";
		header('Refresh: 3;url=login.php');
    }
}

?>

<form action="" method="POST" style="border:1px solid #ccc" class="col-lg-12">
		<div class="container">

			<h1 class="header">Login</h1>
			<p> Please sign in using your email and password.</p>

			<hr>

			 <label for="emailtxt"><b>Email</b></label>
			<input id="text" type="email" name="email" placeholder="Enter Email" required><br><br>
			 <label for="psw"><b>Password</b></label><br>
			<input id="text" type="password"  placeholder="Enter Password" name="password" required><br><br>
			
			<button id="button" type="submit" value="Login">Submit</button>
			 <button type="reset" class="cancelbtn">Cancel</button>
			 <br>

			  <div class="signup-link">Not a member? <a href="signup.php">Signup now</a></div>
		</form>
	</div>

<?php 

require_once "./Components/Footer.php";

?>