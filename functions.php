<?
/* function to get all images, break their filenames into title/date, and return an array with the filename, title, and date */
	function getImages($dir) {
		// Get filenames
		$files = scandir($dir);
		$i = 0;
		foreach ($files as $file) {
			// exclude directories
			if ($file == "." || $file == ".." || isdir($file)) {}
			else {
				// split off the file extention
				preg_match("/^(.*)\..*$/",$file,$matches);
				
				// split filename into title/date
				$info[$i] = explode(" -- ",$matches[1]);
				
				// assign each images info to its own subarray
				$info_array[$i]['filename'] = $file;
				$info_array[$i]['title'] = $info[$i][0];
				$info_array[$i]['date'] = $info[$i][1];
				$i++;
			}
		}
		// have the function return the images info array
		return $info_array;
	}
?>