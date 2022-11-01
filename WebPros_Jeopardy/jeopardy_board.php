<?php
session_start();
setcookie("games", "quiz games", time() + 86400, "/");
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: welcome.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeopardy!</title>
    <link rel="stylesheet" href="jeopardy_boardStyle.css">
</head>
<body>
    <a href="leaderboard.php"><button class="button">See Leaderboard</button></a>
    <a href="logout.php"><button class="button">Logout</button></a>
    <div>
        <table CELLSPACING=20>
            <caption>JEOPARDY!<br></caption>
            <tr>
                <th>Soccer</th>
                <th>Nature</th>
                <th>Marvel</th>
                <th>Superheroes</th>
                <th>DC</th>
                <th>Computer Science</th>
            </tr>

            <tr>
                <td><a href="soccer_100.php"><button type="submit" class="button">$100</button></td>
                <td><a href="nature_100.php"><button class="button">$100</button></a></td>
                <td><a href="marvel_100.php"><button class="button">$100</button></a></td>
                <td><a href="Superheroes_100.php"><button class="button">$100</button></a></td>
                <td><a href="DC_100.php"><button class="button">$100</button></a></td>
                <td><a href="cs_100.php"><button class="button">$100</button></a></td>
            </tr>

            <tr>
                <td><a href="soccer_200.php"><button class="button">$200</button></a></td>
                <td><a href="nature_200.php"><button class="button">$200</button></a></td>
                <td><a href="marvel_200.php"><button class="button">$200</button></a></td>
                <td><a href="Superheroes_200.php"><button class="button">$200</button></a></td>
                <td><a href="DC_200.php"><button class="button">$200</button></a></td>
                <td><a href="cs_200.php"><button class="button">$200</button></a></td>
            </tr>
            <tr>
                <td><a href="soccer_300.php"><button class="button">$300</button></a></td>
                <td><a href="nature_300.php"><button class="button">$300</button></a></td>
                <td><a href="marvel_300.php"><button class="button">$300</button></a></td>
                <td><a href="Superheroes_300.php"><button class="button">$300</button></a></td>
                <td><a href="DC_300.php"><button class="button">$300</button></a></td>
                <td><a href="cs_300.php"><button class="button">$300</button></a></td>
            </tr>

            <tr>
                <td><a href="soccer_400.php"><button class="button">$400</button></a></td>
                <td><a href="nature_400.php"><button class="button">$400</button></a></td>
                <td><a href="marvel_400.php"><button class="button">$400</button></a></td>
                <td><a href="Superheroes_400.php"><button class="button">$400</button></a></td>
                <td><a href="DC_400.php"><button class="button">$400</button></a></td>
                <td><a href="cs_400.php"><button class="button">$400</button></a></td>
            </tr>

            <tr>
                <td><a href="soccer_500.php"><button class="button">$500</button></a></td>
                <td><a href="nature_500.php"><button class="button">$500</button></a></td>
                <td><a href="marvel_500.php"><button class="button">$500</button></a></td>
                <td><a href="Superheroes_500.php"><button class="button">$500</button></a></td>
                <td><a href="DC_500.php"><button class="button">$500</button></a></td>
                <td><a href="cs_500.php"><button class="button">$500</button></a></td>
            </tr>
        </table><br><br>
    </div>
</body>

</html>