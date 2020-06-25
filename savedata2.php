<html>
<head>
	<title>EOM - Save Data</title>
	<style media="screen">
		#subButton {
			padding: 10px;
			color: white;
			background-color: #454545;
			border: 1px solid #000000;
			border-radius: 5px;
			cursor: pointer;
		}
		#subButton:hover {
			background-color: #555555;
		}
		#datainput {
			padding: 10px;
			color: white;
			background-color: #454545;
			border: 1px solid #000000;
			border-radius: 5px;
			cursor: bar;
		}
	</style>
	<?php
		$rdata = $_POST["roosterdata"];
		$fh = fopen("roosterdata.txt", 'w') or die("can't open file");
		fwrite($fh, $rdata);
		fclose($fh);
	?>
</head>

<body bgcolor="#343434">
	<form id="some" name="someName" method="post">
		<input type="text" id="datainput" class="someClass" value="" name="fileWrite"/>
		<input type="submit" value="Save input data" id="subButton" class="submitClass"/>
	</form>
</body>
</html>