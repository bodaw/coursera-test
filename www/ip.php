<?
$ip = $_SERVER['REMOTE_ADDR'];

$souborr=fopen("ip.txt", "r");
$text=fread($souborr, 15);
fclose($souborr);

echo $text;

if($ip == $text){
      $zprava="Zdrav�m, toto je informa�n� email o zm�n� ip adresy bodaw serveru. IP adresa $text ji� nad�le nen� platn� a nahradila ji IP adresa $ip";
      mail("bobekdavid@seznam.cz", "zmena ip serveru", $zprava);

$souborw=fopen("ip.txt", "w");
fwrite($souborw, $ip);
fclose($souborw);

}


?>
