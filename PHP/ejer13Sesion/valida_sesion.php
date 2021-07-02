<?php

session_start();

if (!isset($_SESSION["session_id"])) {
    header('Location: ../index.html');
    exit();
}

?>