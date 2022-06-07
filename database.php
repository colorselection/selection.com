<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
   define("HOST", "localhost");
   define("DB_NAME", "siteweb");
   define("username", "root@");
   define("password", "");

   $servername="localhost";
   $username="root@";
   $dbname= "siteweb";
   $password="";
 
try{ 
   
    $conn = new mysqli($servername, $username, $password, $dbname);

}
catch(PDOException $e){     
    echo $e;
}

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  $sql = "UPDATE user SET couleur='red' WHERE id=2";
  
  if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . $conn->error;
  }
  
  $_SESSION["sucess"] = 1;
    header('Location: index.php');
}

  ?>






