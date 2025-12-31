<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aashutosh Chaudhary</title>
</head>

<body>
    <?php

    // Prime Number
    
    for ($i = 2; $i<= 100; $i++) {
        for ($j = 2; $j < $i; $j++) {
            if ($i % $j == 0) continue 2;
        }
        echo $i. "";
        echo "<br>";
    }

    // Question 2

    function checkPalindrome($string) {
    $clean = strtolower(str_replace(" ", "", $string));
    $rev   = strrev($clean);

    return $clean === $rev;
    }

    echo (checkPalindrome("Madam")) ? "It is Palindrome" : "It is Not Palindrome";
    echo (checkPalindrome("Hello")) ? "It is Palindrome" : "It is Not Palindrome";

    // Question 3

    $a = array('One' => 'Cat', 'Two' => 'Dog', 'Three' =>'Elephant', 'Four' => 'fox');

    foreach ($a as $number => $animals) {
        echo $number. " : ". $animals. "<br>";
    }
?>

</body>

</html>