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
        <p>This animal is the slowest animal known to mankind, found mostly in the forests
            of Central and South America. Its algae covered fur helps camouflage it in its environment.
        </p><br><br>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <label for="NQ2">Choose your answer:</label><br><br>
            <input type="submit" name="nq2" id="NQ2" value="What is a Slow Loris?">
            <input type="submit" name="nq2" id="NQ2" value="What is a Three Toed Sloth?">
            <input type="submit" name="nq2" id="NQ2" value="What is a Manatee?">
            <input type="submit" name="nq2" id="NQ2" value="What is a Giant Tortoise?"><br><br>
        </form>

    <?php
    if(isset($_POST['nq2'])){
        $answer = $_POST['nq2'];
        if((strcmp($answer, "What is a Three Toed Sloth?"))==0){
            $sql = "UPDATE `demo-registration`.`user_points` SET score = score + 200";
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