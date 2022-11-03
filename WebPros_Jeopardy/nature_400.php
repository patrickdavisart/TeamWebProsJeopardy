<?php
    session_start();
    include '_dbconnect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nature</title>
    <link rel="stylesheet" href="questions_answers.css">
</head>

<body>
<div>
    <fieldset>
        <legend><h1 class="category">Nature</h1></legend>
        <br><br>
        <a href="leaderboard.php"><input type="submit" value="See Leaderboard"></a><br>
        <a href="logout.php"><input type="submit" value="Logout"></a><br>
        <a href="jeopardy_board.php"> <input type="submit" value="Back to game board"></a>
        <p>The state of the atmosphere at a place with respect to its heat, dryness, sunshine, 
            precipiation etc.</p><br><br>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <label for="MV1">Choose your answer:</label><br><br>
            <input type="submit" name="nq4" id="NQ4" value="What is Atmosphere?">
            <input type="submit" name="nq4" id="NQ4" value="What is Temperature?">
            <input type="submit" name="nq4" id="NQ4" value="What is Climate?">
            <input type="submit" name="nq4" id="NQ4" value="What is Weather?"><br><br>
        </form>

    <?php
    if(isset($_POST['nq4'])){
        $answer = $_POST['nq4'];
        if((strcmp($answer, "What is Weather?"))==0){
            $sql = "UPDATE `demo-registration`.`user_points` SET score = score + 400";
            mysqli_query($conn, $sql);
            echo "<div class='right-wrong'>";
            echo "<p class='correct'>Correct</p>";
            echo "</div>";
        }else{
            echo "<div class='right-wrong'>";
            echo "<p class='wrong'>Incorrect</p>";
            echo "</div>";
        }
    }?>
</fieldset>
</div>
</body>

</html>