<?php
if(date('H') > 00 && date('H') < 07){
echo "<link rel='stylesheet' href='style/style-night.css'>";
}else{
echo "<link rel='stylesheet' href='style/style.css'>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=cp1251" />
    <meta name="keywords" content="курсы, php, html">
    <meta name="deskription" content="курсы, php, html">
    <title>МОЯ СТРАНИЦА</title>
  </head>
  <body>
    <header>
      <div class="header">
        <a href="#default" class="logo"><img src="img\diamond2.png" width="150" height="40px"></a>
        <div class="header-right">
          <a class="active" a href="1site.php"  title="go to about">Главная</a>
          <a href="mendeleev.php">Таблица Менделеева</a>
		  <a href="tsikly.php">Циклы</a>
          <a href="index.php">Авторизация</a>
        </div>
      </div>
    </header>
 </body>
</html>