<?php 
header("Content-type: text/html; charset=utf-8"); 
require_once './c.php';
require_once './say.php';
$a=new Say();
$a->hi();
$c=new Cumstem();
$d=$c->getIP();
$f=$c->Gettime();
echo "</br>";
print_r($d);
echo "</br>";
print_r($f);
echo "</br>";
$e=$c->Keyword();
print_r("关键词：".$e);

$password="333";
//$password1 = hash("sha256", $password);
echo "</br>";
//$hash=password_hash($password,PASSWORD_DEFAULT,['cost' => 12]);
print_r($password1);
echo "</br>";
print_r($hash);
$iP=$c->Getcity();
    $ips=$iP['isp'];
    $s=$iP['city'];
    printf($s.$ips);
echo "</br>";
echo password_hash($password, PASSWORD_DEFAULT)."\n"
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript">
function showTime(){
    nowtime=new Date();
    year=nowtime.getFullYear();
    month=nowtime.getMonth()+1;
    date=nowtime.getDate();
    document.getElementById("mytime").innerText=year+"年"+month+"月"+date+" "+nowtime.toLocaleTimeString();
}

setInterval("showTime()",1000);

</script>
 </head>

<body>

<span id="mytime"></span>
</body>
</html>