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
        <legend><h1 class="category">Superheroes</h1></legend>
        <br><br>
        <a href="leaderboard.php"><input type="submit" value="See Leaderboard"></a><br>
        <a href="logout.php"><input type="submit" value="Logout"></a><br>
        <a href="jeopardy_board.php"> <input type="submit" value="Back to game board"></a>
        <p>The ninja turtle named Leonardo had a fear since childhood of this</p><br><br>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <label for="SPQ4">Choose your answer:</label><br><br>
            <input type="submit" name="spq4" id="SPQ4" value="What is Acrophobia?">
            <input type="submit" name="spq4" id="SPQ4" value="What is Entomophobia?">
            <input type="submit" name="spq4" id="SPQ4" value="What is Failure?">
            <input type="submit" name="spq4" id="SPQ4" value="What is Rejection?"><br><br>
        </form>

        <?php
        if(isset($_POST['spq4'])){
            $answer = $_POST['spq4'];
            if((strcmp($answer, "What is Acrophobia?"))==0){
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
