<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
require_once 'ID.php';
	echo <<< HEREDOC
    	<h2>������� ID</h2>
    	<form action="index.php" method="get">
        ���: <input type="text" name="name" required="required" ><br><br>
        �������: <input type="text" name="surname" required="required" ><br><br>
        �������: <input type="number" name="age" required="required" ><br><br>
        ���: <br> 
        <input type="radio" name="sex" required="required" value="male"> ���<br>
        <input type="radio" name="sex" required="required" value="female"> ���<br><br>
	�����: <input type="number" name="age" required="required" ><br><br>
        <button type="submit">�������</button>
    </form>   
HEREDOC;

if(isset($_GET['name']) && isset($_GET['surname']) && isset($_GET['age']) && isset($_GET['sex']) && isset($_GET['number'])){
    $id = new ID ($_GET['age'], $_GET['sex'], $_GET['number']);
    $id -> setName($_GET['name']);
    $id -> setSurname($_GET['surname']);

    $id -> printObj();
}


?>