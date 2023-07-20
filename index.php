<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["start"])) {
        header("Location: gamer.php");
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
            background: linear-gradient(#ffffff, #e6e6e6);
        }

        h1 {
            color: #333;
        }

        .top{
            margin-top: 20%;
        }
        input{
            background-color: #00ff00;
            border:none;
            padding:10px 20px;

        }
    </style>
</head>
<body>
    <div class="top">
    <h1>Number Guessing Game</h1>
    <p>Welcome to the Number Guessing Game!</p>
      <p>Try to guess the correct number between 1 and 10. You will be provided with feedback after each guess to help you get closer to the target number.</p>
      <p>Are you ready to test your guessing skills? Let's get started!</p>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <input type="submit" name="start" value="Start">
    </form>
</div>
</body>
</html>
