<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    
    include '_dbconnect.php';
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql =  "SELECT * from `demo-registration`.`credentials` where username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

    if($num == 1){
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        $sql = "INSERT INTO `demo-registration`.`user_points` (`id`, `username`, `score`) VALUES (NULL, '$username', 0)";
        $result = mysqli_query($conn, $sql);
        header("location: jeopardy_board.php");
    }else{
        echo "Invalid credentials. Please try again with valid credentials!";
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
					<li> <a href="jeopardy_board.php">Game</a></li>
				</ul>	
			</div>
		</div>
		<div class="content">
			<h1> Welcome <br><span> To The </span> <br>Game Of <br><span>Jeopardy!!</span></h1>
			<p class="par"> Jeopardy is the game of answer-and-question form.  </p>
			<div class="form">
				<h2>Login Here</h2>
				<form action="welcome.php" method="POST">
                <label for="username"></label>
                <input type="text" name="username" placeholder="Enter username here" id="username">
                <label for="password"></label>
				<input type="password" placeholder="Enter Password Here" name="password" id="password">
				<input type="submit" class="btnn" value="login">
                </form>
				<p class="link">Don't have an account?<br>
				<a href="signup.php">Sign up Here</a></p>
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