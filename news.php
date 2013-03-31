
<html>
<head>
<style>
div#news
{
	width:50%;
	-webkit-marquee: up small infinite scroll normal;  
	overflow-x: -webkit-marquee;  
}
</style>
</head>
<body>
<div id="news" >
<?php
foreach($xml->news as $news)
{
?>
	<div>
	<?php
	echo "Dated: ".$news->dated." - ".$news->content;
	?>
	</div>
<?php

}
?>

</div>
</body>

</html>