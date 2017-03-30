<?php
/**
 * Copyright 2011 Facebook, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may
 * not use this file except in compliance with the License. You may obtain
 * a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */

 /*
 
mys_yachting
App ID: 406354782804315
App Secret: c2a4e1182be5387eb9e1c7208bb076ca(reset)
[11:01:20] MYS Croatia - Jeremiah McCurdy: Hosting URL:
https://stormy-sierra-8470.herokuapp.com/ (Remove)
[11:01:25] Josip Kalebic: https://developers.facebook.com/tools/explorer
[11:04:42] MYS Croatia - Jeremiah McCurdy: CAAFxk9h7WVsBAD8pIdhtepqzZBHr9GZBxuB85sP9IIyxU2NrBPtMdZB5RyeRKhiIZACQPSPRRmQc8kfZA0ZCoxZCNVfvHMZCWnfBolSK6QZBqBfBpINiAbAP7DFiocZAluYnCv2snrkMY2KatQZAF4ZA0ZAKZB208kYubVnsMZD
 */

//quick function to get the latest facebook status
	function loadFB($wkapiid, $wkappsecret, $accesstoken){
		$ch1 = curl_init();                   //this part we set up curl 
		curl_setopt($ch1, CURLOPT_URL, 'https://graph.facebook.com/oauth/access_token?client_id='.$wkapiid.'&client_secret='.$wkappsecret.'&grant_type=fb_exchange_token&fb_exchange_token='.$accesstoken);

		curl_setopt($ch1, CURLOPT_HEADER, 0);
		curl_setopt($ch1, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch1, CURLOPT_SSL_VERIFYHOST, 0);
		
		$longaccesstoken = curl_exec($ch1);
		curl_close($ch1);
		header('Content-type: application/json');  //specify as xml to not display as one long string
	 	$data=json_decode($longaccesstoken);
		
		print_r($data);
		
		if($data->error->code==190){
			return "Error validating access token, Please Give right Accesstoken for that APPS ";
		}
		elseif ($data->error->code==101) {
			return "Error validating application, Please Give right API ID for that APPS ";
		}
		elseif ($data->error->code==1) {
			return "Error validating client secret, Please Give right Secret Key for that APPS ";
		}
		elseif ($data->error->code!='') {
			return "Something Went Wrong with the configuration of facebook wall ";
		} else {
			return $data;
		}		
	}

$data = loadFB('406354782804315', 'c2a4e1182be5387eb9e1c7208bb076ca', 'CAAFxk9h7WVsBAD8pIdhtepqzZBHr9GZBxuB85sP9IIyxU2NrBPtMdZB5RyeRKhiIZACQPSPRRmQc8kfZA0ZCoxZCNVfvHMZCWnfBolSK6QZBqBfBpINiAbAP7DFiocZAluYnCv2snrkMY2KatQZAF4ZA0ZAKZB208kYubVnsMZD');

/*$p = loadFB('168387909982027');*/
print_r($data);
?>