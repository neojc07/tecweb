<?php
    echo $_SERVER['SERVER_SIGNATURE'];
    echo '<br>';
    echo $_SERVER['HTTP_USER_AGENT'];
    echo '<br>';
    echo $_SERVER['HTTP_ACCEPT_LANGUAGE'];
    echo '<br>';
    echo substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
?>