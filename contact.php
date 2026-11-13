<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Начало</title>
<link href="contactStyle.css" rel="stylesheet" type="text/css">
	<link rel="icon" type="image/x-icon" href="img/favicon_io/favicon.ico">
</head>

<body>
<div id="wrapper">
	<header id="header">
    <img id="left" src="img/logo.png" width="150" height="150" alt=""/>
	<h1 id="align">Луксозни Часовници Пазарджик</h1>
	</header>
  <nav id="menu"><strong id="center"><a href="index.html">НАЧАЛО</a> 
	  <a href="aboutUs.html">ЗА НАС</a> <a href="gallery.html">ГАЛЕРИЯ</a> <a href="catalog.html">КАТАЛОГ</a> 
	  <a class="align" href="contact.php">КОНТАКТИ</a> 
	  <a href="author.html">АВТОР</a> <a href="promotion.html">ПРОМОЦИЯ</a></strong></nav>
  <main id="main">
	<p>&nbsp;</p>
	</main>
  <footer id="footer">
	  
	<p id="size">Изработил: Адриан Иванов Кръстев 12а <br>
    &copy; никой няма право да копира този сайт.</p>
	  
    <div class="icon"><a href="https://www.tiktok.com/@worldmacins" target="_self"><img src="img/tiktok-icon-free-png.webp" width="50" height="50" alt="ticktock"/></a></div>
	  
  <div class="icon"><a href="https://www.instagram.com/adikr88/" target="_self"><img src="img/Instagram_icon.png" width="50" height="50" alt="insta"/></a></div>
	
<div class="icon"><a href="https://www.facebook.com/profile.php?id=100041481893271&locale=bg_BG" target="_self"><img src="img/Facebook_Logo_(2019).png" width="50" height="50" alt="facebook"/></a></div>
    <div id="datetime" style="font-size: 20pt; font-style: oblique;"></div>

    <script>
        // Функция за обновяване на датата и часа
        function updateDateTime() {
            const now = new Date();
            document.getElementById('datetime').innerHTML = now.toLocaleString();
        }

        // Извикване на функцията веднага след зареждане на страницата
        updateDateTime();

        // Обновяване на датата и часа на всеки 1 секунда
        setInterval(updateDateTime, 1000);
    </script>

  </footer>
</div>
</body>
</html>
