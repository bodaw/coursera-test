<?
$ip = $_SERVER['REMOTE_ADDR'];

$souborr=fopen("ip.txt", "r");
$text=fread($souborr, 15);
fclose($souborr);

echo $text;

if($ip == $text){
      $zprava="Zdravím, toto je informaèní email o zmìnì ip adresy bodaw serveru. IP adresa $text již nadále není platná a nahradila ji IP adresa $ip";
      mail("bobekdavid@seznam.cz", "zmena ip serveru", $zprava);

$souborw=fopen("ip.txt", "w");
fwrite($souborw, $ip);
fclose($souborw);

}


?>
