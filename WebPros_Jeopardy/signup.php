<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    
    include '_dbconnect.php';
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    $exists_query = "SELECT  * from `demo-registration`.`credentials` where username = '$username'";
    $result = mysqli_query($conn, $exists_query);
    $num_row = mysqli_num_rows($result);

    if($num_row > 0){
        $showError = "Username exists. Please try again!";
    }else{
        if($password == $cpassword){
            $sql =  "INSERT INTO `demo-registration`.`credentials` (`id`, `username`, `password`, `date`) VALUES (NULL, '$username', '$password', current_timestamp())";
            $result = mysqli_query($conn, $sql);
            header('welcome.php');
        }else{
            echo "Passwords do not match";
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
			<h1> Welcome <br><span> To The </span> <br>Game Of <br><span>Jeopardy!!</span></h1>
			<p class="par"> Jeopardy is the game of answer-and-question form.  </p>
			<div class="form">
				<h2>Signup Here</h2>
				<form action="signup.php" method="POST">
                <label for="username"></label>
                <input type="text" name="username" placeholder="Enter username here" id="username">
                <label for="password"></label>
				<input type="password" placeholder="Enter Password Here" name="password" id="password">
                <label for="cpassword"></label>
                <input type="password" placeholder="Confirm Password Here" name="cpassword" id="cpassword">
                <input type="submit" class="btnn" value="signup">
                </form>
				<p class="link">Already have an account?<br>
				<a href="welcome.php">Login here</a></p>
			</div>
	</div>

	<div class="cookies-card">
		<p class="title">cookie content</p>
		<p class="info">By using this website, you automatically accept that we use cookies.<a href="#">Read more</a></p>
		<button class="cta">Accept all</button>
		<a href="#" class="setting">Cookie settings</a>
	</div>
</body>
</html>