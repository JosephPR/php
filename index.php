<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Practice</title>
</head>
<body>
    <h5>echo method </h5>
    <?php echo   'This is a php file';?> <br>


    <p>Generating a random number between 1 and 10:
        <?php

        echo rand(1, 1000);

        ?>


    <?php // This is a single-line comment

# This is also a single-line comment

/*
This is a multiple-lines comment block
that spans over multiple
lines
*/

// You can also use comments to leave out parts of a code line
$x = 5 /* + 15 */ + 5;
echo $x;
?>
<br>

<h5>Variables</h5>
<?php
 $color = 'red';
 echo "My car is " . $color . "<br>";
?>

<?php
// In PHP, a variable starts with the $ sign, followed by the name of the variable:

// Example
$txt = "Steak and Eggs!";
$x = 5;
$y = 10.5;

echo "I love $txt!";
?>
<br>
<!-- The following example will output the sum of two variables:

Example -->
<?php
$x = 5;
$y = 4;
echo $x + $y;
?>
<br>

<h5>X outside a function is global cannot be called inside a function, and vise versa, hence the error</h5>
<?php
$x = 5; // global scope

function inside() {
    // using x inside this function will generate an error
    echo "<p>Variable x inside function is: $x</p>";
}
inside();

echo "<p>Variable x outside function is: $x</p>";
?>

<h5> PHP The global Keyword
The global keyword is used to access a global variable from within a function.

To do this, use the global keyword before the variables (inside the function):
    </h5>

<?php
$x = 5;
$y = 10;

function global_inside_function() {
    global $x, $y;
    $y = $x + $y;
}

global_inside_function();
echo $y; // outputs 15
?>

<h5>   PHP also stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable. This array is also accessible from within functions and can be used to update global variables directly.

The example above can be rewritten like this:</h5>

<?php
$x = 5;
$y = 10;

function global_array() {
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}

global_array();
echo $y; // outputs 15
?>

<h5>PHP The static Keyword
Normally, when a function is completed/executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. We need it for a further job.

To do this, use the static keyword when you first declare the variable:</h5>


<?php
function myTest() {
    static $x = 0;
    echo $x;
    $x++;
}

myTest();
myTest();
myTest();
?>


<h5>The PHP echo Statement
The echo statement can be used with or without parentheses: echo or echo().

Display Text

The following example shows how to output text with the echo command (notice that the text can contain HTML markup):</h5>


<?php
echo "<h2>PHP is Fun!</h2>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.";
?>

<h5>Display Variables

The following example shows how to output text and variables with the echo statement,
the print staement does the same exact thing:
</h5>

<?php
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$x = 5;
$y = 4;

echo "<h2>" . $txt1 . "</h2>";
echo "Study PHP at " . $txt2 . "<br>";
echo $x + $y;
?>
<br>

<?php
$favcolor = "blue";

switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}
?>

</body>
</html>
