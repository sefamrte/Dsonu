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
  background: white;
}
.ft{
    position: absolute;
    z-index:1;
    display: grid;
    left: 300px;
    margin-top: 20px;
    gap: 20px;
    width: 900px;
    height: 1250px;
    grid-template-columns: repeat(9,1fr);
    grid-template-rows: repeat(4,310px);
  }

.ft div:nth-child(even){
    background-color: rgba(15, 15, 15, 0.844);
    border-radius: 20px;
    
  
  }
  .ft img{
    width: 100%;
    height: 100%;
    object-fit: cover;
    filter: brightness(0.6) grayscale(0.7);  
    transition: 1s;
   border-radius: 20px;
  }
  .ft img:hover{
    filter: brightness(1) grayscale(0);
      
  
  }
.ft div:nth-child(1){
    grid-column: 1/10;
    grid-row: 1/1.5;  
 }
 .ft div:nth-child(2){
    grid-column: 1/10;  
 }
 .ft div:nth-child(3){
    grid-column: 1/5;  
 }
 .ft div:nth-child(4){
    grid-column: 5/10;  
 }
 .ft div:nth-child(5){
    grid-column: 1/4;  
 }
 .ft div:nth-child(6){
    grid-column: 4/7;  
 }
 .ft div:nth-child(7){
    grid-column: 7/10;  
 }

</style>
<body>
  <nav>
    <ul id="üstmenü">
    
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
  <div class="ft"> 
  <div><img src="FOTOĞRAFLAR/selin7.jpg" alt="#" style="width: 650px;"></div>
  <div a href=""></a><img src="FOTOĞRAFLAR/Fotoilk.jpeg"></div>
  <div><img src="FOTOĞRAFLAR/projefoto2.jpeg"></div>
  <div><img src="FOTOĞRAFLAR/mesf.jpeg"></div>
  <div><img src="FOTOĞRAFLAR/WhatsApp Image 2021-04-21 at 09.35.38.jpeg"></div>
  <div><img src="FOTOĞRAFLAR/WhatsApp Image 2021-04-21 at 09.35.39 (1).jpeg"></div>
  <div><img src="FOTOĞRAFLAR/WhatsApp Image 2021-04-21 at 09.35.39.jpeg"></div>
 
    
</div>

</body>
</html>