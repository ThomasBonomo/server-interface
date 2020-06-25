<html>
<head>
	<title>EOM - View Data</title>
	<?php
		$file = fopen("roosterdata.txt","r");
		$data = fread($file,filesize("roosterdata.txt"));
		fclose($file);
		echo $data;
	?>
</head>

<body bgcolor="#343434">
</body>
</html>