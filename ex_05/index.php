<?php
$name = NULL;
if (array_key_exists("name", $_GET)) {
    $name = $_GET["name"];
    setcookie("name", $name,time()+30);
}
else if (array_key_exists("name", $_COOKIE)) {
    $name = $_COOKIE["name"];
}
if  ($name) {
    echo "Hello ".$name;" !\n";
}
else {
    echo "Hello platypus !\n";
}
?>