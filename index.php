<?php

@$http_referer = $_SERVER['HTTP_REFERER'];

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
	
	if(isset($_POST['namequestion'])&&isset($_POST['emailquestion'])&&isset($_POST['question']))
	{
		$namequestion=$_POST['namequestion'];
		$emailquestion=$_POST['emailquestion'];
		$question=$_POST['question'];
		if(!empty($namequestion)&&!empty($emailquestion)&&!empty($question))
		{
			$query="INSERT INTO askaquestion VALUES('NULL','".$namequestion."','".$emailquestion."','".$question."')";
			if(mysql_query($query))
			{
			
			}
			else
			{
				mysql_error();
			}
		}
	}
	if(isset($_POST['nameidea'])&&isset($_POST['emailidea'])&&isset($_POST['idea']))
	{
		$nameidea=$_POST['nameidea'];
		$emailidea=$_POST['emailidea'];
		$idea=$_POST['idea'];
		if(!empty($nameidea)&&!empty($emailidea)&&!empty($idea))
		{
			$query="INSERT INTO idea VALUES('NULL','".$nameidea."','".$emailidea."','".$idea."')";
			if(mysql_query($query))
			{}
			else
			{
				mysql_error();
			}
		}
	}
	if(isset($_POST['namefile'])&&isset($_POST['emailfile']))
	{
		echo "in1";
		$namefile=$_POST['namefile'];
		$emailfile=$_POST['emailfile'];
		$file=$_FILES['file']["name"];
		$details=$_POST['details'];
		if(!empty($namefile)&&!empty($emailfile)&&!empty($file))
		{
			$query="INSERT INTO file VALUES('NULL','".$namefile."','".$emailfile."','".$file."','".$details."')";
			if(mysql_query($query))
			{
			if($_FILES["file"]["error"]>0)
			{
				echo "error";
			}
			else
			{
				if (file_exists("uploads/" . $_FILES["file"]["name"]))
				{
					echo $_FILES["file"]["name"] . " already exists. ";
				}
				else
				{
					move_uploaded_file($_FILES["file"]["tmp_name"],
					"uploads/" . $_FILES["file"]["name"]);
					echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
				}
			}
			}
			else
			{mysql_error();}
		}
		
	}
}
else
{
	echo mysql_error();
}

?>
<?php
$xml = simplexml_load_file("news.xml")
?>

<html>
<head>
<title>National Youth Party</title>

<meta http-equiv="X-UA-Compatible" content="IE=9" />

<link rel="stylesheet" type="text/css" href="css/indexlayout.css" />
<link rel="stylesheet" type="text/css" href="css/slider.css" />
<link rel="stylesheet" type="text/css" href="css/form.css" />
<script src="js/js-image-slider.js" type="text/javascript"></script>
<script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="js/jquery-ui-1.9.2.custom.min.js" type="text/javascript"></script>
<script>

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

function appearleft(id)
{

	$("#" + id).show();
	$("#" + id).animate({opacity: 1, display: "block" }, "slow");
}
function disappearleft(id)
{
   $('#' + id).hide("slow", function(){
	  $('#' + id).css('opacity', '0');
	});
}

</script>
<script>
  $(document).ready( function(){
    $(".submenu").hide();
    $(".menu").hover(
	  function(){
	     //$("a", this).animate({ backgroundColor: 'blue'}, "slow");
	     $(".fix", this).animate({ height: 'show',width:'show', opacity: 'show' }, 'slow');
	  }, function(){
	    $(".fix", this).animate({ height: 'hide',width:'show', opacity: 'hide' }, 'fast');
		//$("a", this).animate({ backgroundColor: '#005CE6'}, "slow");
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
<script>
  function joinForm(){
    $('#form').show();
	$('#form').animate({opacity: 1 }, 'slow');
	 $.ajaxSetup({
             url: "ajax/form.php"
          });
     $.ajax( {
	         
             success:function(data) {
                $('#form').html(data);
				$("#age, #number").keyup(
	              function(){
		            if(!($.isNumeric($('#age, #number').val())) && $('#age, #number').val() != ""){
					  alert("Please enter numbers only!");
					}
	              }
	            );
             }
          });
     
  }
  
  function formClose(){
    $('#form').hide("slow", function(){
	  $('#form').css('opacity', '0');
	});
  }
  
  function submitForm(){
     if($('.elements input').val() == "" ){
	   alert("Please fill all the fields!");
	 }
	 else if($('#captcha').val() != "HUMAN" ){
	   alert("Please enter the correct captcha!");
	 }
	 else{
	   $.post("ajax/submit.php",{ name: $('#name').val(), fName: $('#fName').val(),sex: $('#sex').val(),age: $('#age').val(),address: $('#address').val(),state: $('#state').val(),district: $('#district').val(),number: $('#number').val() },
            function(data){
			    
                $('fieldset').html(data);
            }, "html");
	 }
	 
  }
</script>
<script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</script>
</head>

<body >
<!----------------------------------------------------------------------------------------------->
<div id="fb-root"></div>
<!----------------------------------------------------------------------------------------------->

<!--------------------------invisible---------------------------->
<div id="form">
  <a href="#" id="formClose" onclick="formClose()" >Close</a>
</div> 

			<!---div id="getinvolvedcontentdiv">
				<div id="raiseyourvoicediv">

					<div id="raiseyourvoicediv2">
					<img src="images/bright-idea.png" style="float:left;" />
					<p style="text-align:left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Share Ideas</p>
					<form action="index.php" method="post" >
						<table align="center">
							<tr><td>Name</td><td><input type="text" name="nameidea" /></td></tr>
							<tr><td>Email id</td><td><input type="text" name="emailidea" /></td></tr>
							<tr><td>Ideas</td><td><textarea rows="5" cols="20" name="idea"></textarea></td></tr>
						</table>
					<input type="submit" value="Submit" style="float:right;"/>
					</form>
					</div>
					
					<div id="raiseyourvoicediv1">
					<img src="images/question.png" style="float:left;" />
					<p>Ask a Question</p>
					<form action="index.php" method="POST" >
						<table align="center">
							<tr><td>Name</td><td><input type="text" name="namequestion" /></td></tr>
							<tr><td>Email id</td><td><input type="text" name="emailquestion" /></td></tr>
							<tr><td>Question</td><td><textarea rows="5" cols="20" name="question"></textarea></td></tr>
						</table>
					<input type="submit" value="Submit" style="float:right;"/>
					</form>
					</div>
					
					<div id="raiseyourvoicediv3" style="border:0px;">
					<img src="images/Documents-icon.png" style="float:left;"/>
					<p>Share Documents</p>
					<form action="index.php" method="post" enctype="multipart/form-data">
						<table align="center">
							<tr><td>Name</td><td><input type="text" name="namefile" /></td></tr>
							<tr><td>Email id</td><td><input type="text" name="emailfile" /></td></tr>
							<tr><td>File</td><td><input type="file" name="file" id="file" /></td></tr>
							<tr><td>Details</td><td><textarea rows="3" cols="20" name="details"></textarea></td></tr>
						</table>
					<input type="submit" value="Submit" style="float:right;"/>
					</form>
					</div>
				</div>
				<div id="writetousdiv">
					<center>You can write to us at:___________________________________</center>
				</div>
				<div id="telecommunicationdiv">
					
				</div>
			</div>
			<div id="getinvolvednavmenudiv">
			<ul class="getinvolvednavmenu">
				<li onclick="getinvoledcontentselect('raiseyourvoicediv');">Raise your Voice</li>
				<li onclick="getinvoledcontentselect('writetousdiv');">Write to Us</li>
				<li onclick="getinvoledcontentselect('telecommunicationdiv');">Telecommunication</li>
			</ul>
			
			</div--->
			<div id="askquesdiv">
			<img src="images/close.png" onclick="disappearleft('askquesdiv');"/>
				<div id="askquesheader">
					ASK YOUR QUESTION RELATED TO OUR PARTY OR ON A PARTICULAR AGENDA HERE:
				</div>
				<div id="askquescontent">
					<form action="index.php" method="post">
					<label for="question">Question:</label><br>
					<textarea id="question" rows="10" cols="90" placeholder="enter your question here"></textarea><br>
					<input type="submit" value="Submit Question" />
					</form>
				</div>
			</div>
			<div id="shareideadiv">
			<img src="images/close.png" onclick="disappearleft('shareideadiv');"/>
				<div id="shareideaheader">
					PLACE YOUR IDEAS FOR OUR PARTY HERE:
				</div>
				<div id="shareideacontent">
					<form action="index.php" method="post">
					<label for="idea">Your Ideas:</label><br>
					<textarea id="question" rows="10" cols="90" placeholder="enter your ideas here"></textarea><br>
					<input type="submit" value="Submit Your Idea" />
					</form>
				</div>
			</div>
<!--------------------------invisible---------------------------->
<div class="right">
<div id="staticlinks">
<a class="thumb" href="https://www.facebook.com/" target="_blank"><div class="sIfix"><img src="images/60/facebook.png"/></div></a>
<a class="thumb" href="https://www.twitter.com/" target="_blank"><img src="images/60/twitter.png" /></a>
<a class="thumb" href="https://www.youtube.com/" target="_blank"><img src="images/60/youtube.png" /></a>
<a class="thumb" href="https://www.youtube.com/" target="_blank"><img src="images/60/feed.png" /></a>
<a class="thumb" href="https://www.google.com/" target="_blank"><img src="images/60/google.png" /></a>

</div>
<div id="leftPanel">
  
  <a href="#" onclick="appearleft('askquesdiv');"><img src="images/left/ask.png"  /></a><br>
  <a href="#" ><img src="images/left/share.png" onclick="appearleft('shareideadiv')"/></a><br>
  <a href="http://google.com"><img src="images/left/developer.png" alt="Developers"/></a>
</div>
</div>
<div id="indexwebsite">
  <div id="imageheaderdiv" class="center"> 
		<img src="./images/header.png">
		</div>
	<div id="indexwebsite2" style="background-color:#ffffff" class="center">
	
		
		<div id="navmenudiv"  style="z-index:10;">
		<ul class="navmenu" style="margin-left:0.3%;">
			<li class="menu" style="border-left:2px solid #E65C00;"><a href="#">Home</a></li>
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
					<li style="padding-top:1.16em;line-height:2.5em;" class="submenufirst"><a href="#">Our President</a></li>
					<li><a href="#">Our Core Committee</a></li>
					<li><a href="#">Our State Committee</a></li>
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
		
		<div id="newsflashdiv">
		<div id="sliderFrame">
        <div id="slider">
            <a href="http://www.menucool.com/jquery-slider" target="_blank">
                <img src="images/image-slider-1.png"  />
            </a>
            <img src="images/image-slider-2.jpg" />
            
        </div>
		</div>
		</div>
		
		<div id="joinformdiv">
		Any young person, believing in the working and politics of the Party, can join the party by filling up General Membership Form.
		<p id="openForm" onclick="joinForm();" style="cursor:pointer;color:red;font-size:2em;text-align:center;">joinform</p>
		</div>
		<div id="newsDiv">
		<div id="newsheader">
		NEWS:
		</div>
		
		<div id="news">
		<marquee direction="up"  scrollamount="1">
		<?php
		foreach($xml->news as $news)
		{
		?>
			<div>
			<?php
			echo "Dated: <span style='color:red;'>".$news->dated."</span> - ".$news->content;
			?>
			</div>
		<?php
		}
		?>
		</marquee>
		</div>
		</div>
		
		<div id="facebookDiv">
		<div id="facebookfeedsheader">Facebook Page Feeds:</div>
		
		<div id="facebookfeeds">
			<div class="fb-like-box" data-href="https://www.facebook.com/nyp4india?sid=0.6628177239209799" data-width="400" data-height="300" data-show-faces="true" data-stream="true" data-header="false"></div>
		</div>
		</div>
		<!---facebook like ---->
	    
	</div>
<div id="footerdiv">
	<div id="footercontactus">
		<p>Contact Us at:</p>
		<p>Mobile: +91-9415424370</p>
		<p>Email:nyp@nationalyouthparty.co.in<br>
		nationalyouthparty@gmail.com</p>
	</div>
	<div id="footerlinks">
	<p>Links:</p>
		<ul>
		<li><a href="#">Home</a></li>
		<li><a href="#">About</a></li>
		<li><a href="#">News</a></li>
		<li><a href="#">Gallery</a></li>
		</ul>
	</div>
	<div id="footercopyright">
		<center>All Rights Reserved by NationalYouthParty  &#169; Copyrights 2013<br>
		Designed By <a href="#">Developers</a></center>
	</div>
</div>

<?php
if($http_referer=="http://localhost/nyp/index.php")
{
?>
<script>
loadsecond();
function loadsecond()
{
	document.getElementById('indexopen').style.display="none";
	document.getElementById('indexwebsite').style.display="block";
	document.getElementById('indexwebsite').style.opacity="1";
}
</script>
<?php
}
?>

</body>


</html>