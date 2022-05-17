<?php
//close session_start
if (session_start()) {
    session_unset();
    session_destroy();
}

if (session_destroy()) {
    header("Location:index.php");
}
