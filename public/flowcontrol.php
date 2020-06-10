<?php
// IMPORTING 
include "../src//templates/header.php";
$a =10;
if ($a>5){
    echo " Wow $a is larger than 5"; 
} elseif ($a===10){
    echo " Is $a  10";
}else{
    echo " Is $a  smaller";
}

//SWITCH STATEMENT
$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}
$i=10;
while ($i>0){
    echo "<hr> $i";
    $i--;
}



include "../src//templates/footer.html";