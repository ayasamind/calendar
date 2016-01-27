<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<title>calender</title>
<link rel="stylesheet" href="cstyle.css" type="text/css" media="screen" />
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
		
?>
<div class="slideFrame" id="slider-0">
		<ul class ="slideGuide">
<? foreach ($json['items'] as $item) {
								if(isset($item["start"]["dateTime"])) {
										print '<li class="slideCell"><span class="left">行事名</span>';
										print '<span class="name">'.$item["summary"].'</span>';
										print '<span class="left">場所</span>';
										print '<span class="location">'.$item["location"].'</span>';
										print '<span class="left">日程</span>';
										print '<span class="left2">開始時間</span>';
										print '<span class="start">'.$item["start"]["dateTime"].'</span>';
										print '<span class="left2">終了時間</span>';
										print '<span class="end">'.$item["end"]["dateTime"].'</span></li>';
								}elseif(isset($item["start"]["date"])) {
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
