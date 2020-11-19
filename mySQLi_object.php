<?php

$servername="loacalhost";
$username="dipto";
$password="dipto";
$dbname="testing";

$conn = new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_errno){
    die("Connection Falied :" . $conn->connect_error);
}
$sql = "SELECT * FROM students";
$result = $conn->query($sql);

if ($result->num_rows > 0){
    while($row =$result->fetch_assoc()){
        echo "Id: {$row["id"]} - Name: {$row["student_name"]} - Age: {$row["age"]} \n";
    }
}else{
    echo "No result found.";
}
$conn->close();