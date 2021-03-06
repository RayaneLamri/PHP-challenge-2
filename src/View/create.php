<?php

use App\Helper\Form;
use App\Helper\User;
use App\Model\Connect;

session_start();


$isemptyUsername = empty($_POST['username']);
$isemptyEmail = empty($_POST['email']);
$isemptyPassword = empty($_POST['password']);
$issetVar = isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']);
$filterUsername = isset($_POST['username']) ? filter_var($_POST['username'], FILTER_SANITIZE_STRING) : null;
$filterEmail = isset($_POST['email']) ? filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) : null;
$filterPassword = isset($_POST['password']) ? trim(filter_var($_POST['password'], FILTER_SANITIZE_STRING)) : null;


$form = new Form();

if (isset($_SESSION['idUser'])){
    header('location: home');
}else     echo $form->button('se connecter','home');

$form->openForm('post', '');
echo $form->textarea('username', '');
if ($isemptyUsername) {
    echo "<p>cette valeur est obligatoire </p>";
}
echo $form->textarea('email', '');
if ($filterEmail) echo "<p>cest le bon format</p>";
else echo "<p>cest pas le bon format</p>";
if ($isemptyEmail) {
    echo "<p>cette valeur est obligatoire </p>";
}
echo $form->textarea('password', '');
if ($isemptyPassword) {
    echo "<p>cette valeur est obligatoire </p>";
}
echo $form->submit('envoyer');
$user = new User(trim($_POST['username']), trim($_POST['email']), password_hash($_POST['password'],PASSWORD_DEFAULT));
$form->closeForm();
$user->createUser();

?>
