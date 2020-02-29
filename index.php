<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=2.0, user-scalable=yes" />
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>WeatherGirl Navigation</title>
</head>

<body>
	<div class="top" align="center">
		<img src="logo.png">
	</div>

	<?php
		$links = file_get_contents("link.json");
		$links = json_decode($links,true);
		foreach($links as $key => $link){
			echo '<div class="box"><div class="title">'.$key.'</div><div class="links">';
			foreach($link as $name => $url){
				echo '<div class="link"><a href="'.$url.'" target="_blank">'.$name.'</a></div>';
			}
			echo '</div></div>';
		}
	?>


	<div class="bottom">
		©2020 WeatherGirl. <a href="http://www.beian.miit.gov.cn/">粤ICP备18131337号</a> Build by <a href="https://weibo.com/particledream">TOYOHAY</a>
	</div>
</body>
</html>