<?php
$playAgain = false;
$play = false;
$message = '';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["play"])) {
        $guess = $_POST["guess"];
        $targetNumber = rand(1, 10);
        if ($guess == $targetNumber) {
            $message = "Congratulations! You guessed the correct number ($targetNumber).";
            $playAgain= true;
        } else {
            $message = "Sorry, you guessed the wrong number. The correct number was $targetNumber.";
            $playAgain = true;
        }
    } elseif (isset($_POST["yes"])) {
        header("Location: gamer.php");
        exit();
    } elseif (isset($_POST["no"])) {
        header("Location: index.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Number Guessing Game</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 20%;
            background: linear-gradient(#ffffff, #e6e6e6);
        }

        h1 {
            color: #333;
        }

    </style>
</head>
<body>
    <div class="top">
    <h1>Number Guessing Game</h1>
    <p><?php echo $message; ?></p>

    <?php if (!$playAgain): ?>
        <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
           Guess a Number(1 to 10):&nbsp;<input type="number" name="guess" min="1" max="10">
            <input type="submit" name="play" value="Play">
        </form>
    <?php else: ?>
        <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            <p>Play again?</p>
            <input type="submit" name="yes" value="Yes">
            <input type="submit" name="no" value="No">
        </form>
    <?php endif; ?>
</div>
</body>
</html>
