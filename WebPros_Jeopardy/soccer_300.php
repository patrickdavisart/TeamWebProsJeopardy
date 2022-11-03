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
    <title>Soccer</title>
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
        <p>This man is strongly referred to as Manchester United's greatest ever manager</p><br><br>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <label for="SC3">Choose your answer:</label><br><br>
            <input type="submit" name="sc3" id="SC3" value="Who is Sir Alex Ferguson?">
            <input type="submit" name="sc3" id="SC3" value="Who is Carlo Ancelotti?">
            <input type="submit" name="sc3" id="SC3" value="Who is Pep Guardiola?">
            <input type="submit" name="sc3" id="SC3" value="Who is Thomas Tuchel?"><br><br>

    <?php
    if(isset($_POST['sc3'])){
        $answer = $_POST['sc3'];
        if((strcmp($answer, "Who is Sir Alex Ferguson?"))==0){
            $sql = "UPDATE `demo-registration`.`user_points` SET score = score + 300";
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