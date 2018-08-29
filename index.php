<!DOCTYPE html>
<html>
<head>
	<title>directory index</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/css/foundation.min.css">
	<style type="text/css">
		ul {
			margin: 10%;
			font-size: 2em;
		}
		li {
			list-style: lower-alpha;
		}
	</style>
</head>
<body>
	<ul>
	<?php
	$html = glob("*.{html,htm}", GLOB_BRACE);
	foreach ($html as $h): ?>
		<li>
			<a href="<?php echo $h; ?>"><?php echo str_replace('.html', '', $h); ?></a>
		</li>
	<?php
	endforeach;
	?>
	</ul>
</body>
</html>

