<?php

//1 exercise
$amount = 2; (int) readline("Enter amount of numbers:");
$numbers = [];

for ($i = 0;$i < $amount;$i++)
{
    $number = (int) readline("Enter amount of numbers:");
    $numbers[] = $number;
}
$largestnumber = max($numbers);
echo "The largest number is:" . " " . $largestnumber . PHP_EOL;
$numberlist = implode(',', $numbers);



//2 exercise
//todo print if number is positive or negative
$cipars = (int) readline("Enter a number:");

if ($cipars >= 0)
{
    echo "The number:" . " " . $cipars . " " . "is positive." . PHP_EOL;
} else
{
    echo "The number:" . " " . $cipars . " " . "is negative." . PHP_EOL;
}

//3 exercise
//todo Write a program that reads an positive integer and count the number of digits the number has.

/*function countDigits($input)
{
    return countDigits($input);
}*/
$input = (int) readline("Enter a number to count the digits:");

$digits = strlen($input);
echo "The count of digits is" . " " . $digits . PHP_EOL;

//4 exercise
$dayNumber = [0, 1, 2, 3, 4, 5, 6];
$dayNumber = (int) readline("Enter the number:");

switch ($dayNumber)
{
    case 0:
        echo "Sunday" . PHP_EOL;
        break;
    case 1:
        echo "Monday" . PHP_EOL;
        break;
    case 2:
        echo "Tuesday" . PHP_EOL;
        break;
    case 3:
        echo "Wednesday" . PHP_EOL;
        break;
    case 4:
        echo "Thursday" . PHP_EOL;
        break;
    case 5:
        echo "Friday" . PHP_EOL;
        break;
    case 6:
        echo "Saturday" . PHP_EOL;
        break;
    default:
        echo "Not a valid day" . PHP_EOL;
        exit;
}

//5 exercise

$word = strtolower(readline("Enter a word:"));
$letters = str_split($word);

function keypadToDigit(string $letter): string
{
    switch ($letter)
    {
        case "a":
        case "b":
        case "c":
            return "2";
        case "d":
        case "e":
        case "f":
            return "3";
        case "g":
        case "h":
        case "i":
            return "4";
        case "j":
        case "k":
        case "l":
            return "5";
        case "m":
        case "n":
        case "o":
            return "6";
        case "p":
        case "q":
        case "r":
        case "s":
            return "7";
        case "t":
        case "u":
        case "v":
            return "8";
        case "w":
        case "x":
        case "y":
        case "z":
            return "9";

    }
    return "E";
}

$keypad = "";
foreach ($letters as $letter)
{
    $keypad .= keypadToDigit($letter);
}

echo $keypad . PHP_EOL;


