<?php 
session_start();

$name = filter_input(INPUT_POST, "name",FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
$message = filter_input(INPUT_POST, "message", FILTER_SANITIZE_SPECIAL_CHARS);

if($email) {  
    $expiracao = time() + (86400 * 38);
    setcookie('name', $name, $expiraçao);
    
    echo 'NOME: '.$name.'</br>';
    echo 'EMAIL: '.$email.'</br>';
    
} else {
    header('Location: index.php');
    exit;
}
?>