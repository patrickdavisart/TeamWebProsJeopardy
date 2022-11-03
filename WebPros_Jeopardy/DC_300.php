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
    <title>DC</title>
    <link rel="stylesheet" href="questions_answers.css">
</head>

<body>
<div>
    <fieldset>
        <legend><h1 class="category">DC</h1></legend>
        <br><br>
        <a href="leaderboard.php"><input type="submit" value="See Leaderboard"></a><br>
        <a href="logout.php"><input type="submit" value="Logout"></a><br>
        <a href="jeopardy_board.php"> <input type="submit" value="Back to game board"></a>
        <p>This justice league superhero was a villian before
            becoming a part of the group.
        </p><br><br>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <label for="DC3">Choose your answer:</label><br><br>
            <input type="submit" name="dc3" id="DC3" value="Who is Aquaman?">
            <input type="submit" name="dc3" id="DC3" value="Who is Daredevil?">
            <input type="submit" name="dc3" id="DC3" value="Who is Wonder Woman?">
            <input type="submit" name="dc3" id="DC3" value="Who is Hawkgirl?"><br><br>
        </form>

        <?php
        if(isset($_POST['dc3'])){
            $answer = $_POST['dc3'];
            if((strcmp($answer, "Who is Aquaman?"))==0){
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
    </fieldset>
</div>
</body>

</html>
