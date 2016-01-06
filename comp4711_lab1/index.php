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
    $hoursworked = 10;//$_GET['hours']; //Changed from 10 to $_GET
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

    //PHP Functions - Tic Tac Toe
    $position = $_GET['board'];
    $squares = str_split($position); //array of moves

    //Changed old winner function by replacing the 9 If statements with 2 for loops and 1 if statement.
    function winner($token, $position){
        if((($position[0] == $token) && ($position[4] == $token) && ($position[8] == $token))
         ||(($position[2] == $token) && ($position[4] == $token) && ($position[6] == $token))){
            return true;
        }
        for($row = 0; $row < 3; $row++){
            if((($position[3 * $row]) == $token) &&
               (($position[3 * $row + 1]) == $token) &&
               (($position[3 * $row + 2]) == $token)){
                return true;
            }
        }
        for($col = 0; $col < 3; $col++){
            if((($position[3 * $col]) == $token) &&
                (($position[3 * $col + 3]) == $token) &&
                (($position[3 * $col + 6]) == $token)){
                return true;
            }
        }

    return false;
    }

    echo '<br/>';
    $game = new Game($squares);

    if(!isset($_GET['board'])){
        echo 'No board found';
    } else {
        if ($game->winner('x')) {
            echo 'You win. Lucky guesses!';
        } else if ($game->winner('o')) {
            echo 'I win. Muahahahahaahaa';
        } else
            echo 'No winner yet, but you are losing.';
    }

    class Game{
        var $position;
        function __construct($squares){
            $this->position = $squares;
        }
        function winner($token){
            if((($this->position[0] == $token) && ($this->position[4] == $token) && ($this->position[8] == $token))
                ||(($this->position[2] == $token) && ($this->position[4] == $token) && ($this->position[6] == $token))){
                return true;
            }
            for($row = 0; $row < 3; $row++){
                if((($this->position[3 * $row]) == $token) &&
                    (($this->position[3 * $row + 1]) == $token) &&
                    (($this->position[3 * $row + 2]) == $token)){
                    return true;
                }
            }
            for($col = 0; $col < 3; $col++){
                if((($this->position[3 * $col]) == $token) &&
                    (($this->position[3 * $col + 3]) == $token) &&
                    (($this->position[3 * $col + 6]) == $token)){
                    return true;
                }
            }
            return false;
        }
    }

?>

</body>
</html>