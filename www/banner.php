<img src="images/banner.jpg" alt="banner" height="300">


<div id="main_menu">
	<ul>

<?
echo "<li ";
if ($strana=="uvod"){
	echo "class='active'";
}
echo "><a href='index.php?strana=uvod'>�vod</a></li>";

echo "<li ";
if ($strana=="onas"){
	echo "class='active'";
}
echo "><a href='index.php?strana=onas'>O N�s</a></li>";

echo "<li ";
if ($strana=="pojistovny"){
	echo "class='active'";
}
echo "><a href='index.php?strana=pojistovny'>Poji��ovny</a></li>";

echo "<li ";
if ($strana=="pece"){
	echo "class='active'";
}
echo "><a href='index.php?strana=pece'>Zdravotn� p��e</a></li>";

echo "<li ";
if ($strana=="mapa"){
	echo "class='active'";
}
echo "><a href='index.php?strana=mapa'>Mapa</a></li>";

echo "<li ";
if ($strana=="orhod"){
	echo "class='active'";
}
echo "><a href='index.php?strana=orhod'>Ordina�n� doba</a></li>";

echo "<li ";
if ($strana=="kontakt"){
	echo "class='active'";
}
echo "><a href='index.php?strana=kontakt'>Kontakt</a></li>";


		
?>
	</ul>
</div>
