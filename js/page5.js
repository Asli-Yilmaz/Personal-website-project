
function temizle(){
  document.getElementById("form").reset();
  document.getElementsById("ad")="";
  document.getElementsById("soyad")="";
  document.getElementsById("email")="";
  document.getElementsById("tarih")="";
  document.getElementsById("cinsiyet")="";
  document.getElementsById("sehir")="";
  document.getElementsById("mesajkonu")="";
  document.getElementsById("mesaj")="";
  alert("hata");
}
function kontrol(){
  var ad=document.getElementsById("ad");
  var uyari;
  if (ad==null){
    uyari="İsim bilgisi boş geçilemez.Lütfen isim bilginizi giriniz.";
    document.getElementsById("aduyari").innerHTML=uyari;
    document.getElementsById("aduyari").classList.add("alert alert-warning");
  }
}
  else if (soyad=null) {
    uyari="Soyad bilgisi boş geçilemez.Lütfen soyad bilginizi giriniz.";
    document.getElementsById("soyaduyari").innerHTML=uyari;
    document.getElementsById("soyaduyari").classList.add("alert alert-warning");
  } 
  else if(email==null){
  uyari="Email bilgisi boş geçilemez.Sizinle iletişime geçebilmem için lütfen e-mail adresinizi giriniz.";
  document.getElementsById("emailuyari").innerHTML=uyari;
  document.getElementsById("emailuyari").classList.add("alert alert-warning");
  }
  else if( mesajkonu==""){
    uyari="Mesaj kısmı boş geçişlemez.Lütfen iletmek istedğiniz mesajınızı yazınız.";
    document.getElementsById("mesajuyari").classList.add("alert alert-warning");
    document.getElementsById("mesajuyari").innerHTML=uyari;
  }
}

