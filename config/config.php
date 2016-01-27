<?php

ini_set('display_errors', 1);

define('SITE_URL', 'http://' . $_SERVER['HTTP_HOST']);


//GoogleCalendarAPIの設定

define('CALENDAR_ID', 'kyushu.u.calendar@gmail.com');//取得するカレンダーのID
define('API_KEY', 'AIzaSyCgy5na7jm0_rtXSRf8TlgK5Qv9xj42-_A');//アカウントのAPIKEY
define('API_URL', 'https://www.googleapis.com/calendar/v3/calendars/'.CALENDAR_ID.'/events?key='.API_KEY.'&singleEvents=true');
      $t = mktime(0, 0, 0, date("m"), date("d"), date("Y")-1);//取得開始の日付
      $t2 = mktime(0, 0, 0, date("m"), date("d"), date("Y")+1);//取得終了の日付
      $params = array();
      $params[] = 'orderBy=startTime';
      $params[] = 'maxResults=100';//データの取得数
      $params[] = 'timeMin='.urlencode(date('c', $t));
      $params[] = 'timeMax='.urlencode(date('c', $t2));
	  $url = API_URL.'&'.implode('&', $params);
	  $results = file_get_contents($url);//データを取得
	  $json = json_decode($results,true);//配列に格納
	
require_once(__DIR__ . '/autoload.php');

//session_start();
