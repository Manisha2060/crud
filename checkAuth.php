<?php
session_start();
if (isset($_SESSION['start_time']) && (time() - $_SESSION['start_time'] > 1200)) {
    session_destroy();
}
if (!isset($_SESSION['name']) ) {

    header("Location: login.php");
    exit;
}