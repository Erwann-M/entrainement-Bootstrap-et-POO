<?php

session_start();

$_SESSION['lastname'] = null;
$_SESSION['name'] = null;

header('Location: ../php/compte.php');