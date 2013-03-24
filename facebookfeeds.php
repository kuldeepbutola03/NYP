<?php

//Get the contents of the Facebook page
$FBpage = file_get_contents('https://graph.facebook.com/553538924670482/feed?access_token=205080116300204|795Tcew8frcZVYGekXd8wyFfoEk');

//Interpret data with JSON
$FBdata = json_decode($FBpage);

//Loop through data for each news item
foreach ($FBdata->data as $news ) {
//Explode News and Page ID's into 2 values
$StatusID = explode("_", $news->id);
echo '<div>';
//Check for empty status (for example on shared link only)
if(!empty($news->picture))
{
	echo "<img src='".$news->picture."' /><br>";
}
if (!empty($news->message)) 
{
 echo $news->message; 
 $datetime=$news->created_time;
 $datetime=explode("T",$datetime);
 $date=$datetime[0];
 $time=$datetime[1];
 $time=explode("+",$time);
 $time=$time[0];
 echo "<span style=\"float:right;\"> on ".$date." at ".$time." </span>";
}
else if(empty($news->message))
{
	echo $news->story;
}
echo '</div>';
}
?>