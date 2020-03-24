<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
$array = array(array('1', '2', '3', '4', ''), array('5', '6', '7', '8', '9'));
function printArray($arg){
    	echo "<h4>Вывод массива данных в таблицу</h4>";
    	echo "<table border='1'>";
    foreach($arg as $value){
        echo "<tr>";
    foreach($value as $item){
        echo "<td>$item</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
function printForm(){
    $fileName = $_FILES['UpFile']['name'];
    	echo <<< HEREDOC
    <h4>Данные возврата</h4>
    <table border="1">
        <tr>
            <th>textForm</th>
            <th>sequence</th>
            <th>UpFile</th>
            <th>QUERY_STRING</th>
            <th>HTTP_USER_AGENT</th>
            <th>REMOTE_ADDR</th>
        </tr>
        <tr>
            <td>$_POST[textForm]</td>
            <td>$_POST[sequence]</td>
            <td>$fileName</td>
            <td>$_SERVER[QUERY_STRING]</td>
            <td>$_SERVER[HTTP_USER_AGENT]</td>
            <td>$_SERVER[REMOTE_ADDR]</td>
        </tr>
    </table>
HEREDOC;
}

printArray($array);

if (isset($_POST['textForm']) || isset($_POST['sequence']) || isset($_FILES['UpFile'])) {
    printForm();
}
?>