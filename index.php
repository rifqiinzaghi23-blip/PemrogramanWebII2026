<?php
session_start();

$page = $_GET['page'] ?? 'login';

if(!isset($_SESSION['login']) && $page != 'login'){
    header("Location: index.php?page=login");
}

switch($page){

case 'dashboard':
include "views/header.php";
include "views/dashboard.php";
break;

case 'mahasiswa':
include "views/header.php";
include "views/mahasiswa.php";
break;

case 'tugas':
include "views/header.php";
include "views/tugas.php";
break;

default:
include "views/login.php";

}

?>