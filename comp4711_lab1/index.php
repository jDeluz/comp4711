<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php
    //PHP Operators
    $name = 'Jon';
    $what = 'geek';
    $level = 10;
    echo 'Hi, my name is ' . $name ,', and I am a level ' . $level . ' ' . $what;
    echo '<br/>';

    //PHP Expressions
    $hoursworked = 10;
    $rate = 12;
    $total = $hoursworked * $rate;
    //echo 'You owe me $' . $total;

    //PHP Selection
    if ($hoursworked > 40){
        $total = $hoursworked * $rate * 1.5;
    } else {
        $total = $hoursworked * $rate;
    }
    echo ($total > 0) ? 'You owe me '. $total : "You're welcome";
?>

</body>
</html>