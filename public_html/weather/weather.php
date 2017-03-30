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
			"cavtat"=>"Cavtat",
			"dubrovnik"=>"Dubrovnik",
			"korcula"=>"Korčula",
			"vis"=>"Vis",
			"hvar"=>"Hvar",
			"split"=>"Split",
			"trogir"=>"Trogir",
			"sibenik"=>"Šibenik",
			"zadar"=>"Zadar",
			"pula"=>"Pula",
			"rovinj"=>"Rovinj",
			"porec"=>"Poreč"										
		);
		
		$this->gradovi_lite = array(
			"dubrovnik"=>"Dubrovnik",
			"split"=>"Split",
			"trogir"=>"Trogir",
			"sibenik"=>"Šibenik",
			"zadar"=>"Zadar",
			"pula"=>"Pula"
		);

		$url = "http://www.zadarski.net/weather/cron/3dana.xml";
		X2A::$xml_data = X2A::getFromUrl($url);
		$this->podaci = X2A::Xtoarr();

		$aurl = "http://www.zadarski.net/weather/cron/aktualni.xml";
		X2A::$xml_data = X2A::getFromUrl($aurl);
		$this->aktualni_podaci = X2A::Xtoarr();
		
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
		
			$data = $this->podaci["xml"][$key];

			$table .= "<div><h2>" . $city_title ."</h2><table>";
			$table .= "<tr>
    					<td style='width:100px;'>Date</td>
					    <td style='width:80px;'>Temp.</td>
					    <td style='width:120px;'>Wind</td>
					  </tr>";
						
			if(is_array($data)) {
				foreach($data as $dk=>$v) {
					$dkp = explode("-", $dk); 
					
					/*if($dkp[1] == $this->current_date || ($dkp[1] >= $this->current_date && $tmpdata == null)) {
						if($v[$this->current_part_of_day]) {
							$tmpdata = $v[$this->current_part_of_day];	
						} else {
							$vkeys = array_keys($v);
							$tmpdata = $v[$vkeys[0]];	
						}
					}*/
						if($v[$this->current_part_of_day]) {
							$tmpdata = $v[$this->current_part_of_day];	
						} else {
							$vkeys = array_keys($v);
							$tmpdata = $v[$vkeys[0]];	
						}
						$table .= $this->buildDataTable($dkp[1] , $tmpdata);					
					
				}
				$table .= "</table></div>";
				
			}
		}
		
		return $table;
	}
	
	function buildDataTable($timestamp, $data) {
			list($windicon, $winddir, $windtext) = $this->getWindParams($data["wind_image"]);
			$out = "<h2>" . $city_title."</h2>";
			$out = "<tr>
				<td>" . date("d.m.Y.", $timestamp) ."</td>
				<td>" . $data["tmin"]."°C/" . $data["tmax"]."°C</td>
				<td><img src='" . $windicon ."' width='16' height='16'> " . $windtext ." (" . $winddir .")</td>
			  </tr>";
			return $out;
	}
	
	
	
	function getLiteWeather() {
		
		$table = "";
	
		foreach($this->gradovi_full as $key=>$city_title) {
		
			$data = $this->podaci["xml"][$key];
			$tmpdata = null;

			$table .= "<div><table>";
			$table .= "<td class='Prvi'>WEATHER IN " . $city_title ."</td>";
						
			if(is_array($data)) {
				foreach($data as $dk=>$v) {
					$dkp = explode("-", $dk); 
					
					if($dkp[1] == $this->current_date || ($dkp[1] >= $this->current_date && $tmpdata == null)) {
						if($v[$this->current_part_of_day]) {
							$tmpdata = $v[$this->current_part_of_day];	
						} else {
							$vkeys = array_keys($v);
							$tmpdata = $v[$vkeys[0]];	
						}
					}
					
				}
				$table .= $this->buildDataTableLite($dkp[1] , $tmpdata);					
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
	
	function buildDataTableLite($timestamp, $data) {
			list($windicon, $winddir, $windtext) = $this->getWindParams($data["wind_image"]);
			$out = "<td class='Drugi'><span style='font-size:28px;'>" . $data["tmax"]."°C</span></td>
				<td class='Treci'><img src='" . $windicon ."' width='19' title='" . $windtext ." (" . $winddir .")'> </td>";
			return $out;
	}
	
	
	function getWindParams($src) {
		$srcp = explode("/", $src);
		$param = explode(".", $srcp[1]);
		$windurl = "/images/WindIcons/" . $param[0]. ".png";
		
		$winddir = substr($param[0], 0, -1);
		$windpower = substr($param[0], -1);
		$winddesc = "";
		switch($windpower) {
		
			case "0":
				$winddesc = "calm";
				break;
			case "1":
				$winddesc = "weak";			
				break;
			case "2":
				$winddesc = "moderate";			
				break;
			case "3":
				$winddesc = "strong";			
				break;	
			case "4":
				$winddesc = "strong";			
				break;												
		}

		
		return array($windurl, $winddir, $winddesc);
	}
	
			
}

$W = new W();
$WeatherTable = $W->getFullWeather();
$WeatherTableLite = $W->getLiteWeather();
?>