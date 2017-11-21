<?php 
//注册页面获取客户信息类
class Cumstem{
	//定义一个获取客户IP方法

	static public function getIP()
	{
    global $ip;  
    if (getenv("HTTP_CLIENT_IP"))  
        $ip = getenv("HTTP_CLIENT_IP");  
    else if(getenv("HTTP_X_FORWARDED_FOR"))  
        $ip = getenv("HTTP_X_FORWARDED_FOR");  
    else if(getenv("REMOTE_ADDR"))  
        $ip = getenv("REMOTE_ADDR");  
    else $ip = "Unknow";  
    return $ip;  
	}
    //获取用户归宿地方法
    public function Getcity()
    {    $ip=self::getIP();
    	if($ip == ''){
        $url = "http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=json";
        $ip=json_decode(file_get_contents($url),true);
        $data = $ip;
    }else{
        $url="http://ip.taobao.com/service/getIpInfo.php?ip=".$ip;
        $ip=json_decode(file_get_contents($url));   
        if((string)$ip->code=='1'){
           return false;
        }
        $data = (array)$ip->data;

    }
    
    return $data;   
    }
    //获取访问关键词
    public function Keyword(){
    	 $referer = isset($_SERVER['HTTP_REFERER'])?$_SERVER['HTTP_REFERER']:'';
    if(strstr( $referer, 'baidu.com')){ //百度
        preg_match( "|baidu.+wo?r?d=([^\\&]*)|is", $referer, $tmp );
        $keyword = urldecode( $tmp[1] );
        $from = 'baidu';
    }elseif(strstr( $referer, 'google.com') or strstr( $referer, 'google.cn')){ //谷歌
        preg_match( "|google.+q=([^\\&]*)|is", $referer, $tmp );
        $keyword = urldecode( $tmp[1] );
        $from = 'google';
    }elseif(strstr( $referer, 'so.com')){ //360搜索
        preg_match( "|so.+q=([^\\&]*)|is", $referer, $tmp );
        $keyword = urldecode( $tmp[1] );
        $from = '360'; 
    }elseif(strstr( $referer, 'sogou.com')){ //搜狗
        preg_match( "|sogou.com.+query=([^\\&]*)|is", $referer, $tmp );
        $keyword = urldecode( $tmp[1] );
        $from = 'sogou';   
    }elseif(strstr( $referer, 'soso.com')){ //搜搜
        preg_match( "|soso.com.+w=([^\\&]*)|is", $referer, $tmp );
        $keyword = urldecode( $tmp[1] );
        $from = 'soso';
    }else {
        $keyword ='';
       
    	
    }
    return $keyword;
}
    public function Gettime(){
    	date_default_timezone_set('PRC');
         $reg_date=date("Y-m-d H:i:s");

         return $reg_date;
    }

}

 ?>