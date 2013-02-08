
<html>
<head>
<title>National Youth Party</title>
<link rel="stylesheet" type="text/css" href="./css/template.css" />
<script>
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
<a class="thumb" href="https://www.facebook.com/" target="_blank"><img src="./images/facebook.png"><span><img src="icon\60 X 60\facebook.png" alt=""></span></a>
<a class="thumb" href="https://www.twitter.com/" target="_blank"><img src="./images/twitter.png"><span><img src="icon\60 X 60\twitter.png" alt=""></span></a>
<a class="thumb" href="https://www.youtube.com/" target="_blank"><img src="./images/youtube.png"><span><img src="icon\60 X 60\youtube.png" alt=""></span></a>
<a class="thumb" href="https://www.youtube.com/" target="_blank"><img src="./images/feed.png"><span><img src="icon\60 X 60\feed.png" alt=""></span></a>
<a class="thumb" href="https://www.google.com/" target="_blank"><img src="./images/google.png"><span><img src="icon\60 X 60\google.png" alt=""></span></a>

</div>
<div id="indexwebsite" style="diaplay:block;opacity:1;">
	<div id="indexwebsite2">
		<div id="headerdiv">
		header div
		</div>
		<div id="imageheaderdiv"> 
		<img src="./images/Party_Header.png">
		</div>
		<div id="navmenudiv" style="z-index:10">
		<ul class="navmenu">
			<li style="border-left:2px solid gray;"><a href="#">Home</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Our Agenda&nbsp;&#8595;</a>
				<ul class="submenu">
					<li style="padding-top:1.16em;line-height:2.5em;"><a href="#">General</a></li>
					<li><a href="#">Youth</a></li>
					<li><a href="#">Deprived Section</a></li>
					<li><a href="#">Common Man</a></li>
				</ul>
			</li>
			<li><a href="#">Organistion&nbsp;&#8595;</a>
				<ul class="submenu">
					<li style="padding-top:1.16em;line-height:2.5em;"><a href="#">News and Stories</a></li>
					<li><a href="#">News and Stories</a></li>
					<li><a href="#">News and Stories</a></li>
					<li><a href="#">News</a></li>
				</ul>
			</li>
			<li><a href="#">Centres&nbsp;&#8595;</a>
				<ul class="submenu">
					<li style="padding-top:1.16em;line-height:2.5em;"><a href="#">North India</a>
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
		<div id="contentdiv">
		
		</div>
		
		<div id="footerdiv">
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