<?php
  $kayitli_Kullanici="b191210081@ogr.sakarya.edu.tr";
  $kayitli_Sifre="b191210081";
  error_reporting(0);
  if(($_POST["kullaniciadi"]=="")
    ||($_POST["sifre"]=="")){
      $msg="Kullanıcı adı ve şifre bilgileri boş geçilemez.";
      
    }
  elseif(($_POST["kullaniciadi"]!=$kayitli_Kullanici)
   ||($_POST["sifre"]!=$kayitli_Sifre)){
    $msg="Hatalı giriş yaptınız. Bilgilerinizi kontrol ederek tekrar deneyiniz.";
    
  }
  else{
    $msg="Giriş başarılı! Hoşgeldin B191210081!";
  }
  header('Location: page4.php?msg='.$msg);
?>