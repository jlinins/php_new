<?php
$arr= [1,2,3,4,5,6, "Janis"];
var_dump($arr);
echo $arr[4];
echo "<hr>";
echo "Last elemnet is" . $arr[count($arr)-1];  // last element of $arr
echo "<hr>";
echo "<div>";

//ONE WAY
// for($i= 0; $i<count($arr); $i++){
//     echo "<li> Item with index $i " . $arr[$i] . "</li>";
// }

//SECOND WAY
foreach($arr as $key =>$value ){
    echo "<li> Item with index $key  is $value </li>";
 }
echo "<hr>";
echo "<div>";
//without index 
foreach ($arr as $item){
    echo "<li> My item: $item </li>";
}

// <<<<<<<<<<<<<<<<<<<<<<<<<<<< KEY IS 1 , "LOL " AND VALUE "CAT JANIS UTT">>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
echo "<div>";
$array= [
    1=> 777,
    "lol"=>"cat",
    "bar"=>"foo",
    "name"=>"Janis",
    7=> 700,
];

foreach ($array as $key => $value) {
    echo "<p><br> my key $key corresponds to $value</p>";
}
echo "</div>";