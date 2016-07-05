<?

		$album = $_GET['album'];
	?>

	<table align="center">
	<tr align="center">
		<TD colspan="2" class="tlacitka">
			<a href="index.php?strana=galerie">galerie</a>
		</TD>
	</tr>
	</table>


	<!--obr?zek-->
		<?
				$cesta = "galerie/$album/photos/";
				$cesta_male= "galerie/$album/photos_small/";
				
				
				Function ZobrazGalerii($cesta, $cesta_male, $sirka_tabulky ="100%", $pocetH =5, $pocetV = 100)
					{
						$adresar = OpenDir($cesta); // otevre adresar
						$soubor = Array(); // zinicializuje pole
		
						while ($zaznam = ReadDir($adresar)) 
						{ // nacte nazev souboru
							if (!Is_Dir("$cesta/$zaznam")) 
								{ // zkontroluje zda neni nazev adresar
								$soubor[] = $zaznam; // ulozi do pole soubor
								}
						}
		
						CloseDir($adresar); // uzavre adresar
						Sort($soubor); // srovna nazvy souboru 
						
						echo "<table align=\"center\" width=\"$sirka_tabulky\"><tr>";
						
						$sloupec = 0;$radka = 1;
						$sirka = Floor(100 / $pocetH); // procentualni sirka jednoho sloupce
						$obrazek_cislo = 0; // ktery obrazek bude prvni
						
						while ($obrazek = $soubor[$obrazek_cislo]) 
							{ // opakuj dokud nevycerpame vsechny obrazky
								$sloupec++;
		
								if ($sloupec > $pocetH) 
								{ // pokud sloupec prekroci pocet cloupcu,
									$sloupec = 1; $radka++; echo "</tr><tr>"; // .., tak se vytvori nova radka
								}
								if ($radka > $pocetV) break; // pokud prekrocime pocet radku, skoncime cyklus
								
								$id = ($obrazek_cislo+1);
								echo "<td width=\"$sirka%\">";
								echo "<a href=\"?strana=galerie/detail&album=$_GET[album]&id=$id\">";
								echo "<img src=\"$cesta_male/small_$id.jpg\" alt=\"$obrazek\"></a>";
								echo "</td>";
		
								$obrazek_cislo++;
							}
				
						echo "</tr></table>\n";
					}
				ZobrazGalerii("$cesta","$cesta_male"); // zobrazi galerii
		?>


