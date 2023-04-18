<?php
 $name = $_POST['name'];
 $email = $_POST['email'];

 $conn = new mysqli('localhost','root','','registeration');
 if($conn->connect_error){
    die('connection failed : ' .$conn->connect_error);
 }else {
    $stmt = $conn->prepare("insert into inputs(name,email)values(?,?)");
    $stmt->bind_param("ss",$name,$email);
    $stmt->execute();
    echo "Registeration Successful";
    $stmt->close();
    $conn->close();
 }
    
?>