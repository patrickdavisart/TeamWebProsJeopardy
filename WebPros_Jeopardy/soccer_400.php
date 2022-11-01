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
        <legend><h1 class="category">Soccer</h1></legend>
        <br><br>
        <a href="leaderboard.php"><input type="submit" value="See Leaderboard"></a><br>
        <a href="logout.php"><input type="submit" value="Logout"></a><br>
        <a href="jeopardy_board.php"> <input type="submit" value="Back to game board"></a>
        <p>This man has managed Paris Saint Germain, AC Milan, Chelsea, and Real Madrid </p><br><br>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <label for="SC4">Choose your answer:</label><br><br>
            <input type="submit" name="sc4" id="SC4" value="Who is Carlo Ancelotti?">
            <input type="submit" name="sc4" id="SC4" value="Who is Graham Potter?">
            <input type="submit" name="sc4" id="SC4" value="Who is Zinedine Zidane?">
            <input type="submit" name="sc4" id="SC4" value="Who is Claudio Ranieri?"><br><br>
        </form>

    <?php
    if(isset($_POST['sc4'])){
        $answer = $_POST['sc4'];
        if((strcmp($answer, "Who is Carlo Ancelotti?"))==0){
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