<?php

$Database = new Database;
$qry = "INSERT INTO `client` (`N_Client`, `Email`, `Phone`, `Password` , `Age`, `Gender`) VALUES (:name, :email, :phone, :pass, :age, :gender)";
$parm = array(
    ':name' => trim($_POST['name']),
    ':email' => trim($_POST['email']),
    ':phone' => trim($_POST['phone']),
    ':age' => trim($_POST['date']),
    ':pass' => md5(trim($_POST['password'])),
    ':gender' => trim($_POST['gender']),
);
$Database->insertData($qry, $parm);
header('Location: ' .  'login.php');
