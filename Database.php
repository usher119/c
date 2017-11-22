<?php 
//数据库连接类 mysqli 版本

/*class Conn{
//mysql 主机
	public $host="127.0.0.1";
	// 链接用户名
	public $user="usher";
	//数据库连接密码
	public $password="1";
	//链接的数据库
	public $dbname="mgdb";

//锻造方法检查类是否被实例化
/*	public function __construct(){
		//$this->_initialize();
		$link=new mysqli("127.0.0.1","usher","1","mydb");
		if ($link->connect_errno) {
			# code...
			$this->error=$link->connect_error;
			return false;
		}
		else{
			$this->link=$link;
		}
	}*/
    // 数据库链接类
/*	public  static  function links(){
        $link=new mysqli('127.0.0.1','usher','1','mydb');
        if ($link->connect_errno) {
			# code...
			$this->error=$link->connect_error;
			return false;
		}
		else{
			$link=self::links();
			return $link;
			
		}
	}*/
 //返回连接错误信息
/*	public function error(){
		return $this->error;
	}*/

//链接数据库查询
/*	public function select_db($sql){
		//$link=new mysqli("127.0.0.1","usher","1","mydb");
		 mysqli_set_charset(self::links(), "utf8");
		
          $result=mysqli_query(self::links(),$sql);
          return $result;
	}
	}

	
   $conn = new Conn();
   $sql=" SELECT  * FROM report";
   $res=$conn->select_db($sql);
   var_dump($res);*/
  // print_r($res);
class DBHelper
  {
     private $link;
      static private $_instance;
  
      // 连接数据库
      private function __construct($host, $username, $password)
      {
        $this->link = new mysqli($host, $username, $password);        
         $this-> query("SET NAMES 'utf8'", $this->link);
         //echo mysql_errno($this->link) . ": " . mysql_error($link). "n";
         //var_dump($this->link);
         return $this->link;
     }
     private function __clone()
     {
     }
     public static function get_class_nmdb($host, $username, $password)
     {
         //$connector = new nmdb($host, $username, $password);
         //return $connector;
 
         if (FALSE == (self::$_instance instanceof self)) {
             self::$_instance = new self($host, $username, $password);
         }
         return self::$_instance;
     }
     // 连接数据表
     public function select_db($database)
     {
         $this->result =  mysqli_select_db($database);
         return $this->result;
     }
     // 执行SQL语句
     public function query($query)
     {
         return $this->result = mysql_query($query, $this->link);
     }
     // 将结果集保存为数组
     public function fetch_array($fetch_array)
     {
         return $this->result = mysql_fetch_array($fetch_array, MYSQL_ASSOC);
     }
     // 获得记录数目
     public function num_rows($query)
     {
         return $this->result = mysql_num_rows($query);
     }
     // 关闭数据库连接
     public function close()
     {
         return $this->result = mysql_close($this->link);
     }
 }

 ?>