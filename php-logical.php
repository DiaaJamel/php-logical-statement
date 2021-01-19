<?php
// 1- Write php script to calculate Electricity bill
// Rule
// ● For first 50 units – Rs. 2.50/unit
// ● For next 100 units – Rs. 5.00/unit
// ● For next 100 units – Rs. 6.20/unit
// ● For units above 250 – Rs. 7.50/unit
$bill=49;
if($bill>0 && $bill<=50){
    echo "Your Electricity bill =";
    echo 2.50*$bill;
} else if($bill>50 && $bill<=150){
    echo "Your Electricity bill =";
    echo 5.00*$bill;
} else if($bill>150 && $bill<=250){
    echo "Your Electricity bill =";
    echo 6.20*$bill;
} else if($bill>250){
    echo "Your Electricity bill =";
    echo 7.50*$bill;
} else {
    echo "There is an error";
}

echo '<br/>';

// ---------------------------
//  2. Write php script to make a calculator
// Operations:
// ● Addition
// ● Subtraction
// ● Multiplication
// ● Division

$operator = '-';
$number1 = 35;
$number2 = 45;
switch($operator){
    case '+':
        echo $number1 + $number2;
        break;
    case '-':
        echo $number1 - $number2;
        break;
    case '*':
        echo $number1 * $number2;
        break;
    case '/':
        echo $number1 / $number2;
        break;
    default:
        echo "something went wrong";
}

echo '<br/>';


// ----------------------------
// 3-Write php script to check if a person is eligible to vote
// Rule
// ● Minimum age required for voting is 18.
// ● You can use PHP Functions.
// ● You can use Decision Making Statements.

$personAge=19;

if($personAge>=18){
    echo "You're eligible to vote";
}else if($personAge<18 && $personAge>=0){
    echo "You can't vote";
} else{
    echo "Something went wrong";
}
echo '<br/>';


// ----------------------------
//  4-Write php script to check whether a number is positive,
// negative or zero
// Rule
// ● You can use if else conditions.
// ● You should use appropriate PHP Operators.
// ● Also check if it is not a numeric value.

$number=20;
if ($number > 0){
    echo $number;
    echo " This is a positive number";
} else if ($number < 0){
    echo $number;
    echo " This is a negative number";
} else if ($number == 0){
    echo "Zero";
} else {
    echo "Enter a valid number ";
}


echo '<br/>';









?>