<?php
$pwd_error = NULL;
$username_exists = NULL;
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    
    include '_dbconnect.php';
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    $exists_query = "SELECT  * from `demo-registration`.`credentials` where username = '$username'";
    $result = mysqli_query($conn, $exists_query);
    $num_row = mysqli_num_rows($result);

    if($num_row > 0){
        $$username_exists = true;
    }else{
        if($password == $cpassword){
			$hashcode = password_hash($password, PASSWORD_DEFAULT);
            $sql =  "INSERT INTO `demo-registration`.`credentials` (`id`, `username`, `password`, `date`) VALUES (NULL, '$username', '$hashcode', current_timestamp())";
            $result = mysqli_query($conn, $sql);
            header('welcome.php');
        }else{
            $pwd_error = true;
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HOME</title>
	<link rel="stylesheet" href="credentials.css">
</head>

<body>
	<div class="main">
		<div class="navbar">
			<div class="icon">
				<h2 class="logo">Jeopardy</h2>
			</div>

			<div class="menu">
				<ul style="list-style: none;">
					<li><a  href="welcome.php">Home</a></li>
					<li><a  href="jeopardy_board.php">Game</a></li>
				</ul>	
			</div>
		</div>
		<div class="content">
			<h1> Welcome <br><span> To The </span> <br>Game Of <br></h1>
			<div class="signup-form">
				<h2>Signup Here</h2>
				<form action="signup.php" method="POST">
                <label for="username"></label>
                <input type="text" name="username" placeholder="Enter username here" id="username" required maxlength="16">
                <p class="form-element">Username<br>(Enter any 16 characters)</p>
				<label for="password"></label>
				<input type="password" placeholder="Enter Password Here" name="password" id="password" required  maxlength="16">
                <p class="form-element">Password<br>(Enter any 16 characters)</p>
				<label for="cpassword"></label>
                <input type="password" placeholder="Confirm Password Here" name="cpassword" id="cpassword" required  maxlength="16">
                <p class="form-element">Confirm Password</p>
				<input type="submit" class="btnn" value="Signup">

				<?php
					if($pwd_error){
						echo "<p class='errormessage'> Passwords don't match </p>";
					}else if($username_exists){
						echo "<p class='errormessage'> Username Exists. Please try again</p>";
					}
				?>
                </form>
				<p class="link">Already have an account?<br>
				<a href="welcome.php">Login here</a></p>
			</div>
	</div>

	<div class="cookies-card">
		<p class="title">cookie content</p>
		<p class="info">By using this website, you automatically accept that we use cookies.<a href="#">Dismiss</a></p>
		
	</div>
</body>
</html>