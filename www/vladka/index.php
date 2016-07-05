<html>

<head>
	<title>Penzion VLAĎKA - úvodní strana</title>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
 	<meta name="KEYWORDS" content="stolarstvi, bobek, karel, olomouc, nabytek, schodiste, schody, skrine, kuchyn, oblozeni, postel, pokoj, loznice, stul, okna, dvere">
	<meta name="penzion Olomouc" content="Penzion Vlaďka Olomouc">
	<meta name="author" content="David Bobek">

	<link rel="stylesheet" href="style.css">

 <?php
	$strana = $_GET[strana];

	if ($strana){$strana == $_GET[strana];}
		else {$strana = onas;}
 
	$odkaz = "$strana.php";
 
 
?>

</head>

<body>
<div id="all">
	<div id="banner">
	
		<div id="menu">
			<table>
			 <tr>
				<td class="norm" onmouseover="this.className='over'" onmouseout="this.className='norm'"><a href="index.php?strana=onas">O nás</a></td>
				<td class="norm" onmouseover="this.className='over'" onmouseout="this.className='norm'"><a href="index.php?strana=foto">Fotogalerie</a></td>
				<td class="norm" onmouseover="this.className='over'" onmouseout="this.className='norm'"><a href="index.php?strana=cenik">Ceník</a></td>
				<td class="norm" onmouseover="this.className='over'" onmouseout="this.className='norm'"><a href="index.php?strana=kontakt">Kontakt</a></td>
			 </tr>
			</table>
		</div>
	</div>
	
	<div id="stranka">
		<?include ("./$odkaz") ; ?>
		 
		
	</div>
</div>
</body>

</html>
