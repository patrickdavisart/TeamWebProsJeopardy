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
    <title>Marvel</title>
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
        <p>This is the fake name used by Natasha when first meets Tony Stark</p><br><br>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <label for="MV5">Choose your answer:</label><br><br>
            <input type="submit" name="mv5" id="MV5" value="Who is Natalie Rushman?">
            <input type="submit" name="mv5" id="MV5" value="Who is Natalia Romanoff?">
            <input type="submit" name="mv5" id="MV5" value="Who is Nicole Rohan?">
            <input type="submit" name="mv5" id="MV5" value="who is Naya Rabe?"><br><br>
        </form>

    <?php
    if(isset($_POST['mv5'])){
        $answer = $_POST['mv5'];
        if((strcmp($answer, "Who is Natalie Rushman?"))==0){
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
