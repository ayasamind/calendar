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
<?php
   //error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
   /**
	*  * 以下の条件のカレンダー情報を取得します
	*   * ・2015年1月1日～2015年12月31日まで
	*    * ・カレンダーの開始日時の昇順で取得
	*     * ・10件データを取得
	*      */
   define('CALENDAR_ID', 'kyushu.u.calendar@gmail.com');
   define('API_KEY', 'AIzaSyCgy5na7jm0_rtXSRf8TlgK5Qv9xj42-_A');
   define('API_URL', 'https://www.googleapis.com/calendar/v3/calendars/'.CALENDAR_ID.'/events?key='.API_KEY.'&singleEvents=true');
    
   // ここでデータを取得する範囲を決めています
    $t = mktime(0, 0, 0, date("m"), date("d"), date("Y")-1);
    $t2 = mktime(0, 0, 0, date("m"), date("d"), date("Y")+1);
     
     $params = array();
     $params[] = 'orderBy=startTime';
     $params[] = 'maxResults=100';
     $params[] = 'timeMin='.urlencode(date('c', $t));
     $params[] = 'timeMax='.urlencode(date('c', $t2));
      
      $url = API_URL.'&'.implode('&', $params);
       
      $results = file_get_contents($url);
        
	    $json = json_decode($results,true);
		//foreach ((array)$json as $key1 => $value1) {
		//		if(! is_array($value1)){
		//		}else{
		//		foreach ($value1 as $key2 => $value2) {
		//				$format = "%s:%s\n";
		//		        $hoge = sprintf($format, $value2["summary"], $value2["location"]);
				//echo '<p>';
				//echo $hoge;
				//echo '<p>';
		//		if(! is_array($value2)){
		//		} else {
		//				foreach ((array)$value2 as $key3 => $value3){
		//						 if(isset($value3['dateTime'])){
										// echo '<p>';
										// echo $value3['dateTime'];
                                        // echo '<p>';
		//						 } else if(isset($value3['date'])){
										// echo '<p>';
										// echo $value3['date'];
										// echo '<p>';
		//						 } else{}
		//		}
		//		}
		//		}
		//		}
		//		}
		
		
		
	
?>
<div class="slideFrame" id="slider-0">
		<ul class ="slideGuide">
<? foreach ($json['items'] as $item) {
								if(isset($item["start"]["dateTime"])) {
										print '<li class="slideCell"><span class="top">行事名</span><p><span class="name">'.$item["summary"].'</span><span class="left"><br><p><p>場所:'.$item["location"].'<p>開始時間:<p>'.$item["start"]["dateTime"].'<p>終了時間:<p>'.$item["end"]["dateTime"].'</span></li>';
								}else{
								} 
						if(isset($item["start"]["date"])) {
								print '<li class="slideCell"><span class="top">行事名:</span><p><span class="name">'.$item["summary"].'</span><span class="left"><p>場所:'.$item["location"].'<p>日程:'.$item["start"]["date"].'</span></li>'; 
								}else{
								}
								//if(isset($item["end"]["dateTime"])) {
								//  				print '<li class="date"><span class="right">'.$item["end"]["dateTime"].'</span></li>';
								//}else {}
								//if(isset($item["end"]["date"])) {
								//				print '<li class="date"><span class="right">'.$item["end"]["date"].'</span></li>';
								//}else{}
						}
						 ?>
                <!--<li class="slideCell"><span class="left">日程</span><span class="right">部活</span></li>
                <li class="slideCell"><span class="left">日程</span><span class="right">部活</span></li>
                <li class="slideCell"><span class="left">日程</span><span class="right">部活</span></li>
                <li class="slideCell"><span class="left">日程</span><span class="right">部活</span></li>
                <li class="slideCell"><span class="left">日程</span><span class="right">部活</span></li>
                <li class="slideCell"><span class="left">日程</span><span class="right">部活</span></li>
-->
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



<!--<div class="slideFrame" id="slider-1">
		<ul class="slideGuide">
				<li class="slideCell"><img src="img/DSC02839.jpg"width="75"height="75"></li>
			   	<li class="slideCell"><img src="img/DSC02840.jpg"width="75"height="75"></li>
			    <li class="slideCell"><img src="img/DSC02841.jpg"width="75"height="75"></li>
				<li class="slideCell"><img src="img/DSC02842.jpg"width="75"height="75"></li>
				<li class="slideCell"><img src="img/DSC02845.jpg"width="75"height="75"></li>
				<li class="slideCell"><img src="img/DSC02846.jpg"width="75"height="75"></li>
				<li class="slideCell"><img src="img/DSC02847.jpg"width="75"height="75"></li>
				<li class="slideCell"><img src="img/DSC02848.jpg"width="75"height="75"></li>
		</ul>
		<div class="slideCtrl left">prev</div>
		<div class="slideCtrl right">next</div>
									 
</div>
							   
<script>
$(function(){
				$("#slider-1").slider({
                     auto: false,
                     pause: false
					 });
				});
</script>-->
</body>
</html>
