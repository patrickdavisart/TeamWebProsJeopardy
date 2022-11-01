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
        <a href="jeopardy_board.php"> <input type="submit" value="Back to game board"></a>
        <p>This programming language is statically typed and is a multi-platform, object-oriented,
            network-centric programming language. It uses curly braces to define beginning and end of
            each function and class, and can run on any computer due to its virtual machine. It is best for
            Desktop GUI apps, Embed systems, and Web app services.
        </p><br><br>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <label for="csQ5">Choose your answer:</label><br><br>
            <input type="submit" name="csq5" id="csQ5" value="What is Java?">
            <input type="submit" name="csq5" id="csQ5" value="What is Python?">
            <input type="submit" name="csq5" id="csQ5" value="What is PHP?">
            <input type="submit" name="csq5" id="csQ5" value="What is HTML?">
        </form>
        <?php
        if(isset($_POST['csq5'])){
            $answer = $_POST['csq5'];
            if((strcmp($answer, "What is Java?"))==0){
                $sql = "UPDATE `demo-registration`.`user_points` SET score = score + 500";
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