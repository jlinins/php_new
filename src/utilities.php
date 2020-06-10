<?php
function makeUnorderedList($myArr){
    echo"<ul>";
foreach ($myArr as $key=> $value){
    echo"<li> Item key: $key is $value </li>";
}

    echo"</ul>";
}
//dont call function. Use required in other page

function myAdder($a, $b){
    return $a +$b; 
}

