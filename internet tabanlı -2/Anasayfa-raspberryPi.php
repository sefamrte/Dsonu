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
    height: 400px;
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
p{
  color: black;
}
</style>

  <nav>
    <ul id="üstmenü">
    
  <div id="solüst"> <font> <strong> TEKNO-SMK </strong> </font>  
    <i class="fas fa-search"></i></div>

      <li><a href="ANASAYFA.php"> <b> Anasayfa </b></a></li>
      <li><a href="Anasayfa-arduıno.php"><b>Arduino</b></a></li>
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
      <li> <b> İletişim</b></a>
      <ul>
        <li><a href="https://www.instagram.com/koylu.s/?hl=tr">İnstagram</a></li>
        <li><a href="mailto:sefamrte.1525@gmail.com">E-posta</a></li>
        <li><a href="https://www.linkedin.com/in/sefa-mert-k%C3%B6yl%C3%BC-54662720a/">Linkedin</a></li>
          </ul>      
  </nav>

  
<div class="grid">
    <div><center><h1 class="bir">RASPBERRY PI</h1></center></div>
    <div class="e">
       <h1><center> RASPBERRY PI NEDİR?? </center></h1>
       <br>
       <p>
        Raspberry Pi; İngiltere’de Raspberry Pi vakfı tarafından geliştirilmiş, küçük bir kart boyutuna indirgenmiş bir mini bilgisayardır.
       </p>
       <br>
       <p>Raspberry Pi ile basit programlamalar, projeler yapabilir, deneylerde kullanılabilirsiniz. </p>
       <br>

       <p>Özellikle görüntü işleme konusunda çok başarılı olan bu mini bilgisayara bir monitör bağlayarak görüntü alabilir, mouse ve klavye bağlayarak normal bir bilgisayar gibi kullanabilir hatta gamepad bağlayıp oyun oynayabilirsiniz.</p>
    </div>
    <div class="ggrid">
        <p > <dl>
              <center> <h1> KULLANMAYI NEDEN DÜŞÜNMELİYİZ</h1> </dt> </center>  
                <br>
               <p> Raspberry Pi’yi tam fonksiyonlu bir bilgisayar olarak kullanabilmeniz için micro-HDMI bağlantıya sahip bir ekran veya televizyon ve ayrıca bir klavye-fare setine ihtiyaç duyacaksınız.
                </p>
                <br>
               <p> Tavsiyem, tek alıcıya sahip kablosuz bir klavye-fare seti edinmenizdir. Bu sayede kısıtlı sayıdaki USB portlarını tasarruflu kullanmış olursunuz. Çoğu Raspberry Pi modelleri, mikro USB tipinde bir güç beslemesi girişine sahiptir, güncel versiyonlarda ise Type-C bulunmaktadır.
              </p>
            
            
        </p>
    </div>
    <div class="asa">
    <a href="https://www.w3schools.com/nodejs/nodejs_raspberrypi.asp">  <img class="ders" src="FOTOĞRAFLAR/deerssss.png" alt=""> </a>
    </div>
    <div class="kamera">
    <a href="https://www.youtube.com/watch?v=uqIqutWiyhc&list=PLDRcccSktQd6zXC4_ri_xxMsdgrH5MCPS">  <img src="FOTOĞRAFLAR/kamera1.png" alt=""> </a>
    </div>
</div>

    

 </html>