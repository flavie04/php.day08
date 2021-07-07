<?php
function modify_cookie($name, $value) {
    if (array_key_exists($name, $_COOKIE)) {
        setcookie($name, $value);
    }
}
?>