<?php

$servername="localhost";
$username="root";
$password ="";
$dbname= "uyelik1";

$conn = new mysqli($servername,$username,$password,$dbname);


if($conn -> connect_error){
  die("veri tabanı bağlantı hatası :" .$conn->connect_error);
}

else{

  echo "Bağlantı başarılı...";
}



 ?>