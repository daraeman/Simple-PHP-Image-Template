<?
	require_once('../functions.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>James Vaughan</title>
	<link href="main.css" rel="stylesheet" type="text/css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
	<script>
		var interval;
		var left = 50;
		$(document).ready(function() {
			interval = setInterval(function() {
				var pos = $(window).scrollLeft();
				if (pos > left) {
					$('#left').css({left: '-300px'});
					$('aside').show();
				}
				if (pos < left) {
					$('#left').css({left: '50px'});
					$('aside').hide();
				}
			},
			250);
		});
			
	</script>
</head>

<body>
	<aside>
		<div>
			<div>
				JV
			</div>
		</div>
	</aside>
    <div id="left">
        <header>
        	<h1><a href="index.html">James Vaughan</a></h1>
        	<h2>16 // Male // California</h2>
        </header>
        <nav>
            <ul>
                <li><a href="https://www.facebook.com/magicjames">Facebook</a></li>
                <li><a href="https://twitter.com/magicjamesv">Twitter</a></li>
                <li><a href="http://www.flickr.com/photos/magicjamesv/">Flickr</a></li>
                <li><a href="http://www.youtube.com/user/yoyovaughan?feature=guide">YouTube</a></li>
            </ul>
        </nav>
        <footer>
        	&copy; 2012 James Vaughan
        </footer>
    </div>
    <section>
	<?
		$dir = "img/live/";
	
		$images = getImages($dir);
		
		foreach ($images as $image) {
			$image_path = $dir.$image['filename'];
			$title = $image['title'];
			$date = $image['date'];
			
			include('../templates/magicjamesv.php');
			
		}
	?>
    </section>
</body>
</html>