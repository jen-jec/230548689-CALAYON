<?php
// Exercise 1: Variables and Operators
$a = 15;
$b = 7;

echo "Sum: " . ($a + $b) . "<br>";
echo "Difference: " . ($a - $b) . "<br>";
echo "Product: " . ($a * $b) . "<br>";
echo "Quotient: " . ($a / $b) . "<br>";

echo "<br>";

// Exercise 2: Conditional Statements
$number = 10;

if ($number % 2 == 0) {
echo "$number is even.<br>";
} else {
echo "$number is odd.<br>";
}

if ($number > 0) {
echo "$number is positive.<br>";
} elseif ($number < 0) {
echo "$number is negative.<br>";
} else {
echo "$number is zero.<br>";
}

echo "<br>";

// Exercise 3: Loops
echo "FizzBuzz:<br>";
for ($i = 1; $i <= 100; $i++) {
if ($i % 3 == 0 && $i % 5 == 0) {
echo "FizzBuzz ";
} elseif ($i % 3 == 0) {
echo "Fizz ";
} elseif ($i % 5 == 0) {
echo "Buzz ";
} else {
echo $i . " ";
}
}
echo "<br><br>";

echo "Fibonacci (Even Numbers):<br>";
$fibonacci = [0, 1];
$i = 2;
while (count($fibonacci) < 10) {
$fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
$i++;
}

foreach ($fibonacci as $num) {
if ($num % 2 == 0) {
echo $num . " ";
}
}
echo "<br><br>";

// Exercise 4: Functions
function greet($name) {
return "Hello, " . $name . "!";
}

function square($number) {
return $number * $number;
}

echo greet("John") . "<br>";
echo "Square of 5: " . square(5) . "<br>";

echo "<br>";
?>

<!-- Exercise 5: Form Handling -->
<form method="post">
Enter text: <input type="text" name="text">
<input type="submit" value="Submit">
</form>

<?php
if (isset($_POST['text'])) {
$submittedText = $_POST['text'];
echo "You submitted: " . htmlspecialchars($submittedText);
}
?>