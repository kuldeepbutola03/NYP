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
<div id="form">
  <a href="#" id="formClose" onclick="formClose()" >Close</a>
</div> 
<div class="right">
<div id="staticlinks">
<a class="thumb" href="https://www.facebook.com/" target="_blank"><div class="sIfix"><img src="images/60/facebook.png"/></div></a>
<a class="thumb" href="https://www.twitter.com/" target="_blank"><img src="images/60/twitter.png" /></a>
<a class="thumb" href="https://www.youtube.com/" target="_blank"><img src="images/60/youtube.png" /></a>
<a class="thumb" href="https://www.youtube.com/" target="_blank"><img src="images/60/feed.png" /></a>
<a class="thumb" href="https://www.google.com/" target="_blank"><img src="images/60/google.png" /></a>

</div>
<div id="leftPanel">
  
  <a href="#" ><img src="images/left/ask.png" /></a><br>
  <a href="#" ><img src="images/left/share.png"/></a><br>
  <a href="http://google.com"><img src="images/left/developer.png" alt="Developers"/></a>
</div>
</div>
<div id="indexwebsite">
  <div id="imageheaderdiv" class="center"> 
		<img src="./images/header.png">
		</div>
	<div id="indexwebsite2" style="background-color:#ffffff" class="center">
	
		
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
		<p id="openForm" onclick="joinForm();">joinform</p>
		</div>
		<div id="newsDiv">
		<div id="newsheader">
		NEWS:
		</div>
		
		<div id="news">
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
		</div>
		</div>
		
		<div id="facebookDiv">
		<div id="facebookfeedsheader">Facebook Page Feeds</div>
		
		<div id="facebookfeeds">
			<div class="fb-like-box" data-href="https://www.facebook.com/nyp4india?sid=0.6628177239209799" data-width="400" data-height="300" data-show-faces="true" data-stream="true" data-header="false"></div>
		</div>
		</div>
		<!---facebook like ---->
	    
	</div>
	<div id="footerHead">
		</div>
		<div id="footerdiv">
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