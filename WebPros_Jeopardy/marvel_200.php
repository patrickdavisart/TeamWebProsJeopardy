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
        <legend><h1 class="category">Marvel</h1></legend>
        <br><br>
        <a href="leaderboard.php"><input type="submit" value="See Leaderboard"></a><br>
        <a href="logout.php"><input type="submit" value="Logout"></a><br>
        <a href="jeopardy_board.php"> <input type="submit" value="Back to game board"></a>
        <p>This is the war in which Captain America was frozen in ice.</p><br><br>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <label for="MV2">Choose your answer:</label><br><br>
            <input type="submit" name="mv2" id="MV2" value="What is Cold War?">
            <input type="submit" name="mv2" id="MV2" value="What is World War II?">
            <input type="submit" name="mv2" id="MV2" value="What is Vietnam War?">
            <input type="submit" name="mv2" id="MV2" value="What is World War I?">
            <br><br>
        </form>

    <?php
    if(isset($_POST['mv2'])){
        $answer = $_POST['mv2'];

        if((strcmp($answer, "What is World War II?"))==0){
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
