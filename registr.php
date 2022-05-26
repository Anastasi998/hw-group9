<?php
$login_user="admin";
$password_user="admin";
$login=$_POST['login'];
$password=$_POST['password'];
if( ($login_user == $login) and ($password_user == $password) ) {
echo "Добро пожаловать";
echo '<a href="1site.php"> на главную страницу</a>';
}
else
{
echo "Не правильный логин или пароль";
}
?>