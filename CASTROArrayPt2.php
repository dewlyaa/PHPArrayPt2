<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CASTRO - PHP Arrays Part 2</title>
</head>
<body>
	<?php 
	$texts = file("textfile.txt");
	echo "Current elements in the text file: "; 
	foreach ($texts as $text){
		print($text);
	}
	sort($texts);
	$duplicate_count = 0;
	for ($i = 0; $i < count($texts)-1; $i++) { 
		$count = 1;
		for ($j = $i+1; $j < count($texts)-1; $j++) { 
			if ($texts[$i] == $texts[$j]){
				$count++;
				$i+=$count-1;
			}
			else {
				break;
			}
			if($count > 1){
				$duplicate_count++;
			}
		}
	}
	echo "<br>Total number of duplicate elements found in the array is: $duplicate_count<br>";
	echo "<br>The frequency of all elements of an array: <br>";
	for ($i = 0; $i < count($texts); $i++) { 
		$count = 1;
		for ($j = $i+1; $j < count($texts); $j++) { 
			if ($texts[$i] == $texts[$j]){
				$count++;
			}
			else {
				break;
			}
		}
		if ($count>=1) {
			$i+=$count-1;
			echo "$texts[$i] occured $count times<br>";
		}
	}
	echo "<br>The Even elements are:<br>";
	foreach ($texts as $text) {
		if ($text % 2 == 0) {
			echo "$text ";
		}
	}
	echo "<br>The Odd elements are:<br>";
	foreach ($texts as $text) {
		if ($text % 2 != 0) {
			echo "$text ";
		}
	}
	?>
</body>
</html>