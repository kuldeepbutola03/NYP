<?php

@$http_referer = $_SERVER['HTTP_REFERER'];

?>

<html>
<head>
<title>National Youth Party</title>

<meta http-equiv="X-UA-Compatible" content="IE=9" />

<link rel="stylesheet" type="text/css" href="css/template.css" />
<link rel="stylesheet" type="text/css" href="css/about.css" />

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
	<div id="indexwebsite2" style="background-color:#ffffff" class="center">
	
		
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
					<li><a href="#">West</a>
						<ul class="subsubmenu">
							<li><a href="centrenotavailable.php">Rajasthan</a></li>
							<li><a href="centrenotavailable.php">Gujarat</a></li>
						</ul>
					</li>
					<li><a href="#">East</a>
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
					<li><a href="#">South</a>
						<ul class="subsubmenu">
							<li><a href="centrenotavailable.php">Maharashtra</a></li>
							<li><a href="centrenotavailable.php">Karnataka</a></li>
							<li><a href="centrenotavailable.php">Goa</a></li>
							<li><a href="centrenotavailable.php">Orrisa</a></li>
							<li><a href="centrenotavailable.php">Andhra Pradesh</a></li>
							<li><a href="centrenotavailable.php">Kerela</a></li>
							<li><a href="centrenotavailable.php">Tamil Nadu</a></li>
						</ul></li>
					<li><a href="#">Central</a>
						<ul class="subsubmenu">
							<li><a href="centrenotavailable.php">Madhya Pradesh</a></li>
							<li><a href="centrenotavailable.php">Jharkhand</a></li>
							<li><a href="centrenotavailable.php">Chattisgarh</a></li>
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
		<strong><br>
              Why National Youth Party ?</strong> <a name="wnup"></a>
<ul>
                <li> In terms of age of population, India is the youngest Nation 
                  of the World. 
                </li><li>Approximately 70% of India&#8217;s population is in the productive 
                  age group of 18-50 years. 
                </li><li>Youth is at the basic foundation of every constructive work 
                  being taken today. 
                </li><li>Nation&#8217;s external defence and internal security is resting 
                  on the shoulders of youth, be it through its armed forces or 
                  through para military and police force. 
                </li><li>Every Political Party of the country uses youth energy to 
                  run its organizational agenda, programs and movements, but when 
                  it comes to contesting elections, formation of Govt., or framing 
                  of policies, youth are given no role at all. 
                </li><li>Reconstruction and restructuring the Nation is in the hands 
                  of Engineers, Doctors, &amp; Technocrats, who are young and 
                  energetic. 
                </li><li>It is always the Youth, who is ready and willing to sacrifice 
                  everything in defence of the Country. 
                </li><li>Youth has shaped the Past, youth is shaping the Present and 
                  Youth shall shape the Future of this great Country. India&#8217;s 
                  Future Growth is linked with the future growth of its Youth. 
                </li><li>Youth forms the backbone of India&#8217;s growth &amp; progress 
                  today and India&#8217;s future shall certainly rest on their 
                  shoulders. 
                </li><li>India &#8216;s Independence could be attained only by the 
                  contribution and sacrifice of its youth. </li>
              </ul>
             <strong>Why then ?</strong> 
              <ul>
                <li>No policies have ever been framed for youth. 
                </li><li>No holistic &amp; complete education is available to Youth. 
                </li><li>Why, Youth is never made the main agenda of any Political 
                  Party? 
                </li><li>Why, no Political Party of Youth has taken shape? 
                </li><li>Why, Youth is not playing any major role in shaping the political 
                  Destiny of the Country? 
                </li><li>Why, Youth is not proportionately represented in the Parliament? 
                </li><li>When there is a proposal to allot certain seats for women 
                  in the parliament, why no such proposal is moved and no laws 
                  are passed for youth by the Govt. 
                </li><li>When Constitution provides for reservation of certain seats 
                  of Parliament to SC and STs, why no such constitutional provision 
                  for the youth. 
                </li><li>Youth of today has no caste, no creed, &amp; no religion. 
                  Youth is only Youth. Youth could be either Dr., Er., Scientist, 
                  Teacher, Student, Farmer, Labour, Businessman, customer and 
                  yet we have no policies for youth. 
                  <p><br>
                  </p>
                </li>
              </ul>
              <strong>A Permanent Solution:</strong> 
              <ul>
                <li> A Political Party of the Youth, by the Youth and for the 
                  Youth. 
                </li><li>Leadership of the Party shall be in the hands of energetic 
                  and visionary Youth. 
                </li><li>Youth shall be the main Focus of the Party in Policy making. 
                  Youth inspired agenda. 
                </li><li>All its programs shall be inspired and carried out by youth 
                  The Party shall have a Nationwide presence. 
                </li><li>The Party&#8217;s inspirations shall always cherish the Unity 
                  of the Country. 
                </li><li>Youth is on the Flag of the Party and youth is its target. 
              </li></ul>
              <p><br>
                <br>
                <strong>That is why, National Youth Party:<br>
                </strong>Party is main focus is making a Capable India, Competent 
                India, Prosperous India, Safe India, Young India and Proud India.<br>
                <strong>SLOGAN:</strong> Young India; Youth India</p>
              <p><strong>As A Result:</strong> <br>
                We shall ensure 100% participation of youth to form a young Parliament, 
                who shall form a young Govt., who shall frame youth centered policies; 
                farmer centered country; a safe and prosperous country, providing 
                complete and holistic free education to all. Just by doing this, 
                the Country shall be free from Child labour, illiteracy, poverty, 
                inequality, casteism, and on top of all free from terrorism. The 
                farmers of the country shall not be compelled to commit suicide, 
                and they will be freed from poverty, condition of despondency, 
                which is still a black spot on the Country&#8217;s image.<br>
                <br>
                <strong>AIM of the Party:<a name="aim"></a><br>
                </strong>National Youth Party aims at making India a Capable Country, 
                Competent Country, Prosperous Country, Safe country, Brave Country, 
                Proud country and a Young Country. The Party wants to see the 
                Country and the Indians, competent in a way, where their thoughts 
                are progressive, vision is lucid and clear, scientific in approach, 
                liberal &amp; democratic in behavior, brave &amp; proud of their 
                lineage and where citizen are continuously engaged in reconstructing 
                a new India. And where every youth is ready &amp; willing to sacrifice 
                everything to make the Country on top of the World again, Indian 
                Scientists lead all over the world; Militarily and Morally strong 
                India; Free from terrorism and discontent, free from internal 
                &amp; external danger concerns, National Youth Party is committed 
                to make India a Wonderland once again. The Party also aims at 
                constructing a democratic set up, which allows every citizens 
                to enjoy equal opportunities of work and expression, irrespective 
                of any discrimination of any nature.<br>
                <br>
                <strong>Work Culture of National Youth Party:</strong><a name="WCNYP"></a><br>
                <br>
                <img src="images/about/page1.jpg" height="830" width="650"><br>
                <img src="images/about/page2.jpg" height="830" width="650"><br>
                <img src="images/about/page3.jpg" height="393" width="650"> <br>
                <br>
                <br>
              </p><p><strong>Some Important Points of Work Culture of the Party:</strong><br>
                <br>
                We believe that the Parliamentarians should have a fixed minimum 
                qualification and hence, only graduates can be nominated as candidates.</p>
              <p>The Country is worried about the increasing criminalisation of 
                politics, yet the political parties make these criminal elements, 
                their candidates for elections. National Youth Party will neither 
                make any criminal or their relatives its candidate, nor will it 
                give criminal elements any chance to work for the Party.</p>
              <p>Casteism and Regionalism are bane for the society and the Country 
                and prove detrimental in uniting the Country, hence none of its 
                candidates shall be allowed to us surnames or caste names.</p>
              <p>Party will announce its candidates five years before and after 
                giving proper and efficient training shall nominate them for elections.</p>
              <p>Women Reservation Bill could not be passed by Parliament, even 
                after several attempts from the Govt.Party does not feel any need 
                for such a Bill to be passed by the Parliament. Party shall give 
                50% of tickets to women candidates, so that people have a choice, 
                whom they chose.</p>
              <p>That is why 50% tickets of the Party shall be given to Young 
                Men and rest 50% to the Young Women.</p>
              <p>Party aims at selecting able and committed youth from all over 
                the Country, to contest elections for the Party. All young people, 
                who do not get a chance because of lack of political clout or 
                social one-upmanship, shall be given a chance by the Party.<br>
                <br>
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