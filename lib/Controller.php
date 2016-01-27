<?php
namespace MyApp;
require_once(__DIR__ . '/../config/config.php');

class Controller {

		private $starttime;
		private $endtime;
		private $params = array();
		private $url;
		private $results;
		private $json;
		private $_values;
		public $item;

		public function setInfo($key, $starttime){
			$starttime = mktime(0, 0, 0, date("m"), date("d"), date("Y")-1);
			$endtime = mktime(0, 0, 0, date('m'), date("d"), date("Y")+1);
			$params[] = 'orderBy=startTime';
			$params[] = 'maxResults=100';
			$params[] = 'timeMin='.urlencode(date('c', $starttime));
			$params[] = 'timeMax='.urlencode(date('c', $endtime));
			$url = API_URL. '&'.implode('&', $params);
			$results = file_get_contents($url);
			$json = json_decode($results,true);
			foreach($json['items'] as $item){
					//$this->_values = $item["start"]["date"];
					//echo $item["summary"];
					echo $item["start"]["dateTime"];
			}
			$this->_values = $starttime;
			}

		
		public function getData(){
				return $this->_values;
		
		}

		  
		  
}

