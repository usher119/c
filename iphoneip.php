<?php
header("Content-Type:text/html;charset=UTF-8");  
  
/*function nowapi_call($a_parm){  
    if(!is_array($a_parm)){  
        return false;  
    }  
    //combinations  
    $a_parm['format']=empty($a_parm['format'])?'json':$a_parm['format'];  
    $apiurl=empty($a_parm['apiurl'])?'http://api.k780.com:88/?':$a_parm['apiurl'].'/?';  
    unset($a_parm['apiurl']);  
    foreach($a_parm as $k=>$v){  
        $apiurl.=$k.'='.$v.'&';  
    }  
    $apiurl=substr($apiurl,0,-1);  
    if(!$callapi=file_get_contents($apiurl)){  
        return false;  
    }  
    //format  
    if($a_parm['format']=='base64'){  
        $a_cdata=unserialize(base64_decode($callapi));  
    }elseif($a_parm['format']=='json'){  
        if(!$a_cdata=json_decode($callapi,true)){  
            return false;  
        }  
    }else{  
        return false;  
    }  
    //array  
    if($a_cdata['success']!='1'){  
        echo $a_cdata['msgid'].' '.$a_cdata['msg'];  
        return false;  
    }  
    return $a_cdata['result'];  
}  
  
$nowapi_parm['app']='phone.get';  
$nowapi_parm['phone']='15927050403';  
$nowapi_parm['appkey']='10003';  
$nowapi_parm['sign']='b59bc3ef6191eb9f747dd4e83c99f2a4';  
$nowapi_parm['format']='json';  
$result=nowapi_call($nowapi_parm);  
  
echo "手机号码归属地查询\r\n";  
echo "<br>";
echo "手机号码: ".$result['phone']."\r\n";  
echo "<br>";
echo "所属区号: ".$result['area']."\r\n";  
echo "<br>";
echo "所属邮编: ".$result['postno']."\r\n";  
echo "<br>";
echo "归属地: ".$result['att']."\r\n";  
echo "<br>";
echo "卡类型: ".$result['ctype']."\r\n";  
echo "<br>";
echo "运营商: ".$result['operators']."\r\n";  
echo "<br>";
//echo "归属地2: ".$result['style_simcall']."\r\n";  
echo "<br>";
//echo "归属地3: ".$result['style_citynm']."\r\n";  
echo "<br>";
  echo $result['operators'].$result['att'];*/
 
//var_dump($result);  
//print_r($result);  



/*header("Content-type: text/html; charset=utf-8"); 
$servername = "localhost";
$username = "usher";
$password = "1";
$dbname = "";


$conn = new mysqli($servername, $username, $password, $dbname);
$conn -> set_charset('utf8');

mysqli_set_charset($conn, 'utf8');

if ($conn->connect_error) {
    die("链接失败: " . $conn->connect_error);
} 

echo "<br>";
$result=$conn->query("SELECT id,phonenum FROM mytable");

echo "<br>";

echo "<br>";
    // 输出数据
$row = $result->fetch_all();

echo count($row);

for ($i=0; $i <count($row) ; $i++) { 
  # code...
  //echo $row[$i][1];
  $num=$row[$i][1];
   echo $num;

/*  $nowapi_parm['app']='phone.get';  
$nowapi_parm['phone']=$num;  
$nowapi_parm['appkey']='10003';  
$nowapi_parm['sign']='b59bc3ef6191eb9f747dd4e83c99f2a4';  
$nowapi_parm['format']='json';  
$result=nowapi_call($nowapi_parm);  

 $phoneland=$result['operators'].$result['att'];
 $sql="UPDATE mytable SET phoneland='$phoneland' WHERE phonenum= '$num'";




 print_r($sql);
 $b=$conn->query($sql);*/
 echo "<br>";



//}

$mobile = "18521561390";  //要查询的电话号码
$content = get_mobile_area($mobile);
print_r($content);
 
function get_mobile_area($mobile){
    $sms = array('province'=>'', 'supplier'=>'');    //初始化变量
    //根据淘宝的数据库调用返回值
    $url = "http://tcc.taobao.com/cc/json/mobile_tel_segment.htm?tel=".$mobile."&t=".time();
 
    $content = file_get_contents($url);
    $sms['province'] = substr($content, "56", "4");  //截取字符串
    $sms['supplier'] = substr($content, "81", "4");

    return $sms;
}

echo "<br>";





?>