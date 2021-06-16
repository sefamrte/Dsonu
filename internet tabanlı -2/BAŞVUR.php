<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="yatayaçılır.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <title>Anasayfa</title>
</head>
<style>
  body{
    background-color: lightgrey;

  }
form{
  margin-left: 0px;
}
table{
  border-radius: 20px;
  background-color: lightslategray;

  margin-top: 10px;
color: black;
}


</style>
<body>
  <nav>
    <ul id="üstmenü">
    
  <div id="solüst"> <font> <strong> TEKNO-SMK </strong> </font>  
    <i class="fas fa-search"></i></div>
  
      <li><a href="ANASAYFA.php"> <b> Anasayfa </b></a></li>
      <li><a href="BENKİMİM.php"><b> Ben Kimim? </b></a>
      </li>
      <li><a href="GALERİ.php"><b> Galeri</b></a>
       <ul>
          <li><a href="FOTOĞRAFLAR.php"><b> Fotoğraflar</b></a></li>
          <li><a href="VİDEOLAR.php"><b> Videolar</b></a></li> 
        </ul>
        </li>
    
       
        <li><a href="##"> <b> Bize Katıl </b> </a>
          <ul>
      <li><a href="BAŞVUR.php"><b> Başvur</b></a></li>
  
      <li><a href="ANKET.php"><b> Anketimize Katıl</b></a></li>
      </ul>
      </li>
      <li><b> İletişim</b></a>
      <ul>
        <li><a href="https://www.instagram.com/koylu.s/?hl=tr">İnstagram</a></li>
        <li><a href="mailto:sefamrte.1525@gmail.com">E-posta</a></li>
        <li><a href="https://www.linkedin.com/in/sefa-mert-k%C3%B6yl%C3%BC-54662720a/">Linkedin</a></li>
               </ul>      
  </nav>

  <br><br><br><br><br><br>
    <center>
<form class="" action="BAŞVUR.php" method="POST">
  <table width ="1500" height="250" bgcolor="lightgrey " >
      <tr>
        <td>
          <fieldset>  
            <legend> Kişisel Bilgileri</legend>
<br><br><br>         
         Ad: <input type="text" name="Adi">
         Soyad:<input type="text" name="Soyadi">
        
         E-mail:<input type="text" name="Mail_Adresi">
        
        Parola: <input type="password" name="Parola">
       
        Okul Adı: <input type="text" name="Okul_Adi">
        Bölüm - Sınıf: <input type="text" name="Bolum">
        <br><br><br>
      <br>  <a href="ANASAYFA.php">   <input  type="button"  name="kaydet"  value="Kaydet" > </a> 
     
        </fieldset>
        </td>
      </tr>
    </table>

    </form>
</center> 
  </body>
</html>



<?php

require_once "connection.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){

  $Adi= $_POST['Adi'];
  $Soyadi= $_POST['Soyadi'];
  $Mail_Adresi= $_POST['Mail_Adresi'];
  $Parola= $_POST['Parola'];
  $Okul_Adi= $_POST['Okul_Adi'];
  $Bolum= $_POST['Bolum'];

  $Parola = password_hash($Parola,PASSWORD_DEFAULT);
  if(isset($_POST['kaydet'])){

    $sql = "INSERT INTO uyelik_kayit(Adi,Soyadi,Mail_Adresi,Parola,Okul_Adi,Bolum) VALUES ('$Adi','$Soyadi','$Mail_Adresi','$Parola','$Okul_Adi','$Bolum')";
    if($conn->query($sql) === TRUE){
  
    echo "Kayıt başarıyla eklendi...";

    }
    else{

      echo "Hata: ".$conn->error;
    }
      }
    }
    $conn->close();
 ?>