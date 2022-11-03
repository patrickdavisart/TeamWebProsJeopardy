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
    <title>Computer Science</title>
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
        <p>This algorithm starts traversing from the root node, and explores
            each branch before backtracking. Generally, a stack is required 
            to keep track of the nodes that have been visited along a branch.
        </p><br><br>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <label for="csQ3">Choose your answer:</label><br><br>
            <input type="submit" name="csq3" id="csQ3" value="What is Depth-First Search?">
            <input type="submit" name="csq3" id="csQ3" value="What is Counting Sort?">
            <input type="submit" name="csq3" id="csQ3" value="What is Binary Search?">
            <input type="submit" name="csq3" id="csQ3" value="What is Heapify?">
            <br><br>

        </form>

        <?php
            if(isset($_POST['csq3'])){
                $answer = $_POST['csq3'];
                if((strcmp($answer, "What is Depth-First Search?"))==0){
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