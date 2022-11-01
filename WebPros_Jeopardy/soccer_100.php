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
    <title>soccer - $100</title>
    <link rel="stylesheet" href="questions_answers.css">
</head>
<body>
<div>
    <fieldset>
        <legend><h1 class="category">Soccer</h1></legend>
        <br><br>
        <a href="leaderboard.php"><input type="submit" value="See Leaderboard"></a><br>
        <a href="logout.php"><input type="submit" value="Logout"></a><br>
        <a href="jeopardy_board.php"> <input type="submit" value="Back to game board"></a>
        <p>This team won the European treble in the 1998-99 season</p><br><br>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <label for="SC1">Choose your answer:</label><br><br>
            <input type="submit" name="sc1" id="SC1" value="What is Manchester United?">
            <input type="submit" name="sc1" id="SC1" value="What is Real Madrid?">
            <input type="submit" name="sc1" id="SC1" value="What is FC Barcelona?">
            <input type="submit" name="sc1" id="SC1" value="What is Liverpool?"><br><br>
    <?php
    if(isset($_POST['sc1'])){
        $answer = $_POST['sc1'];
        if((strcmp($answer, "What is Manchester United?"))==0){
            $sql = "UPDATE `demo-registration`.`user_points` SET score = score + 100";
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
    </form>
    </fieldset>
</div>
</body>
</html>