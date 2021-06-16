 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="yatayaçılır.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <title>Anasayfa</title>

</head>
<style>
*{
  margin: 0px;
  padding: 0px;
}
body{
background: 	white;
height: 1250px;

}
.ft{
    position: absolute;
    z-index:1;
    display: grid;
    left: 150px;
    margin-top: 20px;
    gap: 50px;
    width: 1300px;
    height: 100px;
    grid-template-columns: repeat(10,80px);
    grid-template-rows: repeat(5,200px);
  }


  .ft div:nth-child(even){
    background-color: rgba(15, 15, 15, 0.844);
    border-radius: 20px;
    
  }
  .ft img{
    width: 100%;
    height: 100%;
    object-fit: cover;
   border-radius: 20px;
  }
  
 .ft div:nth-child(1){
    grid-column: 1/11;
    grid-row:1/3 ; 
    
   border-radius: 20px;}
   
 .ft div:nth-child(2){
    grid-column: 1/6;
    grid-row:3/5 ; 
   border-radius: 20px;
   
   background-color: white;
   }
    
 .ft div:nth-child(3){
    grid-column: 6/11;
    grid-row: 3/5;  
   background-color: white;
   border-radius: 20px;
 }

a{
  text-decoration: none;
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
  
    <li><b> İletişim</b> 
    <ul>
      <li><a href="https://www.instagram.com/koylu.s/?hl=tr">İnstagram</a></li>
      <li><a href="mailto:sefamrte.1525@gmail.com">E-posta</a></li>
      <li><a href="https://www.linkedin.com/in/sefa-mert-k%C3%B6yl%C3%BC-54662720a/">Linkedin</a></li>
    </ul>      
    </li>
</nav>
<div class="ft"> 
<div>
  <iframe  src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d6354048.188095166!2d35.174414!3d38.95682!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1str!2str!4v1623406298692!5m2!1str!2str" width="1250" height="450" style="border-radius: 20px;" allowfullscreen="" loading="lazy"></iframe>

</div>
  <div ><a href="Anasayfa-arduıno.php">
    <img src="FOTOĞRAFLAR/arduinoo.png"  style="width: 600px;" alt="">
    <center>
    <h1 class="ardo"><span style="color:lightseagreen"> ARDUINO </span> İLE İLGİNÇ PROJELERİ GERÇEKLEŞTİRME VAKTİ</h1> 
  </center>
</a>   
</div>
  <div><a href="Anasayfa-raspberryPi.php">
  <img src="FOTOĞRAFLAR/raspberrypı.png" alt="">
   <center>
  <h1>HAYALLERİNİ GERÇEKLEŞTİRMEK İÇİN <span style="color:  mediumorchid;"> RASPBERRY PI </span> SENİ BEKLİYOR </h1>
</center> 
</a>
</div>
 
    
</div>
</body>
</html>