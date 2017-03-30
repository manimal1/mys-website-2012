<?php
/*
* ====================================================================
*
* Orange Framework
* Version: 1.0
* License: GNU General Public License
* This file is part of Orange Framework
* Author: Josip Kalebic
* Owner: Spring Media Zadar
*
* ====================================================================
*/

//header('Content-type: text/html; charset=utf-8');
//A CDATA section starts with "<![CDATA[" and ends with "]]>":

class X2A {
/*
X2A & A2X class:Made by Josip Kalebic
*/
public static $font_to_upper = 0;
public static $skip_white = 1;
public static $xml_data;
public static $mydoom = array();

  function getFromUrl($url) {
  /*
	  try {
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			$ulaz = curl_exec($ch);
			curl_close($ch);

	  	  } 

	  catch(Exception $e) {
	  		$ulaz = null; 
	  }*/
	 
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			$ulaz = curl_exec($ch);
			curl_close($ch);
 
  $find[0] = "Š";
  $rep[0] = "&Scaron;";
  $find[1] = "Đ";
  $rep[1] = "&#272;";  
  $find[2] = "Č";
  $rep[2] = "&#268;";  
  $find[3] = "Ć";
  $rep[3] = "&#262;";  
  $find[4] = "Ž";
  $rep[4] = "&#381;";  
  $find[5] = "š";
  $rep[5] = "&scaron;";
  $find[6] = "đ";
  $rep[6] = "&#273;";  
  $find[7] = "č";
  $rep[7] = "&#269;";  
  $find[8] = "ć";
  $rep[8] = "&#263;";  
  $find[9] = "ž";
  $rep[9] = "&#382;"; 
 
  return str_replace($find, $rep, $ulaz);
  
  //return $ulaz2; 
  }

 function AddCData($xml_text) {
 $find_array = array("title", "tekst");
					 
    $b=0;
	foreach($find_array as $f_tag) {
		 $find[$b] = "<" . $f_tag .">";
		 $replace[$b] = "<" . $f_tag ."><![CDATA[";
		 $b++;
		 
		 $find[$b] = "</" . $f_tag .">"; 
		 $replace[$b] = "]]></" . $f_tag .">"; 
		 $b++; 
	}
	
	 return str_replace($find, $replace, $xml_text);
 }

 
	function getFromFile($filename) {
		if($filename != "" and file_exists($filename)) {
		
			if(function_exists(file_get_contents)) { 
				$content = file_get_contents($filename); 
			} else {
				$handle = fopen($filename, "r");
				$content = fread($handle, filesize($filename));
				fclose($handle);
			}
		
		return $content;
		}
	}


	function saveInFile($content, $filename) {
		if($filename != "") {
				$handle = fopen($filename, "w");
				if(fwrite($handle, $content)) {
					return true;
				} else {
					return false;				
				}
				fclose($handle);
		}
	}


	function &last(&$array) {
		if (!count($array)) return null;
		end($array);
		return $array[key($array)];
	}


function myParseXML(&$vals, &$dom, &$lev) {
    do {
        $curr = current($vals);
        $lev = $curr['level'];
        //print_r($curr);
		switch ($curr['type']) {
            case 'open':
			//print_r($dom[$curr['tag']]);
                if (isset($dom[$curr['tag']])) {
				
				$kkeys = array_keys($dom[$curr['tag']]);
//				if(intval($kkeys)) { print_r($kkeys); }	

					if(is_array($dom[$curr['tag']]) && self::checkValues2($kkeys) == false) {					
						$tmp = $dom[$curr['tag']];
						$dom[$curr['tag']] = array($tmp);
					} 
                   	
					array_push($dom[$curr['tag']], array());
					$new =& self::last($dom[$curr['tag']]);

				} else {
					$dom[$curr['tag']] = array();
                    $new =& $dom[$curr['tag']];
                }
                next($vals);
               	 self::myParseXML($vals, $new, $lev);
				break;
            case 'cdata':
			       //echo  "<br>V_ " . $curr['value'];
                if (!isset($dom[$curr['tag']]))
                    $dom[$curr['tag']] = $curr['value'];
                else {
                    if (is_array($dom[$curr['tag']])) 
                        array_push($dom[$curr['tag']] , $curr['value']);
                    else
                        array_push($dom[$curr['tag']] = array($dom[$curr['tag']]) , $curr['value']);
                }
                break;
            case 'complete':
			       if(is_array($curr["attributes"])) {
					    //$curr['value']['attributes'] = $curr["attributes"];
						$curr['value'] = $curr["attributes"];
				   }

			    if (!isset($dom[$curr['tag']])) {
                    $dom[$curr['tag']] = $curr['value'];
             //       echo "<h2>1</h2>";
				} else {
                    if (is_array($dom[$curr['tag']])) 
                        array_push($dom[$curr['tag']] , $curr['value']);
                    else
                        array_push($dom[$curr['tag']] = array($dom[$curr['tag']]) , $curr['value']);
                }
                break;
            case 'close':
                return;
        }
    }
    while (next($vals)!==FALSE);
    return $dom; 
}
/*---------------------------------------------------*/
function JParseXML($xpath = "/*", $xml_data = "", $context_node = NULL) 
{ 
  static $xml; 
  static $xp; 

  // Add /* to the end of $xpath if it's not there 
  if (!ereg("/\*$", $xpath)) 
    $xpath = ereg_replace("/*$", "", $xpath) . "/*"; 

  // Create out temporary array that we'll use to build the final array piece by piece 
  $tmp_array = array(); 

  // If this is our first time in this function, initialize the DOM objects 
  if ($xml_data) 
  { 
    $xml = new DOMDocument; 
    $xml->loadXML($xml_data); 
    $xp = new DOMXPath($xml); 
  } 
  // Get the appropriate nodes for the current path 
  $nodelist = ($context_node) ? $xp->query($xpath, $context_node) : $xp->query($xpath); 

  // This variable is used to keep track of how many times a node with the same name 
  // has appeared.  It puts the appropriate count after each one.  ie: [<nodeName>][<count>] 
  $counter = array(); 

  // Loop through the current list of nodes 
  // If there is more than one child node in the current node with the same name, 
  // create a sub array for them and add a counter. 
  // E.g. [<element>] = <value>  would become [<element>][0] = <value1> and [<element>][1] = <value2> 
  foreach ($nodelist AS $node) 
  { 
    $counter[$node->nodeName] = (isset($counter[$node->nodeName])) ? $counter[$node->nodeName] + 1 : 0; 

    if ($xp->evaluate('count(./*)', $node) > 0) 
    { 
      if ($xp->evaluate('count('.$node->nodeName.')', $node->parentNode) > 1) 
        $tmp_array[$node->nodeName][$counter[$node->nodeName]] = self::JParseXML($node->nodeName."[".($counter[$node->nodeName]+1)."]", "", $node->parentNode); 
      else 
        $tmp_array[$node->nodeName] = self::JParseXML($node->nodeName, "", $node->parentNode); 
    } 
    else 
    { 
      if ($xp->evaluate('count('.$node->nodeName.')', $node->parentNode) > 1) 
        $tmp_array[$node->nodeName][$counter[$node->nodeName]] = $node->nodeValue; 
      else 
        $tmp_array[$node->nodeName] = $node->nodeValue; 
    } 
  } 

  return $tmp_array; 
}

/*---------------------------------------------------*/
function UrlXtoarr($url=null) {
		if($url != "") {
			self::$xml_data = self::getFromUrl($url);  
		}

	   $temp_xml = self::$xml_data;
       self::$mydoom = self::JParseXML("", $temp_xml);
       return self::$mydoom;
}

function FileXtoarr($file=null) {
		if($file != "") {
			self::$xml_data = self::getFromFile($file);  
		}

	   $temp_xml = self::$xml_data;
       self::$mydoom = self::JParseXML("", $temp_xml);
       return self::$mydoom;
}

function Xtoarr($file=null) {
		if($file != "") {
			self::$xml_data = self::getFromFile($file);  
		}

	    $temp_xml = self::$xml_data;

     	$find[0] = "";
		$rep[0] = "&scaron;";  
	 	self::$xml_data = str_replace($find, $rep, $temp_xml);

	   $xml_parser = xml_parser_create();
	   xml_parser_set_option($xml_parser, XML_OPTION_CASE_FOLDING, self::$font_to_upper); // Dont mess with my cAsE sEtTings
       xml_parser_set_option($xml_parser, XML_OPTION_SKIP_WHITE, self::$skip_white);     // Dont bother with empty info
	   xml_parser_set_option($xml_parser, XML_OPTION_TARGET_ENCODING, 'utf-8');
       xml_parse_into_struct($xml_parser, self::$xml_data, $vals);
       xml_parser_free($xml_parser);
       reset($vals);
       $dom = array(); $lev = 0;

       self::$mydoom = self::myParseXML($vals, $dom, $lev);
       return self::$mydoom;
}
/* ----------------------------------------------------------------------------------- */

function checkValues($ar) {
$yesyses = 0;
if(is_array($ar)) {
 foreach($ar as $num=>$val) {
  if(is_integer($num)) { $yesyses = 1; }
 }
}
if($yesyses == 1) { return true; } else { return false; }
}


function checkValues2($ar) {
$yesyses = 0;
if(is_array($ar)) {
 foreach($ar as $num=>$val) {
  if(is_integer($val)) { $yesyses = 1; }
 }
}
if($yesyses == 1) { return true; } else { return false; }
}
//----------------------------------------------
function arrtoX($arr, $start_key=null, $tab=null) {

    if(is_array($arr)) {

		$textTab = "";
		for($i=0; $i<=$tab; $i++) {
			$textTab .= "\t";
		}

		foreach($arr as $keys=>$vals) {
     
			
			  if(is_array($vals)) {
				  if(self::checkValues($vals) == true) {
					  $send_tab = $tab + 1;
					  $izlaz .= "\n" . self::arrtoX($vals, $keys, $send_tab);     
				  } else {

						if($start_key != "") {  
						  $izlaz .= $textTab . "<" . $start_key . ">";
						} else {
						  $izlaz .= $textTab . "<" . $keys . ">";
						}
						$send_tab = $tab + 1;
						$izlaz .= "\n" . self::arrtoX($vals, '', $send_tab);     			  
	
						if($start_key != "") {  
						  $izlaz .= $textTab . "</" . $start_key . ">\n";
						} else {
						  $izlaz .= $textTab . "</" . $keys . ">\n";
						}	
	
				  }

              } else {

						if($start_key != "") {  
						  $izlaz .= $textTab . "<" . $start_key . ">";
						} else {
						  $izlaz .= $textTab . "<" . $keys . ">";
						}

						 $izlaz .= $vals;     			  
	
						if($start_key != "") {  
						  $izlaz .= "</" . $start_key . ">\n";
						} else {
						  $izlaz .= "</" . $keys . ">\n";
						}


			  }
		}
    } 
	
return $izlaz;
}
//---------------------------------------------
function ArrToXml($arr, $tab=null) {
	$izlaz = "";
	//-----------------------------------
	$textTab = "";
	if($tab > 0) {	
		for($i=0; $i<=$tab; $i++) {
			$textTab .= "\t";
		}
	}
	//-----------------------------------

	foreach($arr as $key=>$v) {
		$izlaz .= $textTab . "<" . $key .">";

			if(is_array($v)) {
				 $izlaz .= $textTab . "\n" . self::ArrToXml($v, $tab++);
				$izlaz .= $textTab . "</" . $key .">\n";
			} else {
				 $izlaz .= "<![CDATA[" . $v . "]]>";
				$izlaz .= "</" . $key .">\n";
			}

	}

return $izlaz;
}
//---------------------------------------------
function saveArrayInFile($polje, $file) {
	
	$polje_xml = X2A::ArrToXml($polje, 0);

	$new_polje_xml = "<?xml version=\"1.0\" encoding=\"utf-8\" ?>\n<xml>" . $polje_xml . "</xml>";

	return self::saveInFile($new_polje_xml, $file);
	
}


} // end class
/*-----------------------------------------------------------------------------------------------*/ 
?>
