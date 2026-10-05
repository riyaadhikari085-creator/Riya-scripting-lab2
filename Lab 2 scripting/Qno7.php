<!DOCTYPE html>
<html>
<head>
    <title>Football Points</title>
</head>
<body>

<h2>Football Team Points Calculator</h2>

<form method="post">

    Number of Wins:
    <input type="number" name="wins" min="0" required>
    <br><br>

    Number of Draws:
    <input type="number" name="draws" min="0" required>
    <br><br>

    Number of Losses:
    <input type="number" name="losses" min="0" required>
    <br><br>

    <input type="submit" name="calculate" value="Calculate">

</form>

<?php

if (isset($_POST['calculate'])) {

    $wins = $_POST['wins'];
    $draws = $_POST['draws'];
    $losses = $_POST['losses'];

    $totalGames = $wins + $draws + $losses;

    if ($totalGames == 0) {
        echo "<p>Please enter at least one game.</p>";
    } else {

        $points = ($wins * 3) + ($draws * 1);

        echo "<h3>Result</h3>";
        echo "Wins: " . $wins . "<br>";
        echo "Draws: " . $draws . "<br>";
        echo "Losses: " . $losses . "<br>";
        echo "Total Games: " . $totalGames . "<br>";
        echo "Total Points: " . $points;
    }
}

?>

</body>
</html>