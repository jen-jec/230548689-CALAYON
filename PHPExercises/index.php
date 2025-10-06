<!-- Exercse 1 -->
<?php
$name = "Jenell";
$age = 21;
$favorite_color = "blue";

echo "Hi, I’m $name, I am $age years old, and my favorite color is $favorite_color.";
?>

<!-- Exercise 2 -->
 <?php
$a = 10;
$b = 5;

$sum = $a + $b;
$difference = $a - $b;
$product = $a * $b;
$quotient = $a / $b;

echo "Sum: $sum, Difference: $difference, Product: $product, Quotient: $quotient";
?>

<!-- Exercise 3 -->
 <?php
$length = 10;
$width = 5;

$area = $length * $width;
$perimeter = 2 * ($length + $width);

echo "Area: $area, Perimeter: $perimeter";
?>

<!-- Exercise 4 -->
 <?php
$celsius = 25;
$fahrenheit = ($celsius * 9/5) + 32;

echo "$celsius°C is $fahrenheit°F";
?>

<!-- Exercise 5 -->
<?php
$a = 10;
$b = 20;

$temp = $a;
$a = $b;
$b = $temp;

echo "After swapping: a = $a, b = $b";
?>

<!-- Exercise 6 -->
<?php
$basic_salary = 5000;
$allowance = 1000;
$deduction = 500;

$net_salary = $basic_salary + $allowance - $deduction;

echo "Net Salary: $net_salary";
?>

<!-- Exercise 7 -->
<?php
$weight = 70; // kg
$height = 1.75; // meters

$bmi = $weight / ($height * $height);

echo "BMI: $bmi";
?>

<!-- Exercise 8 -->
<?php
$sentence = "This is a sample sentence.";

$char_count = strlen($sentence);
$word_count = str_word_count($sentence);
$upper = strtoupper($sentence);
$lower = strtolower($sentence);

echo "Characters: $char_count, Words: $word_count, Uppercase: $upper, Lowercase: $lower";
?>

<!-- Exercise 9 -->
<?php
$balance = 1000;
$deposit = 500;
$withdraw = 200;

$balance += $deposit;
$balance -= $withdraw;

echo "Updated Balance: $balance";
?>

<!-- Exercise 10 -->
<?php
$math = 85;
$english = 90;
$science = 78;

$average = ($math + $english + $science) / 3;

if ($average >= 90) {
    $grade = "A";
} elseif ($average >= 80) {
    $grade = "B";
} elseif ($average >= 70) {
    $grade = "C";
} elseif ($average >= 60) {
    $grade = "D";
} else {
    $grade = "F";
}

echo "Average: $average, Grade: $grade";
?>

<!-- Exercise 11 -->
<?php
$amount_php = 5000;
$usd_rate = 0.018;
$eur_rate = 0.015;
$jpy_rate = 2.0;

$usd = $amount_php * $usd_rate;
$eur = $amount_php * $eur_rate;
$jpy = $amount_php * $jpy_rate;

echo "PHP $amount_php is USD $usd, EUR $eur, JPY $jpy";
?>

<!-- Exercise 12 -->
 <?php
$distance = 300; // km
$fuel_consumption = 15; // km per liter
$fuel_price = 50; // per liter

$liters_needed = $distance / $fuel_consumption;
$total_cost = $liters_needed * $fuel_price;

echo "Estimated Travel Cost: $total_cost";
?>
