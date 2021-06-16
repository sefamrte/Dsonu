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
    margin-left: auto;
    margin-right: auto;
  }
  body  {
    background: #bdc3c7;  
  background: -webkit-linear-gradient(to left, #2c3e50, #bdc3c7);  
  background: linear-gradient(to left, #2c3e50, #bdc3c7); }
  table
  {
    border-radius: 10px;
  }
.tablo th{
  background-color: rgb(199, 202, 230);
}
td{
  padding: 25px 20px;
}
table tr td:nth-child(n+2){
  text-align: center;
}
.tablo tr:nth-child(odd){
  background-color: rgb(255, 255, 255);
}
.tablo tr:hover:nth-child(odd){
  background-color: rgb(255, 255, 255);
  transition: 0.7s;
}
.tablo tr:nth-child(even){
  background-color: rgb(199, 202, 230);
}
#text-area{
  margin: 0px;
  width: 400px;
  height: 150px;
}
#üstt {
  background-color:  rgb(199, 202, 230);
  border: 2px solid  rgb(199, 202, 230);
  padding: 15px;
  border-radius: 10px;
  margin-top: 15px;
  width:fit-content;
}
#üstt input, textarea, select{
  padding: 3px 5px;
  border-radius: 5px;
  box-shadow: 3px 3px 4px rgb(7, 0, 3);
  text-decoration: none;

}
#üstt input[type="button"]{
  transition:0.5s;
  width: 50%;
  margin-top: 25px;
  border-radius: 1px;
  padding: 5px 0px 5px 0;

}

#üstt input[type="button "]:hover{
  transition: 0.7s;
  width: 48%;
  border-radius:  10px; 
}
#ads{
  display:inline-block;
  margin-left: 370px;
  
  padding: 10px;
  background-color: rgb(199, 202, 230);
}
#üstkısım{
  margin-left: 350px;
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
  <form id="ankett">  
    <center id="ads">
      <label for="fullName">Ad Soyad :</label>
      <input type="text"  name="fullName" id="fullName" placeholder="Ad ve Soyad giriniz.">
      <label for="date">Tarih :</label>
      <input type="text" name="date" id="date" placeholder="GG/AA/YYYY">
   <br>
    </center>  
  <br>
  <table class="tablo">
    <thead>
      <tr>
        <th> /// </th>
        <th> Kesinlikle Katılıyorum </th>
        <th> Katılıyorum </th>
        <th> kararsızım </th>
        <th> Katılmıyorum </th>
        <th> Kesinlikle katılmıyorum </th>
      </tr>
    </thead>
    <tbody>  
    <tr>
      <td>1- Sayfa ilk girişte dikkat çekiyor.</td>
      <td>
        <input type="radio" name="soru1" />
      </td>
      <td>
        <input type="radio" name="soru1" />
      </td>
      <td>
        <input type="radio" name="soru1" />
      </td>
      <td>
        <input type="radio" name="soru1" />
      </td>
      <td>
        <input type="radio" name="soru1" />
      </td>
    </tr>  
    <tr>
      <td>2- Sayfa renk uyumundan memnun kaldım.</td>
      <td>
        <input type="radio" name="soru2" />
      </td>
      <td>
        <input type="radio" name="soru2" />
      </td>
      <td>
        <input type="radio" name="soru2" />
      </td>
      <td>
        <input type="radio" name="soru2" />
      </td>
      <td>
        <input type="radio" name="soru2" />
      </td>
    </tr>  
    <tr>
      <td>3- Sayfa düzeninden memnun kaldım.</td>
      <td>
        <input type="radio" name="soru3" />
      </td>
      <td>
        <input type="radio" name="soru3" />
      </td>
      <td>
        <input type="radio" name="soru3" />
      </td>
      <td>
        <input type="radio" name="soru3" />
      </td>
      <td>
        <input type="radio" name="soru3" />
      </td>
    </tr>  
    <tr>
      <td>4- Sayfada istediğim kısımlarla kolaylıkla ulaşabiliyorum.</td>
      <td>
        <input type="radio" name="soru4" />
      </td>
      <td>
        <input type="radio" name="soru4" />
      </td>
      <td>
        <input type="radio" name="soru4" />
      </td>
      <td>
        <input type="radio" name="soru4" />
      </td>
      <td>
        <input type="radio" name="soru4" />
      </td>
    </tr>  
    <tr>
      <td>5- Sayfayı genel olarak beğendim.</td>
      <td>
        <input type="radio" name="soru5" />
      </td>
      <td>
        <input type="radio" name="soru5" />
      </td>
      <td>
        <input type="radio" name="soru5" />
      </td>
      <td>
        <input type="radio" name="soru5" />
      </td>
      <td>
        <input type="radio" name="soru5" />
      </td>
    </tr>  
    <tr>
      <td>6- Hangi Bölgede yaşıyorsunuz ??</td>
      <td colspan="5">
        <select>
          <option>.......</option>
          <option>KARADENİZ</option>
          <option>AKDENİZ</option>
          <option>EGE</option>
          <option>MARMARA</option>
          <option>GÜNEYDOĞU ANADOLU</option>
          <option>İÇ ANADOLU</option>
          <option>DOĞU ANADOLU</option>
        </select>
      </td>
    </tr>
    </tbody>
  </table>
  <center> 
  <div id="üstt">
    <h2>ANKETİMİZİ BEĞENDİNİZ Mİ ?</h2>
    <label for="e-mail">E-mail :</label>
    <input type="email" id="e-mail" name="e-mail" placeholder="isimsoyisim@gmail.com">
    <label for="telNo">Telefon :</label>  
    <input type="tel" id="Teleffon" name="Teleffon" placeholder="(5__) (___) (____)" 
    pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" maxlength="10">
    <br>
    <br>
    <p>Öneri veya Şikayet</p>
    
    <br>
<label for="text-area"></label>
<textarea name="text-area" id="text-area" cols="10" rows="25"
placeholder="Metni buraya giriniz..."></textarea>
<input type="button" value="Gönder  ">
  </div>
</center> 
  </form>

  </body>
</html>