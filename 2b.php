<?php 
header("Content-type: text/html; charset=utf-8"); 
$arry= array('0'=>'二逼','1'=>'吊丝','2'=>'傻X');
foreach ($arry as $key => $value) {
	# code...
	echo $value;
	echo "</br>";
}


        //方法1：
        $url = 'http://wthrcdn.etouch.cn/weather_mini?city=武汉';
        $html = file_get_contents($url);
       // echo gzdecode($html);
        echo "<br/>";
        echo "<br/>";
        echo "<br/>";
        $j=gzdecode($html);
       $arr=json_decode($j, true);
     foreach($arr as $key => $value){
          // print_r($item);
          // print_r($key);
            var_dump($arr[$key]);
        echo "<br/>";
         }
/*         var_dump($arr);
                  foreach ($arr as $key => $value) {
         	# code...
         	echo $value;
         }*/


        echo "</br>";
         //var_dump(gzdecode($html));
        //print_r("</br>"); 

        echo "</br>";
        // 方法2
        $ch = curl_init();
        $timeout = 5;
        curl_setopt($ch, CURLOPT_URL, 'http://wthrcdn.etouch.cn/weather_mini?city=上海');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//        curl_setopt($ch,CURLOPT_ENCODING ,'gzip');
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
        $file_contents = curl_exec($ch);
        curl_close($ch);

        echo gzdecode($file_contents);
    
 ?>