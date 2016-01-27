<?php
require_once(__DIR__ . '/../config/config.php');
$app = new MyApp\Controller;
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<title>calender</title>
<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script src="http://kaelab.ranadesign.com/blog/demo/slider/slider.js"></script>
</head>
<body>
<div class="slideFrame" id="slider-0">
		<ul class ="slideGuide">


<? foreach ($json['items'] as $item) {
		if(isset($app->getData()->item["start"]["dateTime"])) {
		    print '<li class="slideCell"><span class="left">行事名</span>';
		    print '<span class="name">'.$item["summary"].'</span>';
  	  	    print '<span class="left">場所</span>';
 			print '<span class="location">'.$item["location"].'</span>';
  			print '<span class="left">日程</span>';
  			print '<span class="left2">開始時間</span>';
  			print '<span class="start">'.$item["start"]["dateTime"].'</span>';
  			print '<span class="left2">終了時間</span>';
  			print '<span class="end">'.$item["end"]["dateTime"].'</span></li>';
		}elseif(isset($app->getData()->item["start"]["date"])) {
		    print '<li class="slideCell"><span class="left">行事名</span><p>';
 		    print '<span class="name">'.$item["summary"].'</span>';
   			print '<span class="left">場所</span>';
   			print '<span class="location">'.$item["location"].'</span>';
   			print '<span class="left">日程</span>';
   			print '<span class="start">'.$item["start"]["date"].'</span></li>';
   			//print '<span class="left">終了時間:</span>';
   			//print '<span class="end">'.$item["end"]["date"].'</span></li>';"]"'
			}else{
   }
}
?>
		
		
		</ul>

				     <div class="slideCtrl left">prev</div> 
				     <div class="slideCtrl right">next</div> 
				</div>
				<script>
$(function(){
				
				$("#slider-0").slider({
                    auto: false,
					pause: false 
					});
				});
				</script>



									 
							   
</body>
</html>
