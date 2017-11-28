<!DOCTYPE html>
<html>
<head>
	<link href="css.css" rel="stylesheet">
	<title>Yo bro</title>
</head>
<body style="background-color:#BBCBD2">
	<header>
		<div class="nav">
			<ul>
				<li class="home">
					<a href="index.html">Home</a>
				</li>
				<li class="news">
					<A HREF="News.html">News</A>
				</li>
				<li class="shop">
					<a href="Shop.html">Shop</a>
				</li>
				<li class="about">
					<a href="#">About</a>
				</li>
				<li class="contact">
					<a href="#">Contact</a>
				</li>
				<li class="server">
					<a href="#">Server</a>
				</li>
			</ul>
		</div>





<?php
$dbh = new PDO("mysql:host=localhost;dbname=blog;charset=utf8",
	"root",
	"");

$sql = "select * from blog";
$stmt = $dbh->prepare($sql);
$stmt->execute();

while ($row = $stmt->fetch()) {
	echo"    <article>
		<h2>" . $row["Title"] . "</h2>
		<p>" . $row["Text"] . "</p>

</article>";
}
?>


</body>
</html>