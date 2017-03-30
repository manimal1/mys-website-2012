<?php

class Weather {

	var $url = 'https://api.forecast.io/forecast/391c66a581a7b9101d1d30649da5182e/{coords}/?units=si';
	//var $dir = "/var/www/mysyachting.com/hr/weather-data/";
	var $dir = "/home/mysyacht/public_html/me/weather-data/";
	var $files;
	var $now;

	var $citiesCroatia = array(
		'CAVTAT' =>'42.5794,18.2208' ,
		'DUBROVNIK' => '42.6403,18.1083' ,
		'KORČULA' => '42.9500,17.1167' ,
		'VIS' => '43.0667,16.1833' ,
		'HVAR' => '43.1667,16.4500' ,
		'SPLIT' => '43.5100,16.4500' ,
		'TROGIR' => '43.5169,16.2514' ,
		'ŠIBENIK' => '43.7350,15.8906' ,
		'ZADAR' => '44.1142,15.2278' ,
		'PULA' => '44.8667,13.8500' ,
		'ROVINJ' => '45.0833,13.6333' ,
		'POREČ' => '45.2167,13.5833'
		);

	var $citiesMontenegro = array(
		'BAR' => '42.1000,19.1000' ,
		'BUDVA' => '42.2881,18.8425' ,
		'TIVAT' => '42.4300,18.7000' ,
		'HERCEGNOVI' => '42.4530,18.5312' ,
		'KOTOR' => '42.4300,18.7700' 
		);

	function __construct() {
		$this->files = array_diff(scandir($this->dir),array('..', '.'));
		$this->now = time();
	}

	function updateForecast($coords,$city) {

		$opts = array(
			CURLOPT_HEADER => 0, 
			CURLOPT_FRESH_CONNECT => 1, 
			CURLOPT_RETURNTRANSFER => 1, 
			CURLOPT_FORBID_REUSE => 1, 
			CURLOPT_TIMEOUT => 60
			);

		$res = str_replace('{coords}', $coords, $this->url);
		$ch = curl_init();
		curl_setopt_array($ch, $opts);
		curl_setopt($ch,CURLOPT_URL, $res);
		$result = curl_exec($ch);

		$handle = fopen($this->dir.$city.".json","w");
		fwrite($handle,$result);
		fclose($handle);
		return $result;
	}

//$res = (json_decode($result,1));
/*
date_default_timezone_set('Europe/Zagreb');
echo $res['daily']['data'][0]['time'] . "=";
echo date('d-m-Y H:i:s',$res['daily']['data'][0]['time']) . "\r\n";
echo $res['daily']['data'][0]['summary']. "\r\n";
echo $res['daily']['data'][0]['temperatureMin']. "\r\n";
echo $res['daily']['data'][0]['temperatureMax']. "\r\n";
echo $res['daily']['data'][0]['windSpeed']. "\r\n";
echo $res['daily']['data'][0]['windBearing']. "\r\n";
*/
//$ch = curl_init()


	function start() {

		if(count($this->files) > 0)
		{
			foreach($this->citiesMontenegro as $city=>$coord)
			{
				if(file_exists($this->dir.$city.".json"))
				{
					$fmtime = filemtime($this->dir.$city.".json");

					if($this->now-$fmtime > 3600)
					{
						//echo "Updating files: " . $city . "\r\n";
						$this->updateForecast($coord,$city);
					}
					else
					{
						//echo $city . " diff:" . ($this->now-$fmtime) . "\r\n";
					}
				}
				else
				{	
					//echo "Updating files: " . $city . "\r\n";
					$this->updateForecast($coord,$city);
				}
			}
		}
		else {
			foreach($this->citiesMontenegro as $city=>$coord)
			{
				//echo "Updating files: " . $city . "\r\n";
				$this->updateForecast($coord,$city);
			}
		}
	}

	function getCityData() {

		$table = "";
		$windDirectionText = "";
		$windDirectionIcon = "";

		foreach ($this->citiesMontenegro as $cityName => $coords) {
		
			//echo $this->dir.$cityName.".json";

			if(file_exists($this->dir.$cityName.".json")) 
			{
				$content = file_get_contents($this->dir.$cityName.".json");
				if (strlen($content) > 0)
				{
					$jsonObj = json_decode($content,1);

					$table .= "<div><h2>" . $cityName ."</h2><table>";
					$table .= "<tr>
                                        <td style='width:100px;'>Date</td>
                                            <td style='width:80px;'>Temp.</td>
                                            <td style='width:120px;'>Wind</td>
                                          </tr>";

					for($i=0;$i<3;$i++) {
					$tmin = $jsonObj['daily']['data'][$i]['temperatureMin'];
					$tmax = $jsonObj['daily']['data'][$i]['temperatureMax'];
					$windSpeed = $jsonObj['daily']['data'][$i]['windSpeed'];
					$windDirection = $jsonObj['daily']['data'][$i]['windBearing'];
					$date = date('d.m.Y',$jsonObj['daily']['data'][$i]['time']);

					switch(true) {

						case ($windDirection <= 33 && $windDirection >= 349):
							$windDirectionText = "N";
							break;
							case ($windDirection >= 33 && $windDirection <= 78):
							$windDirectionText = "NE";
							break;
							case ($windDirection >= 79 && $windDirection <= 123):
							$windDirectionText = "E";
							break;
							case ($windDirection >= 124 && $windDirection <= 168):
							$windDirectionText = "SE";
							break;
							case ($windDirection >= 169 && $windDirection <= 213):
							$windDirectionText = "S";
							break;
							case ($windDirection >= 214 && $windDirection <= 258):
							$windDirectionText = "SW";
							break;
							case ($windDirection >= 259 && $windDirection <= 303):
							$windDirectionText = "W";
							break;
							case ($windDirection >= 304 && $windDirection <= 348):
							$windDirectionText = "NW";
							break;
							default:
							break;
					}

					switch(true) {

                                                case ($windSpeed >= 0.00 && $windSpeed < 0.3 ):
                                                $windText = "calm";
                                                $windDirectionIcon = "C0.png";
                                                break;
                                                case ($windSpeed >= 0.3 && $windSpeed < 5.5 ):
                                                $windText = "weak";
                                                $windDirectionIcon = $windDirectionText . "1.png";
                                                break;
                                                case ($windSpeed >= 5.5 && $windSpeed < 10.8 ):
                                                $windText = "moderate";
                                                $windDirectionIcon = $windDirectionText . "2.png";
                                                break;
                                                case ($windSpeed >= 10.8 && $windSpeed < 13.8):
                                                $windText = "strong";
                                                $windDirectionIcon = $windDirectionText . "3.png";
                                                break;
                                                case ($windSpeed >=13.8):
                                                $windText = "strong";
                                                $windDirectionIcon = $windDirectionText . "3.png";
                                                break;
                                                default:
                                                break;
					}

					//$table .= "<div><h2>" . $cityName ."</h2><table>";
					



                    			//$table .="<h2>" . $cityName."</h2>
                    			$table .="
                    			<tr>
                    			<td>" . $date ."</td>
                    			<td>" . (int)$tmin."°C/" . (int)$tmax."°C</td>
                                <td><img src='/images/WindIcons/" . $windDirectionIcon . "' width='16' height='16'> " . $windText ." (" . $windDirectionText .")</td>
                                </tr>";
                    
                	}
				}
			}
			else 
			{
				
			}
			$table .= "</table></div>";
		}
		return $table;
	}


		function getCityDataLite() {

		$table = "";
		$windDirectionText = "";
		$windDirectionIcon = "";

		foreach ($this->citiesMontenegro as $cityName => $coords) {

			if(file_exists($this->dir.$cityName.".json")) 
			{
				$content = file_get_contents($this->dir.$cityName.".json");
				if (strlen($content) > 0)
				{
					$jsonObj = json_decode($content,1);

					$table .= "<div><table>";
					$table .= "<td class='Prvi'>WEATHER IN " . $cityName ."</td>";

					$tmin = $jsonObj['daily']['data'][0]['temperatureMin'];
					$tmax = $jsonObj['daily']['data'][0]['temperatureMax'];
					$windSpeed = $jsonObj['daily']['data'][0]['windSpeed'];
					$windDirection = $jsonObj['daily']['data'][0]['windBearing'];
					$date = date('d.m.Y',$jsonObj['daily']['data'][0]['time']);

					switch(true) {

						case ($windDirection <= 33 && $windDirection >= 349):
							$windDirectionText = "N";
							break;
							case ($windDirection >= 33 && $windDirection <= 78):
							$windDirectionText = "NE";
							break;
							case ($windDirection >= 79 && $windDirection <= 123):
							$windDirectionText = "E";
							break;
							case ($windDirection >= 124 && $windDirection <= 168):
							$windDirectionText = "SE";
							break;
							case ($windDirection >= 169 && $windDirection <= 213):
							$windDirectionText = "S";
							break;
							case ($windDirection >= 214 && $windDirection <= 258):
							$windDirectionText = "SW";
							break;
							case ($windDirection >= 259 && $windDirection <= 303):
							$windDirectionText = "W";
							break;
							case ($windDirection >= 304 && $windDirection <= 348):
							$windDirectionText = "NW";
							break;
							default:
							break;
					}

					switch(true) {

						case ($windSpeed >= 0.00 && $windSpeed < 0.3 ):
						$windText = "calm";
						$windDirectionIcon = "C0.png";
						break;
						case ($windSpeed >= 0.3 && $windSpeed < 5.5 ):
						$windText = "weak";
						$windDirectionIcon = $windDirectionText . "1.png";
						break;
						case ($windSpeed >= 5.5 && $windSpeed < 10.8 ):
						$windText = "moderate";
						$windDirectionIcon = $windDirectionText . "2.png";
						break;
						case ($windSpeed >= 10.8 && $windSpeed < 13.8):
						$windText = "strong";
						$windDirectionIcon = $windDirectionText . "3.png";
						break;
						case ($windSpeed >=13.8):
						$windText = "strong";
						$windDirectionIcon = $windDirectionText . "3.png";
						break;
						default:
						break;

					}


					$table .= "<td class='Drugi'><span style='font-size:28px;'>" . (int)$tmax."°C</span></td>
							   <td class='Treci'><img src='images/WindIcons/" . $windDirectionIcon ."' width='19' title='" . $windText ." (" . $windDirectionText .")'> </td>";
					$table .= "</table></div>";


				}

			}


		}

		return $table;

	}
}

$W = new Weather();
$W->start();
$WeatherT = $W->getCityData();
$WeatherTL = $W->getCityDataLite();
?>
