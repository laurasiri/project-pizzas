<?php
$urs=$_POST[ "username"];
$urs=$_POST["password"];
if(((strcmp($usr,"maria")==0)||(strcmp($usr,"maria@twitter.com"))==0)&&(strcmp($pass,"123456")==0))
{
?>
<h1>"bienvenidos"</h1>
<?php
}
else{
 ?>
 <h1>Denegado</h1>   
 <?php
}
?>