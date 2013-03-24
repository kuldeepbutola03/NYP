<html>
<head>
<title>National Youth Party</title>
<link rel="stylesheet" type="text/css" href="css/template.css"/>
<script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
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

if(window.innerWidth<=1300 &&window.innerWidth>=1100 )
{
	alert("hey!");
	document.body.zoom="90%";
}
function getinvoledcontentselect(id)
{
	if(id=="raiseyourvoicediv")
	{
		
		document.getElementById('raiseyourvoicediv').style.display="block";
		document.getElementById('writetousdiv').style.display="none";
		document.getElementById('telecommunicationdiv').style.display="none";
	}
	if(id=="writetousdiv")
	{
		
		document.getElementById('raiseyourvoicediv').style.display="none";
		document.getElementById('writetousdiv').style.display="block";
		document.getElementById('telecommunicationdiv').style.display="none";
	}
	if(id=="telecommunicationdiv")
	{
		
		document.getElementById('raiseyourvoicediv').style.display="none";
		document.getElementById('writetousdiv').style.display="none";
		document.getElementById('telecommunicationdiv').style.display="block";
	}
}
</script>
<script>
  $(document).ready( function(){
    $(".submenu").hide();
    $(".menu").hover(
	  function(){
	     $(".fix", this).animate({ height: 'show',width:'show', opacity: 'show' }, 'slow');
	  }, function(){
	    $(".fix", this).animate({ height: 'hide',width:'show', opacity: 'hide' }, 'fast');
	  }
	);
  }
  );
  
  $(document).ready(
    function(){
	  $('.thumb').hover(
	    function(){
		  $("img", this).animate({height: '60px' , width:'60px', position:'absolute'}, 'fast');
		}, function(){
		  $("img", this).animate({height: '48px', width: '48px'}, 'fast');
		}
	  );
	}
  );
</script>

</head>

<body >

<div class="right">
<div id="staticlinks">
<a class="thumb" href="https://www.facebook.com/" target="_blank"><div class="sIfix"><img src="images/60/facebook.png"/></div></a>
<a class="thumb" href="https://www.twitter.com/" target="_blank"><img src="images/60/twitter.png" /></a>
<a class="thumb" href="https://www.youtube.com/" target="_blank"><img src="images/60/youtube.png" /></a>
<a class="thumb" href="https://www.youtube.com/" target="_blank"><img src="images/60/feed.png" /></a>
<a class="thumb" href="https://www.google.com/" target="_blank"><img src="images/60/google.png" /></a>

</div>
</div>


<div id="indexwebsite">
	<div id="transparentskin">
	</div>
	<div id="indexwebsite2" class="shadow">
	
		<div id="headerdiv">
		header div
		</div>
		<div id="imageheaderdiv"> 
		<img src="./images/Party_Header.png">
		</div>
		<div id="navmenudiv"  style="z-index:10;">
		<ul class="navmenu">
			<li class="menu" style="border-left:2px solid gray;"><a href="#">Home</a></li>
			<li class="menu"><a href="#">About</a></li>
			<li class="menu"><a href="#">Our Agenda&nbsp;<span style="font-size:0.8em;">&#x25BC;</span></a>
				<ul class="submenu fix">
					<li style="padding-top:1.16em;line-height:2.5em;" class="submenufirst"><a href="#">General</a></li>
					<li><a href="#">Youth</a></li>
					<li><a href="#">Deprived Section</a></li>
					<li><a href="#">Common Man</a></li>
				</ul>
			</li>
			<li class="menu"><a href="#">Organistion&nbsp;<span style="font-size:0.8em;">&#x25BC;</span></a>
				<ul class="submenu fix">
					<li style="padding-top:1.16em;line-height:2.5em;" class="submenufirst"><a href="#">News and Stories</a></li>
					<li><a href="#">News and Stories</a></li>
					<li><a href="#">News and Stories</a></li>
					<li><a href="#">News</a></li>
				</ul>
			</li>
			<li class="menu"><a href="#">Centres&nbsp;<span style="font-size:0.8em;">&#x25BC;</span></a>
				<ul class="submenu fix">
					<li style="padding-top:1.16em;line-height:2.5em;" class="submenufirst"><a href="#">North India</a>
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
			<li class="menu"><a href="#">News</a></li>
			<li class="menu"><a href="#">Gallery</a></li>
			<li class="menu"><a href="#">Contact Us</a></li>
		</ul>
		
		</div>
		
		<div id="footerdiv">
		<img src="images/Footer.png" />
			<div >
				<span style="color:black;position:relative;width:99%;display:block;">AGENDA</span>
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
				<span style="color:black;position:relative;width:99%;display:block;">OFFFICE BEARERS</span>
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
				<span style="color:black;position:relative;width:99%;display:block;">AGENDA</span>
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