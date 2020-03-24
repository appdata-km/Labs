<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
require_once 'ID.php';
	echo <<< HEREDOC
    	<h2>Создать ID</h2>
    	<form action="index.php" method="get">
        Имя: <input type="text" name="name" required="required" ><br><br>
        Фамилия: <input type="text" name="surname" required="required" ><br><br>
        Возраст: <input type="number" name="age" required="required" ><br><br>
        Пол: <br> 
        <input type="radio" name="sex" required="required" value="male"> муж<br>
        <input type="radio" name="sex" required="required" value="female"> жен<br><br>
	Номер: <input type="number" name="age" required="required" ><br><br>
        <button type="submit">Создать</button>
    </form>   
HEREDOC;

if(isset($_GET['name']) && isset($_GET['surname']) && isset($_GET['age']) && isset($_GET['sex']) && isset($_GET['number'])){
    $id = new ID ($_GET['age'], $_GET['sex'], $_GET['number']);
    $id -> setName($_GET['name']);
    $id -> setSurname($_GET['surname']);

    $id -> printObj();
}


?>