<?php
   echo "HEllo, Good Morning";

   $b = -123; // a negative number
var_dump($b);
echo "<br>";

$pass = 123456;
$confirmpass = "123456";

echo $pass===$confirmpass;

?>

<?php
$d = date("D");
if($d == "Fri"){
    echo "Have a nice weekend!";
} else{
    echo "Have a nice day!";
}
?>


<?php
$age = 20;
echo ($age < 18) ? 'Child' : 'Adult'; ?>