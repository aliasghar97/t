<?php

    header("Access-Control-Allow-Origin: *");
//create by XP AMIR
$servername = "";

$username = "";

$password = "";

$dbname = "";

$mysql = mysqli_connect($servername, $username, $password, $dbname);

$result_array = array();
//create by XP AMIR
$sql = "SELECT Test, Test1 FROM Sketch ";
    
    $result = $mysql->query($sql);
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            array_push($result_array, $row);
        }
    }
    
    echo json_encode($result_array);
    $mysql->close();
    
    
?>
