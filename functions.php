
<?php
// Defining function

$greet = "Hello World!";

function test(){
    global $greet;
    echo $greet;
}
 
test(); // Outputs: Hello World!
 
echo $greet; // Generate undefined variable error
?>

<?php
// Defining function
function whatIsToday(){
    echo "Today is " . date('l');
}

//parameterized functions with no return type
function getSum($num1, $num2){
    $sum = $num1 + $num2;
    echo "Sum of the two numbers $num1 and $num2 is : $sum";
  }
   

  // Defining function Optional Parameter and Default Values
function customFont($font, $size=1.5){
    echo "<p style=\"font-family: $font; font-size: {$size}em;\">Hello, world!</p>";
}


// Defining function
function getSum1($num1, $num2){
    $total = $num1 + $num2;
    return $total;
}
 
// Printing returned value
echo "The Sum is ".getSum1(5, 10); // Outputs: 15


 
// Calling function
customFont("Arial", 2);
customFont("Times", 3);
customFont("Courier", 4);


// Calling function
whatIsToday();


  // Calling function
  getSum(10, 20);


?>