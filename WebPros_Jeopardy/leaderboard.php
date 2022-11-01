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
    <link rel="stylesheet" href="leaderboard_style.css">
</head>
<body>
    <a href="jeopardy_board.php"><input type="submit" value="Back to game board"></a>
    <a href="logout.php"><input type="submit" value="Logout"></a><br>
    <table CELLSPACING="0">
    <caption>Leaderboard</caption>
    
    <tr>
    <th>Username</th>
    <th>Score</th>
    </tr>

    <tr>
        <td> 
            <?php 
            $sql = "SELECT `username` FROM `demo-registration`.`user_points`";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)){
                print $row['username'];
            }
            ?>
        </td>

        <td> 
            <?php 
            $sql = "SELECT `score` FROM `demo-registration`.`user_points`";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)){
                print $row['score'];
            }
            ?>
        </td>
    </tr>

    </table>
</body>
</html>