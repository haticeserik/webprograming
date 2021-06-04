<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="icon" href="f.ico" type="image/x-icon">
<style type="text/css">
	mark{
	background-color: #F0F8FF;
}
li{
	display: inline;

}
ul{
	font-size: 25px;
	margin-top: 200px;
}

#anıt{
        margin-left: 150px;
	}
	.footer{
		margin-left: 100px;
	}
</style>
</head>
<body>
<?php

 include 'ilk.html';
$isim = mysqli_real_escape_string($connect, $_POST['isim']);
$soyad = mysqli_real_escape_string($connect,$_POST['soyad']);
$yorum = mysqli_real_escape_string($connect,$_POST['yorum']);



      $sql ="INSERT INTO iletisim (name,surname,comment) 
VALUES ('$isim', '$soyad','$yorum');";

      $result = mysqli_query($connect, $sql);

      header("Location: ../iletisim.html?signup=success");
    
	?>
	
	<footer>
		 <ul>
                    <li id="anıt" ><a   href="anıtkabir.html" href="anıtkabir.html" > <mark> ANITKABİR </mark></a> </li>
                    <li id="hamam">	<a class="footer" href="hamamonu.html"><mark> HAMAMÖNÜ </mark></a> </li>
                    <li id="kugulu">	<a class="footer" href="kugulu.html"><mark>KUĞULU PARK </mark></a> </li>
                     
                    <li id="eymir"> <a class="footer" href="eymir.html"  > <mark>EYMİR LAKE </mark></a> </li>
                    <li id="ulucan"> <a class="footer" href="ulucanlar.html">	<mark>ULUCANLAR PRISON MUSEUM </mark> </a> </li>
                       
                   <li id="iletisim">  <a class="footer" href="iletisim.html"><mark>CONTACT WİTH US </mark> </a> </li>
                      
                     
                       </ul> 
	</footer>
</body>
</html>
