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
background-color: rgb(255, 255, 255);  }
.grid{
    position: absolute;
    z-index:1;
    display: grid;
    left: 150px;
    margin-top: 20px;
    gap: 20px;
    width: 1200px;
    height: 1000px;
    grid-template-columns: repeat(9,1fr);
    grid-template-rows: repeat(4,310px);
  }
  
  .grid img{
    width: 100%;
    height: 100%;
    object-fit: cover;
   border-radius: 20px;
  }
.grid div:nth-child(1){
    grid-column: 4/7;
    grid-row: 1/2;
 }
 .grid div:nth-child(2){
    grid-column: 1/10;  
    grid-row: 2/4;
    border-radius: 20px;
    background-color: rgb(255, 255, 255);
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
<div class="grid">

    <div>
      <img src="FOTOĞRAFLAR/BEN.jpeg" alt="##">
  </div>
  
  <div>

    <center>
    <h1>BEN KİMİM?</h1>

      <p>
     3 Mart 2001 Kastamonu doğumluyum. Annem, babam ve ablamla beraber Bartın’da yaşıyorum. Babamın mesleğinden dolayı 1 sene Çorum’un Bayat ilçesinde, 5 sene Bitlis’in Ahlat ilçesinde daha sonra da Çankırı ve Bartın’da bir süre de İstanbul’da yaşadım. 2007 senesinde ilkokula Bartın İMKB İlköğretim Okulunda başladım ve 8. Sınıfa kadar eğitimimi orada tamamladım. Lise öğrenime ise 2015 yılında Bartın Anadolu Lisesinde başladım. 3 sene orada okuduktan sonra son sınıfta Eğitim Bilimleri Kolejine geçerek 2019 senesinde oradan mezun oldum. Yine 2019 senesinde Bandırma Onyedi Eylül Üniversitesi Elektrik Mühendisliği bölümüne başladım. Aynı zamanda üniversitemde çift anadal programıyla Bilgisayar Mühendisliği de okuyorum.
     Okulla beraber çeşitli yarı zamanlı işlerde de çalıştım. 2020 sene yazında bir elektrikçi dükkânında yaz tatili süresince de çalışmaya devam ettim. Kişisel gelişim seminerlerine katılıp iş güvenliği vb. belgelerini aldım. Şu anda 2. Sınıf olarak lisans hayatıma devam ediyorum.
    </p>
  
  </center>
  </div>
</div>

  </body>
</html>