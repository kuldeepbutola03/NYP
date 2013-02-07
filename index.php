<?php

if(mysql_connect("localhost","root","") && mysql_select_db("nyp"))
{
	if(isset($_POST['emailregupdates']))
	{
		if(!empty($_POST['emailregupdates']))
		{
			$email=$_POST['emailregupdates'];
			
			$query = "SELECT id FROM regupdates WHERE email='".$email."'";
			if($result=mysql_query($query))
			{
				
				$num_rows = mysql_num_rows($result);
				if($num_rows==0)
				{
					$query = "INSERT INTO regupdates VALUES(NULL,'".$email."')";
					mysql_query($query);
				}
				else if($num_rows>=1)
				{
					echo "already registered";
				}
			}
			else
			{
				echo mysql_error();
			}
		}
	}
	
}
else
{
	echo mysql_error();
}
?>
<!DOCTYPE html>
<html>
<head>
<title>National Youth Party</title>
  <link rel="stylesheet" type="text/css" href="styles/layout.css" />
  <link href="themes/2/js-image-slider.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="styles/nivo-slider.css" />
  <link rel="stylesheet" type="text/css" href="styles/default.css" />
    <script src="themes/2/js-image-slider.js" type="text/javascript"></script>
	<script src="js/jquery-1.9.0.min.js" type="text/javascript"></script>
<script>
function resize()
{
	
}
function loadwebsite()
{
	document.getElementById('indexopen').style.display="none";
	document.getElementById('indexwebsite').style.display="block";
	document.getElementById('indexwebsite').style.opacity="1";
	
}
function regexcheckemail()
{
	email = document.getElementById('emailregupdates').value;
	var regex = /^[a-zA-Z0-9._-]+@[a-zA-Z]+.[a-zA-Z.]+/;
	if(email.match(regex))
	{
		document.getElementById('emailregupdateshelp').style.display="none";
		document.getElementById('regupdatesdiv').style.height="12%";
		return true;
		
	}
	else
	{
		document.getElementById('emailregupdateshelp').style.display="block";
		document.getElementById('regupdatesdiv').style.height="15%";
		return false;
	}
}

document.captureEvents(Event.MOUSEMOVE);
document.onmousemove=mouseCoord;

var mouseX,mouseY;
function mouseCoord(e)
{
	mouseX=e.pageX;
	mouseY=e.pageY;
	
	if(mouseY<=10)
	{
		document.getElementById('headerdiv').style.display="block";
		
	}
	else if(mouseY>=50)
	{
		document.getElementById('headerdiv').style.display="none";
	}
	
}
</script>
</head>

<body onresize="resize();">
<div id="staticlinks">
</div><div id="staticlinks">
<a class="thumb" href="https://www.facebook.com/" target="_blank"><img src="images/48/facebook.png"><span><img src="images/60/facebook.png" alt=""></span></a>
<a class="thumb" href="https://www.twitter.com/" target="_blank"><img src="images/48/twitter.png"><span><img src="images/60/twitter.png" alt=""></span></a>
<a class="thumb" href="https://www.youtube.com/" target="_blank"><img src="images/48/youtube.png"><span><img src="images/60/youtube.png" alt=""></span></a>
<a class="thumb" href="https://www.youtube.com/" target="_blank"><img src="images/48/feed.png"><span><img src="images/60/feed.png" alt=""></span></a>
<a class="thumb" href="https://www.google.com/" target="_blank"><img src="images/48/google.png"><span><img src="images/60/google.png" alt=""></span></a>

</div>

<div id="indexopen" >
	<div id="imageopen">
		<div id="regupdatesdiv">
		
		<form  name="regupdatesform" onsubmit="return regexcheckemail();" action="index.php" method="post">
		<label for="emailredupdates">Please Enter your valid email address for constant updates from our party :<br></label>
		<input type="text" name="emailregupdates" id="emailregupdates" />
		<input type="submit" name="submitregupdates" id="submitregupdates" value="Add to our Mailling List" />
		<form>
		<div id="emailregupdateshelp">
		invalid email entered
		</div>
		</div>
		
		<div id="enterwebsite" onclick='loadwebsite();'><center>Enter Website </center></div>
	</div>

</div>
<div id="indexwebsite">
	<div id="indexwebsite2">
		<div id="headerdiv" class="relative">
		header div
		</div>
		<div id="imageheaderdiv" class="relative"> 
		<img src="./images/Party_Header.png">
		</div>
		<div id="navmenudiv" style="z-index:10" class="relative">
		<ul class="navmenu">
			<li><a href="#">Home</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Our Agenda&nbsp;&#8595;</a>
				<ul class="submenu">
					<li style="padding-top:5px;"><a href="#">General</a></li>
					<li><a href="#">Youth</a></li>
					<li><a href="#">Deprived Section</a></li>
					<li><a href="#">Common Man</a></li>
				</ul>
			</li>
			<li><a href="#">Organistion&nbsp;&#8595;</a>
				<ul class="submenu">
					<li ><a href="#">News and Stories</a></li>
					<li><a href="#">News and Stories</a></li>
					<li><a href="#">News and Stories</a></li>
					<li><a href="#">News</a></li>
				</ul>
			</li>
			<li><a href="#">Centres&nbsp;&#8595;</a>
				<ul class="submenu">
					<li ><a href="#">North India</a>
						<ul class="subsubmenu">
							<li><a href="#">Jammu & Kashmir</a></li>
							<li><a href="#">Himachal Pradesh</a></li>
							<li><a href="#">Uttarakhand</a></li>
							<li><a href="#">Punjab</a></li>
							<li><a href="#">Haryana</a></li>
							<li><a href="#">Delhi</a></li>
							<li><a href="#">Uttar Pradesh</a></li>
							<li><a href="#">Bihar</a></li>
						</ul>
					</li>
					<li><a href="#">West</a>
						<ul class="subsubmenu">
							<li><a href="#">Rajasthan</a></li>
							<li><a href="#">Gujarat</a></li>
						</ul>
					</li>
					<li><a href="#">East</a>
						<ul class="subsubmenu">
							<li><a href="#">Sikkim</a></li>
							<li><a href="#">Assam</a></li>
							<li><a href="#">West Bengal</a></li>
							<li><a href="#">Mizoram</a></li>
							<li><a href="#">Meghalaya</a></li>
							<li><a href="#">Arunachal Pradesh</a></li>
							<li><a href="#">Tripura</a></li>
							<li><a href="#">Nagaland</a></li>
							<li><a href="#">Manipal</a></li>
						</ul>
					</li>
					<li><a href="#">South</a>
						<ul class="subsubmenu">
							<li><a href="#">Maharashtra</a></li>
							<li><a href="#">Karnataka</a></li>
							<li><a href="#">Goa</a></li>
							<li><a href="#">Orrisa</a></li>
							<li><a href="#">Andhra Pradesh</a></li>
							<li><a href="#">Kerela</a></li>
							<li><a href="#">Tamil Nadu</a></li>
						</ul></li>
					<li><a href="#">Central</a>
						<ul class="subsubmenu">
							<li><a href="#">Madhya Pradesh</a></li>
							<li><a href="#">Jharkhand</a></li>
							<li><a href="#">Chattisgarh</a></li>
						</ul>
					</li>
				</ul>
			</li>
			<li><a href="#">News</a></li>
			<li><a href="#">Gallery</a></li>
			<li><a href="#">Contact Us</a></li>
		</ul>
		
		</div>
		<div id="newsflashdiv" class="relative">
		 <!-- jQuery & Nivo Slider -->
         <script src="js/jquery-1.9.0.min.js"></script>
         <script src="js/jquery.nivo.slider.js"></script>
		 
		 <script>
	       $(window).load(function() {
		   $('#slider').nivoSlider();
	     });
         </script>
		 <div class="slider-wrapper futurico-theme">

	     <div class="slider-wrapper theme-default">
            <div id="slider" class="nivoSlider">
                <img src="images/slider/slide1.jpg" data-thumb="images/slider/slide1.jpg" alt="" />
                <a href="http://dev7studios.com"><img src="images/slider/slide2.jpg" data-thumb="images/slider/slide2.jpg" alt="" title="This is an example of a caption" /></a>
                <img src="images/slider/slide3.jpg" data-thumb="images/slider/slide3.jpg" alt="" data-transition="slideInLeft" />
                <img src="images/slider/slide4.jpg" data-thumb="images/slider/slide4.jpg" alt="" title="#htmlcaption" />
            </div>
            <div id="htmlcaption" class="nivo-html-caption">
                <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>. 
            </div>
        </div>

        </div>
		</div>
		<div id="joinformdiv" class="relative">
		joinform
		</div>
		<div id="footerdiv" class="relative">
			<div >
				<span style="color:#FFFFCC;text-align:center;position:relative;width:99%;display:block;">AGENDA</span>
				<ul>
					<li>Jan lokpal</li>
					<li>Right to reject</li>
					<li>Right to recall</li>
					<li>Political decentralization</li>
					<li>Rising Prices</li>
					<li>Others</li>
				</ul>
			</div>
			<div>
				<span style="color:#FFFFCC;text-align:center;position:relative;width:99%;display:block;">OFFFICE BEARERS</span>
				<ul>
					<li>Arvind Kejriwal</li>
					<li>Arvind Kejriwal</li>
					<li>Arvind Kejriwal</li>
					<li>Arvind Kejriwal</li>
					<li>Arvind Kejriwal</li>
					<li>Arvind Kejriwal</li>
				</ul>
			</div>
			<div>
				<span style="color:#FFFFCC;text-align:center;position:relative;width:99%;display:block;">AGENDA</span>
				<ul>
					<li>Arvind Kejriwal</li>
					<li>Arvind Kejriwal</li>
					<li>Arvind Kejriwal</li>
					<li>Arvind Kejriwal</li>
					<li>Arvind Kejriwal</li>
					<li>Arvind Kejriwal</li>
				</ul>
			</div>
		</div>
	</div>
</div>
</body>


</html>