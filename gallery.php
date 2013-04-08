<?php

@$http_referer = $_SERVER['HTTP_REFERER'];

?>

<html>
<head>
<title>National Youth Party</title>

<meta http-equiv="X-UA-Compatible" content="IE=9" />

<link rel="stylesheet" type="text/css" href="css/template.css" />
<link rel="stylesheet" type="text/css" href="css/gallery.css" />
<!-- Add jQuery library -->
<script type="text/javascript" src="jquery-1.9.0.min.js"></script>

<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="jquery.mousewheel-3.0.6.pack.js"></script>

<!-- Add fancyBox -->
<link rel="stylesheet" href="jquery.fancybox.css" type="text/css" media="screen" />
<script type="text/javascript" src="jquery.fancybox.pack.js"></script>
<link rel="stylesheet" href="jquery.fancybox-thumbs.css" type="text/css" media="screen" />
<script type="text/javascript" src="jquery.fancybox-thumbs.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
	$(".fancybox").fancybox({
		prevEffect	: 'none',
		nextEffect	: 'none',
		helpers	: {
			title	: {
				type: 'outside'
			},
			thumbs	: {
				width	: 50,
				height	: 50
			}
		}
	});
});
</script>


<script src="js/jquery-ui-1.9.2.custom.min.js" type="text/javascript"></script>
<script>
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
			<div id="askquesdiv">
			<img src="images/close.png" onclick="disappearleft('askquesdiv');"/>
				<div id="askquesheader">
					ASK YOUR QUESTION RELATED TO OUR PARTY OR ON A PARTICULAR AGENDA HERE:
				</div>
				<div id="askquescontent">
					<form action="index.php" method="post">
					<label for="question">Question:</label><br>
					<textarea id="question"  placeholder="enter your question here"></textarea><br>
					<label for="questionname">Name:</label>
					<input type="text" id="questionname" placeholder="Your Name" /><br>
					<label for="questionemail" id="questionemail"  >Email:</label>
					<input type="text" id="questionemail" id="questionemail" placeholder="Your Email" /> 
					<input type="submit" value="Submit Question" id="submitquestion"/>
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
					<textarea id="question"  placeholder="enter your ideas here"></textarea><br>
					<label for="sharename">Name:</label>
					<input type="text" id="sharename" placeholder="Your Name" /><br>
					<label for="shareemail" id="shareemail" placeholder="Your Email" >Email:</label>
					<input type="text" id="questionemail" id="questionemail" placeholder="Your Email" />
					<input type="submit" value="Submit Your Idea" id="sharesubmit"/>
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
  
  <a href="JavaScript:void(0);" onclick="appearleft('askquesdiv');"><img src="images/left/ask.png"  /></a><br>
  <a href="JavaScript:void(0);" ><img src="images/left/share.png" onclick="appearleft('shareideadiv')"/></a><br>
  <a href="http://google.com"><img src="images/left/developer.png" alt="Developers"/></a>
</div>
</div>
<div id="indexwebsite">
  <div id="imageheaderdiv" > 
		<img src="./images/Header_3.png">
		</div>
	<div id="indexwebsite2" style="background-color:#ffffff;" class="center">
	
		
		<div id="navmenudiv"  style="z-index:10;">
		<ul class="navmenu" style="margin-left:0.3%;">
			<li class="menu" style=""><a href="index.php">Home</a></li>
			<li class="menu"><a href="about.php">About</a></li>
			<li class="menu"><a href="JavaScript:void(0);">Our Agenda&nbsp;<span style="font-size:0.8em;">&#x25BC;</span></a>
				<ul class="submenu fix">
					<li style="line-height:2.5em;" class="submenufirst"><a href="generalagenda.php">General</a></li>
					<li><a href="youthagenda.php">Youth</a></li>
					<li><a href="agendaforfarmer.php">Deprived Section</a></li>
					<li><a href="JavaScript:void(0);">Common Man</a></li>
				</ul>
			</li>
			<li class="menu"><a href="JavaScript:void(0);">Organistion&nbsp;<span style="font-size:0.8em;">&#x25BC;</span></a>
				<ul class="submenu fix">
					<li style="line-height:2.5em;" class="submenufirst"><a href="JavaScript:void(0);">Our President</a></li>
					<li><a href="JavaScript:void(0);">Our Core Committee</a></li>
					<li><a href="JavaScript:void(0);">Our State Committee</a></li>
				</ul>
			</li>
			<li class="menu"><a href="JavaScript:void(0);">Centres&nbsp;<span style="font-size:0.8em;">&#x25BC;</span></a>
				<ul class="submenu fix">
					<li style="line-height:2.5em;" class="submenufirst"><a href="JavaScript:void(0);">North India</a>
						<ul class="subsubmenu">
							<li><a href="centrenotavailable.php">Jammu & Kashmir</a></li>
							<li><a href="centrenotavailable.php">Himachal Pradesh</a></li>
							<li><a href="centrenotavailable.php">Uttarakhand</a></li>
							<li><a href="centrenotavailable.php">Punjab</a></li>
							<li><a href="centrenotavailable.php">Haryana</a></li>
							<li><a href="centrenotavailable.php">Delhi</a></li>
							<li><a href="centrenotavailable.php">Uttar Pradesh</a></li>
							<li><a href="centrenotavailable.php">Bihar</a></li>
						</ul>
					</li>
					<li><a href="JavaScript:void(0);">West</a>
						<ul class="subsubmenu">
							<li><a href="centrenotavailable.php">Rajasthan</a></li>
							<li><a href="centrenotavailable.php">Gujarat</a></li>
						</ul>
					</li>
					<li><a href="JavaScript:void(0);">East</a>
						<ul class="subsubmenu">
							<li><a href="centrenotavailable.php">Sikkim</a></li>
							<li><a href="centrenotavailable.php">Assam</a></li>
							<li><a href="centrenotavailable.php">West Bengal</a></li>
							<li><a href="centrenotavailable.php">Mizoram</a></li>
							<li><a href="centrenotavailable.php">Meghalaya</a></li>
							<li><a href="centrenotavailable.php">Arunachal Pradesh</a></li>
							<li><a href="centrenotavailable.php">Tripura</a></li>
							<li><a href="centrenotavailable.php">Nagaland</a></li>
							<li><a href="centrenotavailable.php">Manipal</a></li>
						</ul>
					</li>
					<li><a href="JavaScript:void(0);">South</a>
						<ul class="subsubmenu">
							<li><a href="centrenotavailable.php">Maharashtra</a></li>
							<li><a href="centrenotavailable.php">Karnataka</a></li>
							<li><a href="centrenotavailable.php">Goa</a></li>
							<li><a href="centrenotavailable.php">Orrisa</a></li>
							<li><a href="centrenotavailable.php">Andhra Pradesh</a></li>
							<li><a href="centrenotavailable.php">Kerela</a></li>
							<li><a href="centrenotavailable.php">Tamil Nadu</a></li>
						</ul></li>
					<li><a href="JavaScript:void(0);">Central</a>
						<ul class="subsubmenu">
							<li><a href="centrenotavailable.php">Madhya Pradesh</a></li>
							<li><a href="centrenotavailable.php">Jharkhand</a></li>
							<li><a href="centrenotavailable.php">Chattisgarh</a></li>
						</ul>
					</li>
				</ul>
			</li>
			<li class="menu"><a href="JavaScript:void(0);">News</a></li>
			<li class="menu"><a href="gallery.php">Gallery</a></li>
			<li class="menu"><a href="JavaScript:void(0);">Contact Us</a></li>
		</ul>
		
		</div>
		<div id="content">
		<div id="gallery">
			<?php
			$imgcount=0;
			$imgnames=scandir("images/gallery");
			foreach ($imgnames as $image)
			{
				if($image=='.'||$image=='..'||is_dir('images/'.$image))
				{
				continue;
				}
				else
				{
				$imagetitle = explode(".",$image);
				?>
				<div id='image<?php echo ++$imgcount;?>'>
				<a href='<?php echo "images/gallery/".$image; ?>' rel="group" class="fancybox"><img src='<?php echo "images/gallery/".$image; ?>' style="width:98%;height:200px;border:10px solid #66cccc;border-style:groove;" alt='<?php echo "national youth party /".$imagetitle[0];?>'/></a><br>
				<?php echo "Title:".$imagetitle[0];?></div>
				<?php
				}
			}
			
			?>
		</div>
		</div>
	    
	</div>
<div id="footerdiv">
	<div id="footercopyright">
		<center>All Rights Reserved by <b>NationalYouthParty</b>  &#169; Copyrights 2013<br>
		Designed By <a href="JavaScript:void(0);">Developers</a></center>
	</div>
</div>


</body>


</html>