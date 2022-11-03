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
        <p>This insect is characterized by a large mandible and a visible stinger. It is commonly
            found in Central and South America. It is known for having the world's most painful bite.
        </p><br><br>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <label for="NQ5">Choose your answer:</label><br><br>
            <input type="submit" name="nq5" id="NQ5" value="What is a Fire Ant?">
            <input type="submit" name="nq5" id="NQ5" value="What is a Yellow Jacket?">
            <input type="submit" name="nq5" id="NQ5" value="What is a Paper Wasp?">
            <input type="submit" name="nq5" id="NQ5" value="What is a Bullet Ant?"><br><br>
        </form>

    <?php
    if(isset($_POST['nq5'])){
        $answer = $_POST['nq5'];
        if((strcmp($answer, "What is a Bullet Ant?"))==0){
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