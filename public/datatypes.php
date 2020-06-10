<!-- $ definē mainīgos -->

<?php
$a =7;
$b=3.45123;
$name= "Janis";
$isSunnny=false;
$something=null;
$cat="Šņurkabimba";
$myStr="ķepā kaķis";

// var_dump atkļūdošanai, what type of
var_dump($a,$b,$name,$isSunnny,$something ); 
echo "<hr>";
echo $name .  " is "  .  strlen($name). " characters long ";
echo"<hr>";
echo "letter a is found" . mb_substr_count($myStr, "a").  " times ";
echo"<hr>";
echo substr($myStr, 2, 5);


