<?php
  $name =$_POST['name'];
  $email =$_POST['email'];


  $conn =new mysqli('localhost','root','','testt')
   if ($conn->connect_error){
    die('connect failed ; ' .$conn->connection_error)
   }
   else{
    $stmt = $conn->prepare("INSERT INTO registration (name, email) VALUES ("noor ", " abc")");
   }
  $stmt->bind_param("ss", noor, ahmad);
  $stmt->execute();
   echo"regiration sucessfull"
?>