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
background-color: white;  
}
.grid{
    display: grid;
    width: 1300px;
    height: 1000px;
    grid-template-columns: repeat(10,1fr);
    grid-template-rows: repeat(5,150px);
    
}

.bir
{
    text-align: center;
    margin-top: 50px;
    margin-left: -100px;

}
.grid div:nth-child(1)
{
    grid-column: 1/10 ;
}

.grid div:nth-child(2)
{
    grid-column: 1/5;
    grid-row: 2/5;
    margin-top: 10px;
}


.grid div:nth-child(3)
{
    grid-column: 6/10;
    grid-row: 2/5;
    margin-top: 10px;
}


.grid div:nth-child(4)
{
    grid-column: 1/5;
    grid-row:5/7;
    margin-top: 50px;
    margin-bottom: 50px;
}

.grid div:nth-child(5)
{
    grid-column: 6/10;
    grid-row:5/7;
    margin-top: 50px;
    margin-bottom: 50px;
}
p{
    font-size: 18px;
}
dl
{
width: 395px;
height: 394px;
background-color: lightgrey;
padding: 20px;
border-radius: 15px;
margin-top: 0px;
position: relative;
}
.e{
    width: 395px;
    background-color: lightgrey;
    padding: 20px;
    margin-top: 15px;
    border-radius: 15px;
    position: relative;
}
.asa
{
margin-top: 50px;
background-image: url(FOTOĞRAFLAR/deerssss.png);
width: 100%;
}
img{
  width: 100%;
  height: 100%; 
}
img:hover{
  width: 102%;
  height: 102%;
  transition: 0.8s;
}


</style>

  <nav>
    <ul id="üstmenü">
    
  <div id="solüst"> <font> <strong> TEKNO-SMK </strong> </font>  
    <i class="fas fa-search"></i></div>

      <li><a href="ANASAYFA.php"> <b> Anasayfa </b></a></li>
      <li><a href="Anasayfa-raspberryPi.php"><b>Raspberry Pı</b></a></li>
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
      <li> <b> İletişim</b>
      <ul>
        <li><a href="https://www.instagram.com/koylu.s/?hl=tr">İnstagram</a></li>
        <li><a href="mailto:sefamrte.1525@gmail.com">E-posta</a></li>
        <li><a href="https://www.linkedin.com/in/sefa-mert-k%C3%B6yl%C3%BC-54662720a/">Linkedin</a></li>
             </ul>      
  </nav>

  
<div class="grid">
    <div><center><h1 class="bir">ARDUINO</h1></center></div>
    <div class="e">
       <h1><center> ARDUINO NEDİR?? </center></h1>
       <p>
       
        Arduino nedir diye soranlar kısaca cevap vermek gerekirse. Bu yazılıp ve kartlardan oluşan bir programlama platformudur. Daha açık anlatmak gerekirse Arduino, açık kaynaklı bir mikrokontrolcü kartıdır. Arduino kullanarak çeşitli sensörlerden gelen sinyalleri okuyabilir, ışık yakıp söndürebilir, motor çalıştırabilirsiniz ve bunun yanında sadece mekanik bilgisi ve ya elektrik bilgisi olanlara değil herkese hitap edebilmesi için kolay kullanım ön planda tutulup tasarlanmıştır. Kart üzerinde bulunan bir mini bilgisayar yazacağımız programa göre giriş ve çıkış bağlantılarını kontrol eder.
    </div>
    <div>
        <p > <dl>
              <center>  <dt> <h1> NELER YAPILABİLİR </h1> </dt> </center>  
              <p>  Arduino robotlar sayesinde bir çok yapmanız mümkün bunlardan biri dronelar evet Arduino sayesinde kendiniz bir drone yapabilirsiniz ve bu drone u kullanabilirsiniz bunun yanında Arduino sayesinde ev için kullanaileceğiniz değişik icatlar yapmanız mümkün. Yanı özetle bahsetmek gerekirse Arduino ile yapabileceğiniz şeyler hayal gücünüzle kısıtlıdır.
              </p>
                <p> Herhangi bir programlama bilgisine sahip değilseniz Arduino ile programlama yapmanız zordur ama bu bile iyi bir şey çünkü Arduino aldığınız taktirde bir öğretim seti veriliyor. Bu şu anlama geliyor yani sıfır programlama bilgisine sahipseniz Arduino öğretici seti sayesinde Arduino programlarını kullanabilirsiniz. Mutfağa girerken ışıkların yanması hoşunuza gitmez mi? Ayrıca evinizde size bir şeyler getiren bir robot olsun istemez misiniz? İşte bu gibi durumlarda Arduino kullanarak kendi hayal gücünüz kadar çok şey üretebilmeniz mümkündür. 
            </p>
            </dl>
            
        </p>
    </div>
    <div class="asa">
    <a href="https://maker.robotistan.com/arduino-yazilim-kurulum/">  <img class="ders" src="FOTOĞRAFLAR/deerssss.png" alt=""> </a>
    </div>
    <div class="asa">
    <a href="https://www.youtube.com/watch?v=ISiMQuzj4C0&list=PLDRcccSktQd69AWjcdYWN-2aMcbsHyr6J">  <img src="FOTOĞRAFLAR/kamera1.png" alt=""> </a>
    </div>
</div>

    

 </html>