
	<ul>

<?
echo "<li ";
if ($strana=="uvod"){
	echo "class='active'";
}
echo "><a href='index.php?strana=uvod'>�vod</a></li>";

echo "<li ";
if ($strana=="vyroba"){
	echo "class='active'";
}
echo "><a href='index.php?strana=vyroba'>V�roba</a></li>";

echo "<li ";
if ($strana=="material"){
	echo "class='active'";
}
echo "><a href='index.php?strana=materialy'>Materi�ly</a></li>";

echo "<li ";
if ($strana=="galerie"){
	echo "class='active'";
}
echo "><a href='index.php?strana=galerie'>Galerie</a></li>";

echo "<li ";
if ($strana=="mapa"){
	echo "class='active'";
}
echo "><a href='index.php?strana=mapa'>Mapa</a></li>";


echo "<li ";
if ($strana=="kontakt"){
	echo "class='active'";
}
echo "><a href='index.php?strana=kontakt'>Kontakt</a></li>";


		
?>
	</ul>
