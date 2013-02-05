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
  <link rel="stylesheet" type="text/css" href="styles/layout.css" />
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
		
	}
	else
	{
		document.getElementById('emailregupdateshelp').style.display="block";
		document.getElementById('regupdatesdiv').style.height="15%";
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

<body>
<div id="staticlinks">

</div>
<div id="indexopen" >
	<div id="imageopen">
		<div id="regupdatesdiv">
		
		<form  name="regupdatesform" action="NYP index1.php" method="post">
		<label for="emailredupdates">Please Enter your valid email address for constant updates from our party :<br></label>
		<input type="text" name="emailregupdates" id="emailregupdates" onblur="regexcheckemail();"/>
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
		<div id="headerdiv">
		header div
		</div>
		<div id="imageheaderdiv"> 
		imageheader
		</div>
		<div id="navmenudiv" style="z-index:10">
		<ul class="navmenu">
			<li><a href="#">Home</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">OurLeaders</a>
				<ul class="submenu">
					<li><a href="#">our leader1</a></li>
					<li><a href="#">our leader2</a></li>
					<li><a href="#">our leader3</a></li>
					<li><a href="#">our leader4</a></li>
				</ul>
			</li>
			<li><a href="#">Organistion</a>
				<ul class="submenu">
					<li><a href="#">News and Stories</a></li>
					<li><a href="#">News and Stories</a></li>
					<li><a href="#">News and Stories</a></li>
					<li><a href="#">News and Stories</a></li>
				</ul>
			</li>
			<li><a href="#">States</a>
				<ul class="submenu">
					<li><a href="#">News and Stories</a></li>
					<li><a href="#">News and Stories</a></li>
					<li><a href="#">News and Stories</a></li>
					<li><a href="#">News and Stories</a></li>
				</ul>
			</li>
			<li><a href="#">News and Stories</a></li>
			<li><a href="#">Gallery</a></li>
			<li><a href="#">Contact Us</a></li>
		</ul>
		
		</div>
		<div id="newsflashdiv">
		news
		</div>
		<div id="joinformdiv">
		joinform
		</div>
		<div id="footerdiv">
		footer
		</div>
	</div>
</div>
</body>


</html>