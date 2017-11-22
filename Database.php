<?php 
//数据库连接类 mysqli 版本

class Conn{
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
	public  static  function links(){
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
	}
 //返回连接错误信息
	public function error(){
		return $this->error;
	}

//链接数据库查询
	public function select_db($sql){
		//$link=new mysqli("127.0.0.1","usher","1","mydb");
		 mysqli_set_charset(self::links(), "utf8");
		
          $result=mysqli_query(self::links(),$sql);
          return $result;
	}
	}

	
   $conn = new Conn();
   $sql=" SELECT  * FROM report";
   $res=$conn->select_db($sql);
   var_dump($res);
  // print_r($res);


 ?>