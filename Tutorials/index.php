<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        // Question 1
        // echo "Queston 1 </br>";
        // echo "Hello World! </br></br>";

        // // Question 2
        // echo "Queston 2 </br>"
        // $marks = 99.9; //Number Variable
        // $courseName = "ISA"; //String Variable
        // $hasCompleted = True;

        // if ($hasCompleted){
        //     echo "You got $marks in $courseName";
        // } elseif (!$hasCompleted) {
        //     echo "The course hasn't finished!!!";
        // }
        // else {
        //     echo "Hello!!!";
        // }

        // Questio 3
        // echo "Queston 3 </br>";
        // if ($marks >= 70) {
        //     echo "The grade is A";
        // } elseif ($marks < 70 && $marks > 60) {
        //     echo "The grade is B";
        // } elseif ($marks < 70 && $marks > 60) {
        //     echo "The grade is B";
        // } elseif ($marks > 40 && $marks < 60) {
        //     echo "The grade is C";
        // } else {
        //     echo "You failed!";
        // }

        // Question 4
        // echo "Queston 4 </br>";
        // $day = "Monday";

        // if ($day == "Monday") {
        //     echo "Laugh on Monday, laugh for danger.";
        // } elseif ($day == "Tuesday") {
        //     echo "Laugh on Tuesday, smile at a stranger.";
        // } elseif ($day == "Wednesday") {
        //     echo "Laugh on Wednesday, laugh for a letter.";
        // } elseif ($day == "Thursday") {
        //     echo "Laugh on Thursday, something better.";
        // } elseif ($day == "Friday") {
        //     echo "Laugh on Friday, laugh for sorrow.";
        // } elseif ($day == "Saturday") {
        //     echo "Laugh on Saturday, joy tomorrow";
        // } elseif ($day == "Sunday") {
        //     echo "Laugh on Sunday, smile for nothing!!!";
        // } else {
        //     echo "Invalid Day!";
        // }

    //    Question 5
    // function checkPalindrome($string) {
    //     $toLowerString = strtolower($string);
    //     $toLowerStringWithoutSpace = str_replace($toLowerString, " ", "");
    //     $revString = strrev($toLowerString);
    //     $withoutSpace = str_replace($revString, " ", "");
    //     if ($toLowerStringWithoutSpace == $withoutSpace) {
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }


    // Using If else
    // if (checkPalindrome("nureses run")) {
    //     echo "It is Palindrome!";
    // } else {
    //     echo "It is not Palindrome!";
    // }

    // Using Ternary Operator
    // echo (checkPalindrome("Madam")) ? "It is Palindrome" : "It is Not Palindrome";

    // Prime Number using For loop
    // for ($i = 2; $i<= 100; $i++) {
    //     for ($j = 2; $j < $i; $j++) {
    //         if ($i % $j == 0) continue 2;
    //     }
    //     echo $i. "";
    //     echo "<br>";
    // }
   

    // Prime Number using while loop
    //  $i = 2;
    //  while ($i <= 100) {
    //     $j = 2;
    //     $i++;
    //     while ($j < $i) {
    //         if($i % $j == 0) {
    //             continue 2;
    //         }
    //         $j++;
    //     }
    //     echo $i. "";
    //     echo "<br>";
    //  }

    // Prime Number using do while
    //  $i = 2;
    //  do {
    //     $j = 2;
    //     $i++;
    //     do {
    //         if($i % $j == 0) {
    //             continue 2;
    //         }
    //         $j++;
    //     } while ($j < $i);
    //     echo $i. "";
    //     echo "<br>";
    //  } while ($i < 100);

    //  $i = 1;
    // do {
    //     $j = 2;
    //     $i++;
    //     while ($j < $i) {
    //         if ($i $ $j == 0) {
    //             continue 2;
    //         }
    //         $j++;
    //     }
    //     echo $i. "";
    // }
    // while ($i < 100)

    // Array

    // $arrayName = array(1,2,3,4,5, 6, 7, 8, 9, 10);
    
    // foreach ($arrayName as $array) {
    //     // echo $array;
    //     if ($array % 2 == 0) {
    //         echo $array . " ";
    //     }
    // }

    //QUESTION 8 ARRAY
    // Associative array: days of the week => activities
    // $activities = [
    //     "Monday" => "Go to gym",
    //     "Tuesday" => "Attend coding class",
    //     "Wednesday" => "Grocery shopping",
    //     "Thursday" => "Read a book",
    //     "Friday" => "Watch a movie",
    //     "Saturday" => "Hang out with friends",
    //     "Sunday" => "Rest and relax"
    // ];

    // foreach ($activities as $day => $activity) {
    //     $today = "Sunday";
    //     if ($day == $today) {
    //         echo $activities[$day];
    //     }

    // }   



    //QUESTION 9 ARRAY
    $students = [
        "Aashutosh" => 100,
        "Bob" => 92,
        "Charlie" => 78,
        "David" => 95,
        "Eva" => 88
    ];

    // Print Students Name

    // foreach ($students as $student => $mark) {
    //     echo $student. "<br>"; 
    // }

    // Print Highest Mark

    $topper = "";
    $higestMarks = 0;

    foreach ($students as $student => $mark) {
       if ($higestMarks < $mark) {
            $higestMarks = $mark;
            $topper = $student;
       }
    }

    echo "The topper is $topper" . ":" . "$higestMarks";


    



    // Question 10
    // $a = array('One' => 'Cat', 'Two' => 'Dog', 'Three' =>'Elephant', 'Four' => 'fox');

    // foreach ($a as $number => $animals) {
    //     echo $number. " : ". $animals. "<br>";
    // }

?>

</body>

</html>