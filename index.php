<?php
include './includes/Fibonacci.php';

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['fib-val'])) {
    // Get the Fibonacci value from the input
    $fibValue = intval($_POST['fib-val']); // Ensure it's an integer

    // Create an instance of the Fibonacci class
    $fibonacci = new Fibonacci();

    // Call the calculate method and store the result
    $result = [];
    for($i=0;$i<$fibValue; $i++){
        $result[] = $fibonacci->calculate($i);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <form action="" method="POST">
        <input type="number" name="fib-val" id="fib-val" required>
        <button type="submit">Calculate!</button>
    </form>

    <?php if(isset($result)):?>
        <ul>
            <?php foreach($result as $index => $value):?>
                <li><?="{$index}-{$value}";?></li>
            <? endforeach ?>
        </ul>
    <?php endif;?>
</body>
</html>