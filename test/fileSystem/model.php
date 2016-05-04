<?php 


	class db{
		private static $server 	= 	"localhost";
		private static $user 	=	"root";
		private static $pass	= 	"null";
		private static $dbname	=	"file_system";
		public static $connection;

		public static function connOpen(){
			self::$connection = mysqli_connect(self::$server,self::$user,self::$pass,self::$dbname);
			if(!self::$connection){
				echo "Database not connected";
			}else{
				
			}
		}

		public static function connClose(){
			mysqli_close(self::$connection);
			echo "Connection closed";
		}
	}




	class File{
		public $f_name;
		public $f_extension;
		public $f_path;
		public $f_connect;

		function __construct($f_name,$f_extension){
			$this->f_name=$f_name;
			$this->f_extension=$f_extension;
			$this->f_path='files/'.$this->f_name.$this->f_extension;

			if(file_exists($this->f_path)){
				echo "A file with such name already exists";
			}else{
				$this->f_connect=fopen($this->f_path, "w");
				if($this->f_connect){
					echo "A file created";
				}else{
					echo "Something went wrong";
				}
			}
		}
	}




 ?>