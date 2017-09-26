<!DOCTYPE html>
<html>
<head>
	<link href="css.css" rel="stylesheet">
	<title>Yo bro</title>
</head>
<body style="background-color:#BBCBD2">

<?php
	include_once("data.php");
	echo"    <article>
		<h1>" . $data[0]["title"] . "</h1>
	</article>";
?>
<div class="Header"><img alt="Header" class="Header" src="http://www.apushexplained.com/uploads/1/3/4/1/13418893/pagedivider_1_orig.png" width="1500">
</div>
<?php

	include_once("data.php");

	foreach($data as $key => $value) {
	echo"    <article>
		<h2>" . $value["author"] . "</h2>
		<p>" . $value["message"] . "</p>
	</article>";
	}

	include_once("data.php");
?>

<?php
	include_once("data.php");
	echo"    <article>
		<h2>" . $data[0]["author"] . "</h2>
		<p>" . $data[0]["message"] . "</p>

</article>";
?>


</body>
</html>