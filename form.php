<?php
session_start();
require_once 'config/connection.php';

unset($_SESSION['fio']);
unset($_SESSION['adress']);
unset($_SESSION['phone']);
unset($_SESSION['email']);

unset($_SESSION['error_fio']);
unset($_SESSION['error_phone']);
unset($_SESSION['error_email']);
unset($_SESSION['error_all_empty']);


$fio =htmlspecialchars(trim ($_POST['fio']));
$adress =htmlspecialchars(trim ($_POST['adress']));
$phone =htmlspecialchars(trim ($_POST['phone']));
$email =htmlspecialchars(trim ($_POST['email']));

$_SESSION['fio']=$fio;
$_SESSION['adress']=$adress;
$_SESSION['phone']=$phone;
$_SESSION['email']=$email;

function redirect(){
    header('location: index.php');
    exit();
}
if(!empty($_POST)){
    if(strlen($fio)<=1){
        $_SESSION['error_fio'] = "Введите ФИО!";
        redirect();
    }
    else if(strlen($phone)<=0){
        $_SESSION['error_phone'] = "Введите номер мобильного телефона!";
        redirect();
    }
    else if(strlen($email)<=0 || strpos($email,'@')===false){
        $_SESSION['error_email'] = "Введите эл.почту!";
        redirect();
    }
    else{

        $info = $conn->prepare('INSERT INTO `users` VALUES (NUll,:fio,:adress,:phone,:email)');
        $info->execute(array('fio' => $fio,'adress' => $adress,'phone' => $phone,'email' => $email));
        $add = $info->fetchAll(PDO::FETCH_ASSOC);

        $info = $conn->prepare('SELECT * FROM `users`');
        $info->execute();
        $data = $info->fetchAll(PDO::FETCH_ASSOC);

        $_SESSION['data'] = $data;
        redirect();
    }
}


