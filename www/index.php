<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1250">
        <meta name="KEYWORDS" content="stolarstvi, bobek, karel, olomouc, nabytek, schodiste, schody, skrine, kuchyn, oblozeni, postel, pokoj, loznice, stul, okna, dvere">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Stolářství Karel Bobek</title>
        <?
		$strana = $_GET[strana];
		if ($strana){$strana == $_GET[strana];}
		else {$strana = uvod;}
	
		$odkaz = "$strana.php";
		
		
		?>
    </head>
    <body>
    	<div id="all">
    		
    		<div id="banner">
    			
	        	<img src="images/banner.jpg" alt="banner" height="300">

				
		</div>
		<div id="main_menu">
			<?include ("mainmenu.php");?>
		</div>
			
	        <div id="stranka">
	            <?include ($odkaz);?>
	        
		<div id="paticka">
			<small>Vytvořil David Bobek, 2011, web: <a href="http://stolarstviolomouc.cz">http://stolarstviolomouc.cz</a></small>
		</div>
		</div>
	</div>
    </body>
</html>
