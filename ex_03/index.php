<?php
$name = NULL;
session_start();
if (array_key_exists("name", $_GET)) {
    $name = $_GET["name"];
    $_SESSION["name"]=$name;
}
else if (array_key_exists("name", $SESSION)) {
    $name = $SESSION["name"];
}
if  ($name) {
    echo "Hello ".$name;" !\n";
}
else {
    echo "Hello platypus !\n";
}
?>