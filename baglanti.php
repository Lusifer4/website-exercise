<?php

$vt_sunucu="localhost";
$vt_kulanici="root";
$vt_sifre="";
$vt_adi="anasayfa";

$baglan=mysqli_connect($vt_sunucu,$vt_kulanici,$vt_sifre,$vt_adi);


if(!$baglan)
{
    die("veri tabanı bağlantısı başarısız".mysqli_connect_error());
}
/*else{
    echo"Bağlantı başarı ile gerçekleştirildi";
}*/



?>