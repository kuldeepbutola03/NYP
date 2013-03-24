<?php

@$http_referer = $_SERVER['HTTP_REFERER'];

?>

<html>
<head>
<title>National Youth Party</title>

<meta http-equiv="X-UA-Compatible" content="IE=9" />

<link rel="stylesheet" type="text/css" href="css/template.css" />
<link rel="stylesheet" type="text/css" href="css/youthagenda.css" />

<script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="js/jquery-ui-1.9.2.custom.min.js" type="text/javascript"></script>
<script>
function appearleft(id)
{

	document.getElementById(id).style.display="block";
}
function disappearleft(id)
{

	document.getElementById(id).style.display="none";
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
	<div id="indexwebsite2" style="background-color:#ffffff;height:700px;" class="center">
	
		
		<div id="navmenudiv"  style="z-index:10;">
		<ul class="navmenu" style="margin-left:0.3%;">
			<li class="menu" style="border-left:2px solid #E65C00;"><a href="index.php">Home</a></li>
			<li class="menu"><a href="about.php">About</a></li>
			<li class="menu"><a href="#">Our Agenda&nbsp;<span style="font-size:0.8em;">&#x25BC;</span></a>
				<ul class="submenu fix">
					<li style="padding-top:1.16em;line-height:2.5em;" class="submenufirst"><a href="#">General</a></li>
					<li><a href="youthagenda.php">Youth</a></li>
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
		<div id="content">
		<h1>Sorry We Do Not Have Centers In This Region...............</h1>
		</div>
	    
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


</body>


</html>