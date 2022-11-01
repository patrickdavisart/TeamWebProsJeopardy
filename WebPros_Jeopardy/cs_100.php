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
    <title>Document</title>
    <link rel="stylesheet" href="questions_answers.css">
</head>
<body>
    <div>
        <fieldset>
            <legend><h1 class="category">Computer Science</h1></legend>
        <br><br>
        <a href="leaderboard.php"><input type="submit" value="See Leaderboard"></a><br>
        <a href="logout.php"><input type="submit" value="Logout"></a><br>
        <a href=jeopardy_board.php> <input type=submit value=Back to game board></a>
        <p>These constructs iterate through an input a specific number of times.</p><br><br>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method=post>
            <label for="csQ1">Choose your answer:</label><br><br>
            <input type="submit" name="csq1" id="csQ1" value="What are loops?">
            <input type="submit" name="csq1" id="csQ1" value="What are Trees?">
            <input type="submit" name="csq1" id="csQ1" value="What are switch cases?">
            <input type="submit" name="csq1" id="csQ1" value="What are expressions?">
        </form>
        <?php
        if(isset($_POST['csq1'])){
            $answer = $_POST['csq1'];
            if((strcmp($answer, "What are loops?"))==0){
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
        }
        ?>
        </fieldset>
    </div>

</body>
</html>