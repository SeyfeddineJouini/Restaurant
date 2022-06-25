<?php
session_start();
require_once '../connbd.php';
if(!isset($_SESSION['user']) or $_SESSION['user']['type']==0)
header('location:../login.php');
?>