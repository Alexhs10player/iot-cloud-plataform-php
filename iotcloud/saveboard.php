<?php
 $serverName ="localhost";
 $userName = 'enriquecermar';
 include 'password.php';
 $dbName = 'enriquecermar';


 $name = $_GET['name'];
 $description = $_GET['description'];
 $sensor1 = $_GET['sensor1']; 
 $sensor2 = $_GET['sensor2'];
 $nosensors = $_GET['noSensors']; 

//Create connection
$conn = new mysqli($serverName, $userName, $password, $dbName);

//Checks connection
if ($conn -> connect_error) {
    die("Connection failed: " . $conn->Connect_error);
}

 $sql = 'INSERT INTO ID (Name, Description, Sensor1, Sensor2, Nosensor)
 VALUES ($name, $description, $sensor1, $sensor2, $noSensors)'
  
  //Te dice que la conexioón se ha creado
  if ($conn->query($sql) = TRUE){
    echo "New record created succesfully";
  }else{
    echo "Error: " . $sql  . "<br>" . $conn->error;
  }
  $conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">

    <title>Board saved</title>
</head>
<body>
    
</body>
</html>