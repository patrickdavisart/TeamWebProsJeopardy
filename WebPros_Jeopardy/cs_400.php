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
        <p>The distinct property of this type of structure is that every node value
            less than the root value is placed on the left and every node value greater 
            than the root is placed on the right 
        </p><br><br>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <label for="csQ4">Choose your answer:</label><br><br>
            <input type="submit" name="csq4" id="csQ4" value="What is a Binary Search Tree?">
            <input type="submit" name="csq4" id="csQ4" value="What is a Complete Binary Tree?">
            <input type="submit" name="csq4" id="csQ4" value="What is a Graph?">
            <input type="submit" name="csq4" id="csQ4" value="What is a Bipartite Graph?">
        </form>
        <?php
            if(isset($_POST['csq4'])){
                $answer = $_POST['csq4'];
                if((strcmp($answer, "What is a Binary Search Tree?"))==0){
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