<?php
require_once "../src/templates/header.php";
require_once "../src/utilities.php"; //remember no side effects for this file!

echo "<h1> My PHP PAGE</h1>";
$arr=["Janis", "Bite", "Resnis"];
makeUnorderedList($arr);


echo"<div class='results'>". myAdder(50, 200) ." </div>";
require_once "../src/templates/footer.html";