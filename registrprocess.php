<?php 

include "conection.php";


$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$age = $_POST['age'];
$batch = $_POST['batch'];

$result= mysqli_query($connect, "INSERT INTO student (firstname,lastname,email,age,batch) VALUES ('$firstname','$lastname','$email','$age','$batch')");

if ($result) {
	echo "data insert success";
}else {
	echo "data not insert";
}








?>
<a href="view.php">view result</a>