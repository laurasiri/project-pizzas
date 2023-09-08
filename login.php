<?php
include_once("config_login.php");
try{
$pdo= new PDO("mysql:host=".SERVER_NAME .";dbname=".DATABASE_NAME,USER_NAME,PASSWORD);
 // set the PDO error mode to exception
 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "conexion existosa";
}
catch(PDOException $e){
    echo "conexion fallida". $e->getMessage();
}
$usr=$_POST['username'];
$pass=$_POST['password'];
$hashed_pass=hash('sha256',$pass);
$sql="SELECT * from users WHERE ((username =:usr) or (email =:usr)) AND (PASSWORD =:hashed_pass) AND ( active ='si')";
$stmt=$pdo->prepare($sql);
$stmt->bindValve(':usr',$usr);
$stmt->bindValve(':hashed_pass',$hashed_pass);
$stmt->execute();
?>
