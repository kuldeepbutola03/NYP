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

<html>
<head>
<title>National Youth Party</title>
<link rel="stylesheet" type="text/css" href="css/indexlayout.css" />
<link rel="stylesheet" type="text/css" href="css/slider.css" />
<script src="js/js-image-slider.js" type="text/javascript"></script>

<script>
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

if(screen.width<=1300)
{
	document.body.transform="scale(0.5)";
}
function resize()
{
	document.getElementById('navmenudiv').style.width= (80/100)*screen.width+"%";
}
</script>
</head>

<body ">
<div id="staticlinks">
</div><div id="staticlinks">
<a class="thumb" href="https://www.facebook.com/" target="_blank"><img src="./images/facebook.png"><span><img src="images/60/facebook.png" alt=""></span></a>
<a class="thumb" href="https://www.twitter.com/" target="_blank"><img src="./images/twitter.png"><span><img src="images/60/twitter.png" alt=""></span></a>
<a class="thumb" href="https://www.youtube.com/" target="_blank"><img src="./images/youtube.png"><span><img src="images/60/youtube.png" alt=""></span></a>
<a class="thumb" href="https://www.youtube.com/" target="_blank"><img src="./images/feed.png"><span><img src="images/60/feed.png" alt=""></span></a>
<a class="thumb" href="https://www.google.com/" target="_blank"><img src="./images/google.png"><span><img src="images/60/google.png" alt=""></span></a>

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
	<div id="indexwebsite2" >
	
		<div id="headerdiv">
		header div
		</div>
		<div id="imageheaderdiv"> 
		<img src="./images/Party_Header.png">
		</div>
		<div id="navmenudiv" onresize="resize();" style="z-index:10;">
		<ul class="navmenu">
			<li style="border-left:2px solid gray;"><a href="#">Home</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Our Agenda&nbsp;<span style="font-size:0.8em;">&#x25BC;</span></a>
				<ul class="submenu">
					<li style="padding-top:1.16em;line-height:2.5em;" class="submenufirst"><a href="#">General</a></li>
					<li><a href="#">Youth</a></li>
					<li><a href="#">Deprived Section</a></li>
					<li><a href="#">Common Man</a></li>
				</ul>
			</li>
			<li><a href="#">Organistion&nbsp;<span style="font-size:0.8em;">&#x25BC;</span></a>
				<ul class="submenu">
					<li style="padding-top:1.16em;line-height:2.5em;" class="submenufirst"><a href="#">News and Stories</a></li>
					<li><a href="#">News and Stories</a></li>
					<li><a href="#">News and Stories</a></li>
					<li><a href="#">News</a></li>
				</ul>
			</li>
			<li><a href="#">Centres&nbsp;<span style="font-size:0.8em;">&#x25BC;</span></a>
				<ul class="submenu">
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
			<li><a href="#">News</a></li>
			<li><a href="#">Gallery</a></li>
			<li><a href="#">Contact Us</a></li>
		</ul>
		
		</div>
		<div id="newsflashdiv">
		  <div id="sliderFrame">
        <div id="ribbon"></div>
        <div id="slider">
            <a href="http://www.menucool.com/jquery-slider" target="_blank">
                <img src="images/image-slider-1.jpg"  />
            </a>
            <img src="images/image-slider-2.jpg" />
            <img src="images/image-slider-3.jpg" />
            <img src="images/image-slider-4.jpg" />
            <img src="images/image-slider-5.jpg" />
        </div>
        <div id="htmlcaption" style="display: none;">
            <em>HTML</em> caption. Link to <a href="http://www.google.com/">Google</a>.
        </div>
    </div>

		</div>
		<div id="joinformdiv">
		<a href="#" onclick="joinform();">joinform</a>
		</div>
		<div id="getinvolveddiv">
			<div id="getinvolvednavmenudiv">
			<ul class="getinvolvednavmenu">
				<li><a href="#" onclick="getinvoledcontentselect('raiseyourvoicediv');">Raise your Voice</a></li>
				<li><a href="#" onclick="getinvoledcontentselect('socialnetworkdiv');">Social Networking</a></li>
				<li><a href="#" onclick="getinvoledcontentselect('writetousdiv');">Write to Us</a></li>
				<li><a href="#" onclick="getinvoledcontentselect('whatyoucandodiv');">What you can do</a></li>
				<li><a href="#" onclick="getinvoledcontentselect('reportyouractivitydiv');">Report your activity</a></li>
			</ul>
			
			</div>
			<div id="getinvolvedcontentdiv">
				<div id="raiseyourvoicediv">
					<div id="raiseyourvoicediv1">
					<img src="images/question.png" style="float:left;"/>
					<p>Ask A Question</p>
					<form action="index.php" method="post" onsubmit="return raiseyourvoicediv1check();">
						<table>
							<tr><td>Name</td><td><input type="text" name="namequestion" /></td></tr>
							<tr><td>Email id</td><td><input type="text" name="emailquestion" /></td></tr>
							<tr><td>Name</td><td><textarea rows="5" cols="15" name="namequestion"></textarea></td></tr>
						</table>
					<input type="submit" value="Submit"/>
					</form>
					</div>
					<div id="raiseyourvoicediv2">
					<img src="images/bright-idea.png" style="float:left;" />
					<p>&nbsp;&nbsp;&nbsp;&nbsp;Share Ideas</p>
					<form action="index.php" method="post" onsubmit="return raiseyourvoicediv2check();">
						<table>
							<tr><td>Name</td><td><input type="text" name="nameideas" /></td></tr>
							<tr><td>Email id</td><td><input type="text" name="emailideas" /></td></tr>
							<tr><td>Ideas</td><td><textarea rows="5" cols="15" name="ideas"></textarea></td></tr>
						</table>
					<input type="submit" value="Submit"/>
					</form>
					</div>
					<div id="raiseyourvoicediv3" style="border:0px;">
					<img src="images/Documents-icon.png" style="float:left;"/>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;Share Documents</p>
					<form action="index.php" method="post" onsubmit="return raiseyourvoicediv3check();">
						<table>
							<tr><td>Name</td><td><input type="text" name="namefile" /></td></tr>
							<tr><td>Email id</td><td><input type="text" name="emailfile" /></td></tr>
							<tr><td>File</td><td><input type="file" name="file" /></td></tr>
							<tr><td>Details</td><td><textarea rows="5" cols="15" name="details"></textarea></td></tr>
						</table>
					<input type="submit" value="Submit"/>
					</form>
					</div>
				</div>
			</div>
		</div>
		
		
		
		
		
		<div id="footerdiv">
		<img src="images/Footer.png" />
			<div >
				<span style="color:black;text-align:center;position:relative;width:99%;display:block;">AGENDA</span>
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
				<span style="color:black;text-align:center;position:relative;width:99%;display:block;">OFFFICE BEARERS</span>
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
				<span style="color:black;text-align:center;position:relative;width:99%;display:block;">AGENDA</span>
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