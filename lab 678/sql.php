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

if (isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['login']) && isset($_POST['password']) &&
isset($_POST['phoneNumber']) && isset($_POST['email'])){
    	$query = $pdo->query("INSERT INTO `web_lab678` (name, surname, login, password, phoneNumber, email) VALUES 
	('$_POST[name]', '$_POST[surname]', '$_POST[login]', '$_POST[password]', '$_POST[phoneNumber]', '$_POST[email]')");
    	header('Location: index.php');
} else if (isset($_POST['login']) && isset($_POST['password'])){
   	$query = $pdo->prepare('SELECT `id`, `name`, `surname`, `login`, `password`, `phoneNumber`, `email` FROM `lab_678` 
WHERE `login` = :login AND `password` = :password');
   	$query->execute(array('login' => $_POST['login'], 'password' => $_POST['password']));
    	$numOfRows = $query->rowCount();
        	if ($numOfRows == 0){
            		echo "Ошибка! Проверьте вводимые логин и пароль";
} else {
        session_start();
        $row = $query->fetch(PDO::FETCH_ASSOC);
        $_SESSION['name'] = $row['name'];
        $_SESSION['surname'] = $row['surname'];
        $_SESSION['login'] = $row['login'];
        $_SESSION['password'] = $row['password'];
        $_SESSION['phoneNumber'] = $row['phoneNumber'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['id'] = $row['id'];
        $_SESSION['security'] = 323232;
        header('Location: main.php');
        }
} else if (isset($_POST['id'])){
    	$query = $pdo->query("DELETE FROM `lab_678` WHERE `id` = '$_POST[id]'");
    	session_destroy();
    	header("Location: index.php");
}