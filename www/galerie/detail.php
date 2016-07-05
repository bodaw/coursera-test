		<?
		$id = $_GET['id'];
		$slide = $_GET['slide'];
		$album = $_GET['album'];


			//Zjist?me na jak? fotce se n?v?t?vn?k nach?z? a vypo?teme mu dal?? a p?edchoz?
				if($id)
				{$dalsi=$id+1;$predchozi=$id-1;}
				else
				{$id=1;$dalsi=2;$predchozi=1;}
		
		
				$cesta = "galerie/$_GET[album]/photos/";
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
				$celkem = Ceil( Count($soubor));
				
				//Nastav?me omezen? pro dal?? a p?edchoz? fotky
				if($dalsi>$celkem){$dalsi=$celkem;}
				if($dalsi<1){$predchozi=1;}
				if($idkam=0){$idkam=1;}
			?>
		
			<!--tla??tka pro d?le a zp?t-->
			<table align="center" id="tlacitka">
			<tr>
				<TD class="tlacitka">
					<a href="../?strana=galerie">galerie</a>
				</TD>
			<?if ($id == 1){echo "<td colspan=\"2\" class=\"tlacitka\" width=\"170\">&nbsp;</td>";}
			else{?>
				<TD class="tlacitka">
					<a href="?strana=galerie/detail&album=<?echo $album?>&id=1">&lt;&lt;zaèátek</a>
				</TD>
				<td class="tlacitka">
					<a href="?strana=galerie/detail&album=<?echo $album?>&id=<?echo $predchozi;?>">&lt; pøedchozí</a>
				</td>
			<?}
			if ($id == $celkem){echo "<td colspan=\"2\" class=\"tlacitka\" width=\"170\">&nbsp;</td>";}
			else {?>
				<td class="tlacitka">
					<a href="?strana=galerie/detail&album=<?echo $album?>&id=<?echo $dalsi;?>">další &gt;</a>
				</td>
				<td class="tlacitka">
					<a href="?strana=galerie/detail&album=<?echo $album?>&id=<?echo $celkem;?>">konec &gt;&gt;</a>
				</td>
			<?}?>
				<td class="tlacitka">
					<a href="?strana=galerie/nahledy&album=<?echo $album?>">náhledy</a>
				</td>
			</tr>
			</table>
		
		
			<!--obr?zek-->
			<div id="foto" align="center">
				<a href="?strana=galerie/detail&album=<?echo $album?>&id=<?echo $dalsi;?>">
			<?
				$obrazek = "galerie/$album/photos/$_GET[id].jpg";
				echo "<img src='$obrazek' alt='$NazevObrazku'>";
			?>
				</a>
			</div>
			
			