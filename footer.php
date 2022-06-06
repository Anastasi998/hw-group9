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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  </head>

  <footer id="footer-site">
    <ul class="widget-social">
	  <li>
	  <a href="" class="fa fa-vk"></a>
	  </li>
	  <li>
	  <a href="" class="fa fa-facebook"></a>
	  </li>
	  <li>
	  <a href="" class="fa fa-twitter"></a>
	  </li>
	</ul>
    <div>
      <span>&copy; 2022</span>
	  <a href="#">К верху страницы</a>
	</div>
  </footer>
</html>