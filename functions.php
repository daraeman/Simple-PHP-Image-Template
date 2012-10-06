<?
	function getImages($dir) {
		$files = scandir($dir);
		$i = 0;
		foreach ($files as $file) {
			if ($file == "." || $file == "..") {}
			else {
				preg_match("/^(.*)\..*$/",$file,$matches);
				$info[$i] = explode(" -- ",$matches[1]);
				
				$info_array[$i]['filename'] = $file;
				$info_array[$i]['title'] = $info[$i][0];
				$info_array[$i]['date'] = $info[$i][1];
				$i++;
			}
		}
		return $info_array;
	}
?>