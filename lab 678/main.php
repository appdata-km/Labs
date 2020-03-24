<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
session_start();
	$host = '127.0.0.1';
	$db = 'DATABASE';
	$user = 'root';
	$password = 'root';
	$charset = 'utf8';
	$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
	$pdo = new PDO($dsn, $user, $password);

if(isset($_SESSION['security']) && $_SESSION['security'] == 323232){
    	echo "WELCOME, $_SESSION[name] $_SESSION[surname]!<br><br>";
    	echo <<< HEREDOC
<form method="post">
    	<input name="name" type="text" value="$_SESSION[name]">Имя<br> 
    	<input name="surname" type="text" value="$_SESSION[surname]">Фамилия<br> 
    	<input name="login" type="text" value="$_SESSION[login]">Логин<br> 
    	<input name="password" type="password" maxlength="20">Пароль<br> 
    	<input name="phone" type="text" value="$_SESSION[phoneNumber]">Номер телефона<br> 
    	<input name="mail" type="text" value="$_SESSION[email]">E-mail<br><br>
    	<button type="submit" formaction="content.php">Обновить профиль</button>
    	<button type="submit" formaction="logout.php">Выход</button>
</form>
<form method="post">
    	<input name="id" type="number" value="$_SESSION[id]" hidden="hidden">
    	<button type="submit" formaction="sql.php">Удалить учётную запись</button>
</form>
HEREDOC;

    	if (isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['login']) && isset($_POST['password']) &&
        	isset($_POST['phoneNumber']) && isset($_POST['email'])){
        	$query = $pdo->query("UPDATE `lab_678` SET `password` = '$_POST[password]' WHERE `id` = '$_SESSION[id]'");
        	echo "Пароль изменён";
    }
}