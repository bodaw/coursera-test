
	<h3>
		Pøímý kontakt pomocí e-mailu
	</h3>
				<?
				$email=$_REQUEST['email'];
				$zprava=$_REQUEST['zprava'];
				$send=$_REQUEST['send'];
				if ($email==""){
				$email="@";
				
				}
				$form="<form method=\"post\" action=\"$php_self\">
				
				
				
				<p><TABLE WIDTH=\"415\" BORDER=\"0\" CELLPADDING=\"1\" CELLSPACING=\"0\">
				<TR valign=\"top\">
				<TD WIDTH=\"75\" class=\"text11px\">Váš E-mail:</TD>
				<TD WIDTH=\"75\"><input size=\"20\" type=\"text\" name=\"email\" maxlength=\"100\" value=\"$email\"></TD>
				<TR valign=\"top\">
				<TD WIDTH=\"75\" class=\"text11px\">Zpráva:</TD>
				<TD WIDTH=\"75\"><textarea name=\"zprava\" rows=\"4\" cols=\"35\">$zprava</textarea></TD>
				</TR>
				<TR>
				<TD WIDTH=\"80\"></TD>
				<TD WIDTH=\"80\"><input type=\"hidden\" name=\"send\" value=\"submited\"><input type=\"submit\" value=\" Odeslat zprávu \"></TD>
				</TR>
				</TABLE>
				</form>";
				
				$email_error=0;
				$zprava_error=0;
				
				
				if ($send!="submited"){
				echo "$form";
				}else{
				
				
					if (empty($email)){
					echo "<strong>Musíte zadat existující e-mail.</strong><br>";
					$email_error=1;
					}else{
				
					if ((@!strpos ($email,"@")) || (@!strpos ($email,"."))){
					echo "<strong>Musíte zadat existující e-mail.</strong><br>";
					$email_error=1;
					}}
				
				
					if (empty($zprava)){
					echo "<strong>Musíte zadat zprávu.</strong><br>";
					$zprava_error=1;
					}
					
				
					if (($email_error) || ($zprava_error)){
					echo "$form";
					}else{
					$zprava1="$zprava
				
				
				Odesílatel: $email";
				$co = ("Dotaz z webových stránek");
				
				$zprava1=Base64_Encode($zprava1);
$hlavicka .= "From: $email\n".
    "MIME-Version: 1.0\n".
    "Content-Type: text/plain; charset=\"windows-1250\"\n".
    "Content-Transfer-Encoding: base64";
				
					$komu="StolarstviBobek@gmail.com";
					mail ($komu,$co,$zprava1,$hlavicka);
					echo "<h2>Zpráva byla odeslána.</h2>";
					header("location: ?strana=kontakt");
					
					}
				}
				
				?>
