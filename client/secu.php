<?php
require_once '../connbd.php';
session_start();
if(!isset($_SESSION['user']))
header('location:../login.php');
?>