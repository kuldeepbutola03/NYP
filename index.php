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
<style>
*
{
	-webkit-transition-property:top,left,width,height;
	-webkit-transition-duration:5s;
	-moz-transition-property:top,left,width,height;
	-moz-transition-duration:5s;
	
	-webkit-transition-property:opacity;
	-webkit-transition-duration:5s;
	-moz-transition-property:opacity;
	-moz-transition-duration:5s;
}
body
{
margin:0px;padding:0px;
}
div#indexopen , div#indexwebsite
{
	background: -webkit-gradient(linear,left top, left bottom,from( #FF7519),to(#FFE0CC));
	background: -moz-linear-gradient(top , #FF7519, #FFE0CC);
}

div#indexopen 
{
	margin:0px;
	padding:0px;
	opacity:1;
	height:100%;
}  
div#imageopen
{
	background:url('All India Trinamool Congress   Official Party Website   TMC Chairperson Mamata Banerjee   Trinamul.png') -75px 0px;
	position:relative;
	top:55px;
	left:125px;
	width:85%;height:85%;
	border:1px solid gray; 

	border-radius:5px;
	-webkit-border-radius:5px;
	-moz-border-radius:5px;
}
div#regupdatesdiv
{
	padding:5px;
	position:relative;
	top:35px;
	left:10px;
	width:33%;height:12%;
	border:1px solid gray;
	color:#000;
	
	background-color:#996633;
	opacity:0.8;
	border-radius:5px;
	-webkit-border-radius:5px;
	-moz-border-radius:5px;
}
#submitregupdates
{
	height:30px;
}
div#enterWebsite , #submitregupdates
{
	border:0px;
	border-radius:5px;
	-webkit-border-radius:5px;
	-moz-border-radius:5px;
	background: -webkit-gradient(linear,left top, left bottom,from( #0066FF),to(#99C2FF));
	background: -moz-linear-gradient(top ,  #0066FF,#99C2FF);
}
div#enterWebsite:hover , #submitregupdates:hover
{
	background: -webkit-gradient(linear,left top, left bottom,from( #99FF33),to(#99C2FF));
	background: -moz-linear-gradient(top , #99FF33,#99C2FF);
}
div#enterwebsite
{
	line-height:25px;
	padding:5px;
	position:relative;
	top:400px;
	left:850px;
	width:200px;height:30px;
	display:block; 
	
}
div#emailregupdateshelp
{
	display:none;
}



div#indexwebsite
{
	display:none;
	position:absolute;
	top:0px;
	left:50px;
	width:90%;
	height:1000px;
	//border:1px solid red;
	opacity:0;
}
/*
div#indexwebsite:hover
{
	opacity:1;
}
*/

div#indexwebsite div
{
	position:relative;
	float:left;
	margin-bottom:5px;
}
div#indexwebsite2
{
	margin:0px;padding:0px
	width:99.8%;
	height:100%;
	
}
div#headerdiv
{
	border:1px solid gray;
	display:none;
	padding-left:2px
	position:absolute;
	top:0px;
	left:0px;
	width:99.8%;height:30px;
}
div#imageheaderdiv
{
	border:1px solid gray;
	padding-left:2px
	top:35px;
	left:0px;
	width:99.8%;height:125px;
}
div#navmenudiv
{
	padding-left:2px;
	top:-20px;
	left:50px;
	width:99.8%;height:30px;
}
div#newsflashdiv
{
border:1px solid gray;
	padding-left:2px
	left:0px;
	width:70%;height:300px;
	margin-right:12px;
	margin-left:12px
}
div#joinformdiv
{
border:1px solid gray;
	padding-left:2px
	left:0px;
	width:27.5%;height:300px;
}
div#footerdiv
{
border:1px solid gray;
	padding-left:2px;
	top:400px;
	left:0px;
	width:99.8%;height:40px;
}


/*--------------------------------------navMenu---------------------------*/
ul.navMenu , ul.submenu
{
	margin:0px;
	padding:0px;
	list-style-type:none;
}
ul.navmenu li
{
	position:relative;
	float:left;
	width:125px;height:30px;
}
ul.navmenu > li
{
	border-right:2px solid gray;
}

ul.navmenu a
{
	display:block;
	width:125px;height:30px;
	text-decoration:none;
	color:black;
	margin-top:2px;
	text-align:center;
}
ul.submenu a
{
	border:1px solid gray;
}
ul.submenu
{
	display:none;
}
ul.navmenu  li:hover ul.submenu
{
	display:block;
}


/*--------------------------------------navMenu---------------------------*/

</style>
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