<?php

//Q1 Write a PHP script to see if the specified year is a leap year or not.
echo "Q1----------------------------------------------------- <br>";

$year = 2013;

if ((0 == $year % 4) & (0 != $year % 100) | (0 == $year % 400)) {
    echo "$year is a Leap Year.";
} else {
    echo "$year This year is not a leap year";
    echo '<br>';
}

//Q2
echo "Q2----------------------------------------------------- <br>";

// Write a PHP script to check the season depending on the inserted temperature if the temperature is below 20, we are in winter otherwise the season is summer.
$temp = 20;

if ($temp > "20") {
    echo "It is summertime!";
} else {
    echo "It is wintertime";
}
echo '<br>';


//Q3 
echo "Q3----------------------------------------------------- <br>";

//Write a PHP script to calculate the sum of the two integers. If the two values ​​are the same, then calculate the triple of their sum.
function sum($a, $b)
{
    return $a == $b ? ($a + $b) * 3 :  $a + $b;
}
echo sum(4, 4);
echo '<br>';


//Q4 
echo "Q4----------------------------------------------------- <br>";

// function int_num($ab, $bc)
// {
//     return $ab == $bc = 30 ? ($ab + $bc) : $ab;
// }
// print int_num(10, 10);

// echo '<br>';
function sum30($int1, $int2)
{
    if ($int1 + $int2 == 30) {
        echo $int1 + $int2;
        echo "<br>";
    } else {
        echo "false <br>";
    }
}
sum30(10, 20);
sum30(10, 10);


//Q5 Write in PHP script to check if the given positive number is a multiple of 3.
echo "Q5----------------------------------------------------- <br>";

$num = 20;

if ($num % 3 == 0) {
    echo ' true';
} else {
    echo 'false';
}
echo '<br>';


//Q6 Write a PHP script to check if the integer value ​​is in the range of [20-50] inclusive.
echo "Q6----------------------------------------------------- <br>";

$int = 50;
if ($int >= 20 && $int <= 50) {
    echo '<br> true';
} else {
    echo 'false';
}
echo '<br>';

//Q7 Write PHP script to find the largest number between the three integers
echo "Q7----------------------------------------------------- <br>";

// $arr = [1, 5, 9];
// $largest = 0;
// foreach ($arr as $n) {
//     if ($n > $largest) {
//         $largest = $n;
//     }
// }
// echo "<br>$largest";
// echo '<br>';
function largestInt($num1, $num2, $num3)
{
    if ($num1 > $num2 && $num1 > $num3) {
        echo $num1;
        echo "<br>";
    } elseif ($num2 > $num1 && $num2 > $num3) {
        echo $num2;
        echo "<br>";
    } else {
        echo $num3;
        echo "<br>";
    }
}
largestInt(4, 2, 3);
largestInt(5, 7, 3);
largestInt(5, 9, 3);


//Q8 Write PHP script to calculate the monthly electricity bill according to these rules
echo "Q8----------------------------------------------------- <br>";

$unit = 145;
$pill = 0;

if ($unit <= 50) {
    echo $pill = $unit * 2.50;
} elseif ($unit <= 150) {
    echo $pill = $unit * 5;
} elseif ($unit <= 250) {
    echo   $pill = $unit * 6.20;
} else {
    echo  $pill = $unit * 7.50;
}

echo "<br>";

?>
<?php
# Q9
echo "Q9----------------------------------------------------- <br>";


// Write php script to make a calculator, the calculator should contain the four main operations

// Addition
// Subtraction
// Multiplication
// Division


echo '<br>';

$num1 = 3;
$num2 = 9;

$op = '+';

switch ($op) {
    case '+':
        print $num1 + $num2;
        break;
    case '-':
        print $num1 - $num2;
        break;
    case '':
        print $num1 * $num2;
        break;
    case '/':
        print $num1 / $num2;
        break;
}
echo "<br><br>";

?>
<?php
// =====================================================

# Q10
echo "Q10----------------------------------------------------- <br>";

/*
Write php script to check if a person is eligible to vote, minimum age required for voting is 18.

Sample Input: 15
Sample Output: ‘is no eligible to vote’
*/

function above18($age)
{
    if ($age >= 18) {
        echo "is eligible to vote <br>";
    } else {
        echo "is not eligible to vote <br>";
    }
}

above18(15);
echo "<br>";

above18(18);
echo "<br>";

above18(23);
echo "<br>";

echo "Q11----------------------------------------------------- <br>";
function posNeg($num)
{
    if ($num < 0) {
        echo   $answer = "Negative";
    } elseif ($num > 0) {
        echo  $answer = "Positive";
    } else {
        echo   $answer = "Zero";
    }
    return $answer;
}

posNeg(-10);
echo "<br>";

posNeg(0);
echo "<br>";

posNeg(50);
echo "<br>";

?>
<?php
// =====================================================

# Q12

/*

Write a PHP to find the grade for the student, after calculating the average of his score in all the subject

Sample Inputs: [60,86,95,63,55,74,79,62,50]
Sample Output: ‘D’


*/
echo "Q12----------------------------------------------------- <br>";

$marks = array(60, 86, 95, 63, 55, 74, 79, 62, 50);

$sum = 0;

foreach ($marks as $val) {
    $sum += $val;
}
$avg = $sum / count($marks);
if ($avg < 60) print "F";
elseif ($avg < 70) print "<br>D";
elseif ($avg < 80) print "C";
elseif ($avg < 90) print "B";
elseif ($avg < 100) print "A";
echo "<br>";

//************* */


// Array Q1**************** */
echo "-------------------------------------------------Array Q--------------------------------------------------- <br>";

echo "Q1----------------------------------------------------- <br>";

$color = array('white', 'green', 'red');
echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the $color[2] carpet, the $color[1] lawn, the $color[0] house, the leaden sky. The new president and his first lady. - Richard M. Nixon" . "\n";

echo ' <br> ';
//Q2***************** */
echo "Q2----------------------------------------------------- <br>";

function unordered($colors)
{
    echo "<ul>";
    foreach ($colors as $color) {
        echo "<li> $color </li>";
    }
    echo "</ul><br>";
}
unordered(['white', 'green', 'red']);
echo ' <br> ';
//*Q3******************** */
echo "Q3----------------------------------------------------- <br>";

$cities = array(
    "Italy" => "Rome", "Luxembourg" => "Luxembourg",
    "Belgium" => "Brussels", "Denmark" => "Copenhagen",
    "Finland" => "Helsinki", "France" => "Paris",
    "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana",
    "Germany" => "Berlin", "Greece" => "Athens",
    "Ireland" => "Dublin", "Netherlands" => "Amsterdam",
    "Portugal" => "Lisbon", "Spain" => "Madrid",
    "Sweden" => "Stockholm", "United Kingdom" => "London",
    "Cyprus" => "Nicosia", "Lithuania" => "Vilnius",
    "Czech Republic" => "Prague", "Estonia" => "Tallin",
    "Hungary" => "Budapest", "Latvia" => "Riga", "Malta" => "Valetta",
    "Austria" => "Vienna", "Poland" => "Warsaw"
);
asort($cities);
foreach ($cities as $country => $capital) {
    echo "The capital of $country is $capital" . "\n";
    echo ' <br> ';
}
//Q4*************** */
echo "Q4----------------------------------------------------- <br>";

// reset return  the first element in the array
$color = array(4 => 'white', 6 => 'green', 11 => 'red');
echo reset($color) . "\n";
echo ' <br> ';

echo "Q5----------------------------------------------------- <br>";

/*
 
Write a PHP script that inserts a specific new item in an array in any position.
 
Sample Input:
 
Array 1 2 3 4 5   
Location: 4
New Item: $
 
Expected Output: 1 2 3 $ 4 5
*/

$arr = array(1, 2, 3, 4, 5);

array_splice($arr, 3, 0, "$");

echo "array =";
foreach ($arr as $v) {
    echo "$v ";
}

echo "<br>";

//Q6 *************************
echo "Q6----------------------------------------------------- <br>";

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
asort($fruits);
foreach ($fruits as $i => $fruit) {
    echo "$i : $fruit <br>";
}
echo ' <br> ';

//Q7 ******************
echo "Q7----------------------------------------------------- <br>";

$m_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
//expolde :breaks a string into an array.
$temp_array = explode(',', $m_temp);
$tot_temp = 0;
$temp_array_length = count($temp_array);
foreach ($temp_array as $temp) {
    $tot_temp += $temp;
}
$avg_high_temp = $tot_temp / $temp_array_length;
echo "Average Temperature is : " . $avg_high_temp . "
";
echo ' <br> ';

sort($temp_array);
echo " List of five lowest temperatures :";
for ($i = 0; $i < 5; $i++) {
    echo $temp_array[$i] . ", ";
}
echo ' <br> ';

rsort($temp_array);
echo " List of five Highest temperatures :";
for ($i = 0; $i < 5; $i++) {
    echo $temp_array[$i] . ", ";
}

echo ' <br> ';


echo ' <br> ';

echo "Q8----------------------------------------------------- <br>";
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
print_r(array_merge($array1, $array2));
echo "<br>";

echo "Q9----------------------------------------------------- <br>";
function upperCase($array)
{
    $flippedArray = array_flip($array);
    $upperFlipped = array_change_key_case($flippedArray, CASE_UPPER);
    $upperArray = array_flip($upperFlipped);
    print_r($upperArray);
    echo "<br>";
}

upperCase(["red", "blue", "white", "yellow"]);

echo "Q10----------------------------------------------------- <br>";
function lowerCase($array)
{
    $flippedArray = array_flip($array);
    $lowerFlipped = array_change_key_case($flippedArray, CASE_LOWER);
    $lowerArray = array_flip($lowerFlipped);
    print_r($lowerArray);
    echo "<br>";
}

lowerCase(["RED", "BLUE", "WHITE", "YELLOW"]);

echo "Q11----------------------------------------------------- <br>";
echo implode(",", range(200, 250, 4));


echo "<br>";

echo "Q12----------------------------------------------------- <br>";
function long($arr)
{
    $short = $arr[0];
    $long = $arr[0];
    for ($i = 0; $i < count($arr); $i++) {
        if (strlen($arr[$i]) < strlen($short)) {
            $short = $arr[$i];
        }
        if (strlen($arr[$i]) > strlen($long)) {
            $long = $arr[$i];
        }
    }
    echo "The shortest length  $short. The longest length is $long";
}
$words =  array("abcd", "abc", "de", "hjjj", "g", "wer");
long($words);
echo "<br>";

echo "Q13----------------------------------------------------- <br>";

for ($i = 0; $i < 10; $i++)
    echo rand(11, 20) . "  ";

echo "<br>";


echo "Q14----------------------------------------------------- <br>";
$array1 = array(2, 0, 10, 12, 6);
$lowInt = $array1[0];
foreach ($array1 as $v) {
    if ($v < $lowInt && $v != 0)
        $lowInt = $v;
}

echo $lowInt;
echo "<br>";
?>
<?php
echo "-------------------------------------------------Loops Q--------------------------------------------------- <br>";
echo "Q1----------------------------------------------------- <br>";
$are = "";
for ($i = 0; $i <= 10; $i++) {
    $are .= $i . "-";
}
echo substr($are, 0, -1);

echo "<br>";
echo "Q2----------------------------------------------------- <br>";


$tot = 0;
for ($i = 0; $i <= 30; $i++)
    $tot = $tot + $i;

echo $tot;
echo "<br>";
echo "Q3----------------------------------------------------- <br>";
$letterss = range('A', 'E');

for ($i = 0; $i < 5; $i++) {
    for ($t = 4; $t > $i; $t--) {
        echo $letterss[0] . "  ";
    }
    for ($v = 0; $v <= $i; $v++) {
        echo $letterss[$i] . "  ";
    }
    echo "<br>";
}


echo "<br>";
echo "Q4----------------------------------------------------- <br>";
$numberss = range('1', '5');

for ($i = 0; $i < 5; $i++) {
    for ($t = 4; $t > $i; $t--) {
        echo $numberss[0] . "  ";
    }
    for ($v = 0; $v <= $i; $v++) {
        echo $numberss[$i] . "  ";
    }
    echo "<br>";
}

echo "<br>";
echo "Q5----------------------------------------------------- <br>";
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        if ($j == $i) {
            echo $i . "&nbsp ";
        } else
            echo 0 . "&nbsp ";
    }
    echo "<br>";
}


echo "<br>";
echo "Q6----------------------------------------------------- <br>";

function factorial($num)
{
    $factor = 1;
    for ($x = 1; $x <= 5; $x++) {
        $factor *= $x;
    }
    echo " $num : $factor";
}
factorial(5);
echo "<br>";
echo "Q7----------------------------------------------------- <br>";
$f1 = 0;
$f2 = 1;
$n = 25;
echo $f1 . ",";
echo $f2 . ",";
for ($i = 1; $i <= $n; $i++) {
    $f3 = $f1 + $f2;
    $f1 = $f2;
    $f2 = $f3;
    echo $f3 . ",";
}
echo "<br>";
echo "Q8----------------------------------------------------- <br>";
function countC($str)
{
    $counter = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] == "c" || $str[$i] == "C") {
            $counter = $counter + 1;
        }
    }
    echo $counter . " <br>";
}

countC("Orange Coding Academy");
echo "<br>";
echo "Q9----------------------------------------------------- <br>";
echo "<table border=\"2\" cellpadding=\"6px\" cellspacing=\"2px\" '>";

for ($row = 1; $row <= 6; $row++) {
    echo "<tr> \n";
    for ($col = 1; $col <= 5; $col++) {
        $operation = " $row * $col = ";
        echo "<td>$operation" . $row * $col . "</td> \n";
    }
    echo "</tr>";
}
echo "</table>";
echo "<br>";

echo "Q10----------------------------------------------------- <br>";

function fBuzz()
{
    for ($i = 1; $i <= 50; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo "fizzBuzz ";
        } elseif ($i % 3 == 0) {
            echo "fizz ";
        } elseif ($i % 5 == 0) {
            echo "Buzz ";
        } else {
            echo $i . " ";
        }
    }
}
fBuzz();

echo "<br>";

echo "Q11----------------------------------------------------- <br>";
$number = range(1, 15);
$x = 0;
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $number[$x] . " ";
        $x++;
    }
    echo "<br>";
}
echo "<br>";
echo "Q12----------------------------------------------------- <br>";

echo "<br>";















echo "-------------------------------------------------Functions Q--------------------------------------------------- <br>";
echo "Q1----------------------------------------------------- <br>";

function Prime($num)
{
    for ($x = 2; $x < $num; $x++) {
        if ($num % $x == 0) {
            return 0;
        }
    }
    return 1;
}
$n = Prime(6);
if ($n == 0)
    echo ' <br> This is not a Prime Number';
else
    echo '<br> This is a Prime Number';

echo "<br>";
echo "Q2----------------------------------------------------- <br>";
print_r(strrev('remove') . "\n");
echo "<br>";
echo "Q3----------------------------------------------------- <br>";
function is_str_lowercase($str1)
{
    for ($c = 0; $c < strlen($str1); $c++) {
        if (
            ord($str1[$c]) >= ord('A') &&
            ord($str1[$c]) <= ord('Z')
        ) {
            return "Your String is not Ok";
        }
    }
    return "Your String is Ok";
}
print_r(is_str_lowercase('remove'));
echo "<br>";
echo "Q4----------------------------------------------------- <br>";
$xx = 12;
$yy = 10;
echo "<br>Before swapping:  " . $xx . ',' . $yy;
list($xx, $yy) = array($xx, $yy);
echo "<br>After swapping:  " . $yy . ',' . $xx . "<br>";
echo "<br>";
echo "Q5----------------------------------------------------- <br>";
echo "same Q4";
echo "<br>";
echo "Q6----------------------------------------------------- <br>";
function isArmstrong($num)
{
    $numStr = strval($num);
    $sum = 0;
    for ($i = 0; $i < strlen($numStr); $i++) {
        $sum += (intval($numStr[$i]) ** 3);
    }
    if ($sum == $num) {
        echo "$num : is an Armstrong Number <br>";
    } else {
        echo "$num : is not an Armstrong Number <br>";
    }
}
echo isArmstrong(407);
echo "<br>";
echo "Q7----------------------------------------------------- <br>";
function check_palindrome($string)
{
    if ($string == strrev($string))
        return "Yes it is a palindrome ";
    else
        return "No it is not a palindrome ";
}
echo check_palindrome('Eva , can I see bees in a cave?') . "\n";
echo "<br>";
echo "Q8----------------------------------------------------- <br>";
$arr = array(2, 4, 7, 4, 8, 4);
print_r(array_unique($arr));


echo "<br>";
