    <?php
	
	
	function retriveVideoDetails($vid) {
	
	  $feedURL = 'http://gdata.youtube.com/feeds/api/videos/' . $vid;
	  $video = simplexml_load_file($feedURL);	
	  return $video;
	  
	}
	
    // function to parse a video <entry>
    function parseVideoEntry($entry) {      
      $obj= new stdClass;
      
      // get author name and feed URL
      $obj->author = $entry->author->name;
      $obj->authorURL = $entry->author->uri;
	  $obj->title = $entry->title;	
	  $obj->video = $entry->content->attributes();
	  
	  $idparts = explode(":", $entry->id);
	  $obj->id = $idparts[3];
	  $obj->thumbnail = "http://img.youtube.com/vi/" . $idparts[3] ."/1.jpg";
	  $obj->video = $entry->content->attributes();
      // return object to caller
	  
	  $video_detail = retriveVideoDetails($obj->id);
	  $obj->description = $video_detail->content;
	   
      return $obj;      
    }   

    // set video data feed URL
    $feedURL = 'http://gdata.youtube.com/feeds/api/users/myscroatia/uploads?v=2';

    // read feed into SimpleXML object
    $youtube_data = simplexml_load_file($feedURL);
 
    // parse video entry
    $youtube_last_video = parseVideoEntry($youtube_data->entry[0]);
    ?>