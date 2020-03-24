<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
if(isset($_POST['textForm']) | isset($_POST['sequence'])){
	echo "Uploaded POST<br>";
    	echo "textForm=" . $_POST['textForm'] . "<br>";
   	echo "sequence=" . $_POST['sequence'];
if(isset($_FILES['UpFile'])){
	$fileName = $_FILES['UpFile']['name'];
        copy($_FILES['UpFile']['tmp_name'], $_FILES['UpFile']['name']);
       	echo "<br> $fileName uploaded";
}
} else {
	echo "Uploaded GET<br>";
    	echo "textForm=" . $_GET['textForm'] . "<br>";
    	echo "sequence=" . $_GET['sequence'];
}