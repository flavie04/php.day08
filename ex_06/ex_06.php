<?php
function remove_cookie ($cookie) {
    if (array_key_exists($cookie, $_COOKIE)) {
        unset($_COOKIE[$cookie]);
        setcookie($cookie,"",time() -3600);
    }
}
?>