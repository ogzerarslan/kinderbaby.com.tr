<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>iletişim</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="icon" type="image/png" sizes="96x96" href="img/favicon.png">
    <link
      href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="global.css" />
    <link rel="stylesheet" href="main.css" />
    <link
    rel="stylesheet"
    
    href="tablet.css"
  />
    <link
      rel="stylesheet"
      media="screen and (max-width: 500px)"
      href="mobile.css"
    />
   
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
   
  </head>
  <body id="about" class="footer-fixed">
    <header id="header">
      <nav class="navigation container">
      <a href="index.html"><img src="img/logo.svg" alt="Kinder baby Logo" /></a>
        <input  type="checkbox" id="click" />
        <label for="click" class="menu-btn">
          <i class="fas fa-bars"></i>
        </label>
  
      <ul class="nav-link">
      <li><a href="index.html">Anasayfa</a></li>
          <li><a href="productinfo.html">Ana Kucağı </a></li>
          <li><a href="about.html">Hakkımızda</a></li>
          <li><a href="contact.php">İletişim</a></li>
        </ul>
      </nav>
    </header>
    <section class="contact container">
      <h2>Bizimle İletişime Geç</h2>
      <div class="mail-phone container">
        <p class="mailadress"><b>E-posta:</b> info@kinderbaby.com.tr</p>
        <p> <b>Telefon:</b> 556366841</p>
      </div>
      <div class="contact-img">
        <img src="img/contact-img.svg" alt="Kinder Baby İletişim" />
      </div>
      <div class="contact-form">
    <div class="item-1">
    <?php
    if( isset( $_GET['durum']) ) {
          if($_GET['durum']=="ok")
          {
            
            echo "Formunuz Başarılı bir şekilde gönderilmiştir";


          }
          elseif($_GET['durum']=="no"){
            echo"Form Gönderilemedi";
          }
        }
          ?>  
            
          <div class="form-group">
           <form action="contact-post.php" method="post"> 
             
            <label for="">Ad Soyad</label>
            <input 
              type="text"
              name="adi_soyadi"
              id="adi_soyadi"
              class="form-control"
              placeholder="Ad Soyad Giriniz... "
              required=""
              
            />
          </div> 
          <div class="form-group">
              
            <label for="">Konu</label>
            <input 
              type="text"
              name="konu"
              id="isim"
              class="form-control"
              placeholder="Konuyu Kısaca Belirtiniz... "
              required=""
            />
          </div> 
                 <div class="form-group">
            <label for="">E- Mail</label>
            <input 
              type="email"
              name="email"
              id="isim"
              class="form-control"
              placeholder="E-Mail Adresi Giriniz... "
              required=""
            />
          </div>
          <div class="form-group">
            <label for="">Telefon Numarası</label>
            <input 
              type="tel"
              name="telefon"
              id="isim"
              class="form-control"
              placeholder="Telefon Numaranızı Giriniz... "
              required=""
            />
          </div>
        </div>
          <div class="item-2">
            <label for="" class="m-label">Mesaj</label>  
            <div class="message-button">
              
              <textarea
                name="mesaj"
                id=""
                rows="5"
                class="form-control"
                placeholder="Mesajınızı Yazınız.."
                required=""
              ></textarea>
              <button type="submit" class="contact-button">Gönder</button>
            </div>
          </form> 
           
       </div>
        </div>
      </div>
     
    </section>
    <footer id="ftr-contact" class="ftr">
        <p class="footer-mail">info@kinderbaby.com.tr</p>
        <p>Copyright © kinderbaby.com.tr 2022 - Tüm hakları saklıdır.</p>
    </footer>
  </body>
</html>
