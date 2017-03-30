<?php
define("DIR", dirname (__FILE__));
include_once(DIR . "/x2a.php");

class W {

	var $lang = "";
	
	var $podaci = null;
	var $aktualni_podaci = null;
	
	
	var $gradovi_full = null;
	
	var $gradovi_lite = null;

	var $gradovi_full_keys = null;
	var $gradovi_lite_keys = null;

	var $current_date = null;
	var $current_part_of_day = null;

	function W() {


		$this->gradovi_full = array(
		"bar"=>"Bar", 
    	"budva"=>"Budva",
		"tivat"=>"Tivat",
		"hercegnovi"=>"Hercegnovi",
		"kotor"=>"Kotor"
		);
		
		$this->gradovi_lite = array(
			"bar"=>"Bar", 
			"budva"=>"Budva",
			"tivat"=>"Tivat",
			"hercegnovi"=>"Hercegnovi",
			"kotor"=>"Kotor"
		);

		$url = "http://www.zadarski.net/weather/cron/mn_7days.json";
		$content1 = X2A::getFromUrl($url);
		$this->podaci = json_decode($content1);

		$aurl = "http://www.zadarski.net/weather/cron/mn_aktualni.json";
		$content2 = X2A::getFromUrl($aurl);
		$this->aktualni_podaci = json_decode($content2);
			
		
		$this->setDateTime();
		
	}
	
	function setDateTime() {
	
		$current_time = time();
		$current_date = mktime(0,0,0,date("m", $current_time),date("d", $current_time),date("Y", $current_time));
		$current_hour = date("H", $current_time);

		if($current_hour >= 21 || $current_hour <= 6) {
			$current_part_of_day = "noc";		
		} else if($current_hour >= 7 && $current_hour <= 14) {
			$current_part_of_day = "prijepodne";		
		} else  {
			$current_part_of_day = "poslijepodne";		
		} 

		$this->current_date = $current_date;
		$this->current_part_of_day = $current_part_of_day;
	
	}
	
	function getFullWeather() {
		
		$table = "";
	
		foreach($this->gradovi_full as $key=>$city_title) {
		
			$data = json_decode(json_encode($this->podaci->$key), true);

			$table .= "<div><h2>" . $city_title ."</h2><table>";
			$table .= "<tr>
    					<td style='width:100px;'>Date</td>
					    <td style='width:80px;'>Temp.</td>
					    <td style='width:120px;'>Wind</td>
					  </tr>";
						
				if(is_array($data)) {
					foreach($data as $dk=>$v) {
	
							$table .= $this->buildDataTable($dk, $v);					
						
					}
				}
				$table .= "</table></div>";
		}
		
		return $table;
	}
	
	function buildDataTable($timestamp, $data) {
			list($windicon, $winddir, $windtext) = $this->getWindParams($data["wind"]);
			$out = "<h2>" . $city_title."</h2>";
			$out = "<tr>
				<td>" . $timestamp ."</td>
				<td>" . $data["temp"] . "</td>
				<td><img src='" . $windicon ."' width='16' height='16'> " . $windtext ." (" . $winddir .")</td>
			  </tr>";
			return $out;
	}
	
	
	
	function getLiteWeather() {
		
		$table = "";
	
		foreach($this->gradovi_full as $key=>$city_title) {
		
			$data = (array) ($this->aktualni_podaci->$key);
			$tmpdata = null;

			$table .= "<div><table>";
			$table .= "<td class='Prvi'>WEATHER IN " . strtoupper($city_title) ."</td>";
						
			if(is_array($data)) {
				$table .= $this->buildDataTableLite($data);					
				$table .= "</table></div>";
				
			}
		}
		
		return $table;
	}
	
	
	function getLiteWeatherLive() {
		
		$table = "";
	
		foreach($this->gradovi_full as $key=>$city_title) {
		
			$data = $this->aktualni_podaci["xml"][$key];

			$table .= "<div><table>";
			$table .= "<td class='Prvi'>WEATHER IN " . $city_title ."</td>";
						
			if(is_array($data)) {
			
				$vjetar_icon = "nest/" . $data["vjetar_smjer"] . (int)$data["vjetar"] . ".gif";
				list($windicon, $winddir, $windtext) = $this->getWindParams($vjetar_icon);
				$table .= "<td class='Drugi'><span style='font-size:28px;'>" . $data["temperatura_zraka"]."°C</span></td>
				<td class='Treci'><img src='" . $windicon ."' width='19' title='" . $windtext ." (" . $data["vjetar_smjer"] .")'> </td>";
			
			
				$table .= "</table></div>";
				
			}
		}
		
		return $table;
	}	
	
	function buildDataTableLite($data) {
			list($windicon, $winddir, $windtext) = $this->getWindParams($data["wind"]);
			$out = "<td class='Drugi'><span style='font-size:28px;'>" . $data["temp"]."°C</span></td>
				<td class='Treci'><img src='" . $windicon ."' width='19' title='" . $windtext ." (" . $winddir .")'> </td>";
			return $out;
	}
	
	
	function getWindParams($src) {
	
		$compas = array(
			"J"=>"S",
			"I"=>"E",
			"Z"=>"W",
			"S"=>"N"
		);
		
		$km_to_bofor = array(
			'4'=>'0',
			'8'=>'1',
			'13'=>'2',
			'20'=>'3',	
			'27'=>'4',	
			'36'=>'5',	
			'45'=>'6',	
			'56'=>'7',	
			'67'=>'8',	
			'80'=>'9',	
			'93'=>'10',	
			'108'=>'11',	
			'123'=>'12',	
			'140'=>'13',
			'157'=>'14',
			'176'=>'15',
			'195'=>'16',
			'216'=>'17'
		);	
	
	
		$srcp = explode(" ", $src);
		$srcp1 = array_filter($srcp);
		$wind1 = (int) ($srcp1[3]);
		//		JI   2 km/h  

		$dirs = $compas[$srcp1[0][0]];
		if($srcp1[0][1] != $srcp1[0][0]) {
				$dirs .= $compas[$srcp1[0][1]];
		}		
		$winddir = $dirs;
		
		foreach($km_to_bofor as $km=>$b) {
			if($wind1 > $km) {
				$wind1_bofor = $b;
			}
		}
		
		if($wind1_bofor == 0 || !$wind1_bofor || $wind1_bofor == "") {
				$windpower = "0";
				$dirs = "C";
				$winddesc = "calm";
		} else if($wind1_bofor >= 1 && $wind1_bofor <= 3) {
				$windpower = "1";	
				$winddesc = "week";			
		}  else if($wind1_bofor >= 4 && $wind1_bofor <= 5) {
				$windpower = "2";	
				$winddesc = "moderate";		
		} else if($wind1_bofor >= 6) {
				$windpower = "3";
				$winddesc = "strong";				
		}
		
		$windurl = "/images/WindIcons/" . $dirs. $windpower .".png";
		return array($windurl, $winddir, $winddesc);
	}
	
			
}

$W = new W();
$WeatherTable = $W->getFullWeather();
$WeatherTableLite = $W->getLiteWeather();
?>