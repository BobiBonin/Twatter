<?php
session_start();

require_once "../model/userDao.php";

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $logged_mail = $_SESSION["email"];
    $user = getUserInfoByEmail($logged_mail);
    echo json_encode($user);
}