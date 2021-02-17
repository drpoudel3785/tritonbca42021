<?php
// Define an indexed array
$colors = array("Red", "Green", "Blue", "Black");

echo $colors[3];

echo "<hr>";
for($i=0; $i<3; $i++)
{
    echo $colors[$i]."<br>";
}
echo "<hr>";


foreach($colors as $item)
{
    echo $item."<br>";
}
?>

<?php
// Define an associative array
$ages = array("Peter"=>22, "Clark"=>32, "John"=>28);

foreach($ages as $n=>$a)
{
    echo $n. " is ". $a." Years old .<br>";
}

?>

<?php
// Define a multidimensional array
$contacts = array(
    array(
        "name" => "Peter Parker",
        "email" => "peterparker@mail.com",
    ),
    array(
        "name" => "Clark Kent",
        "email" => "clarkkent@mail.com",
    ),
    array(
        "name" => "Harry Potter",
        "email" => "harrypotter@mail.com",
    )
);
// Access nested value
echo "Peter Parker's Email-id is: " . $contacts[0]["email"];

//Expected output is
/*  Member 1
    Name : Peter Praker
    Email :  Peterparker@gmail.com 
*/
?>




