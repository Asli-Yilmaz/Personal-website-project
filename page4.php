<!DOCTYPE html>
<head>
  <title>Aslı Yılmaz|Şehrim</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/page1.css">
  <link rel="stylesheet" href="css/page4.css">
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
  
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light" id="anamenu" >
    <a class="navbar-brand" href="index.html" id="logo">AslıYılmaz</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav" id="menu">
        <li class="nav-item active">
          <a class="nav-link" href="page2.html">Özgeçmişim <span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="page3.html">Şehrim</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ilgi.html">İlgi Alanlarım</a>
        </li>        
        <li class="nav-item">
          <a class="nav-link" href="page5.html">İletişim</a>
        </li>    
        <li class="nav-item">
          <a class="nav-link" href="page4.php">Giriş Yap</a>
        </li>    
      </ul>
    </div>
  </nav>
  <br><br><br>
    <form  action="kontrol.php" method="POST">
    <h3><b>Giriş Yap</b></h3>
    <div class="cizgi"></div><br><br>
    <label>Kullanıcı Adı</label><br>
    <input type="text" name="kullaniciadi" class="bilgi" placeholder="Kullanıcı adınızı giriniz.     "><br><br>
    <label>Şifre</label><br>
    <input type="password" name="sifre" class="bilgi" placeholder="Şifrenizi giriniz."><br><br><br>
    <input type="submit" name="giris" value="Giriş Yap">
    
    <?php if(isset($_GET['msg']) && $_GET['msg']!="") { ?>
    <p class="<?php if(($_GET['msg']=="Kullanıcı adı ve şifre bilgileri boş geçilemez.")
             ||($_GET['msg']=="Hatalı giriş yaptınız. Bilgilerinizi kontrol ederek tekrar deneyiniz."))echo 'alert alert-danger'; ?> alert alert-success"
              id="mesaj" ><?php echo $_GET['msg']; ?> </p>
    <?php } ?>
    
  </form>
  <footer>
    Aslı Yılmaz<br>
    Linkedin: www.linkedin.com/in/asliyilmaztr/<br>
    Github: github.com/Asli-Yilmaz<br>
    2022<br>
  </footer>
  
</body>