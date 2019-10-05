<?php 
    include_once("Database.class.php");
    include_once("Session.class.php");
    
    class User{
        
        private $table = "users";
        private $connection;
        public function __construct(){
            global $database;
            $this->connection = $database->getConnection();
        }

        public function insert($name, $pass){
            $sql = "INSERT INTO user (username,password) VALUES ('$name','$pass')";
            global $database;
            $res=$database->query($sql);
            return mysqli_insert_id($this->connection);
        }

        public function checkLogin($name,$pass){
            global $database;
            $res=$database->query("SELECT count(*) as cnt FROM user WHERE username = '$name' and password = '$pass'");
			if($row=mysqli_fetch_assoc($res)){	
                extract($row);
                if($cnt != 1 ){
                    echo "Error whle login";
                }else{
                    session_start();
                    $res=$database->query("SELECT user_id FROM user WHERE username = '$name' and password = '$pass'");
                    $row=mysqli_fetch_assoc($res);	
                    extract($row);
                    $_SESSION['u_id']=$user_id;
                    header("Location: personal.php");

                }
            
            }

        }
    }
?>
    