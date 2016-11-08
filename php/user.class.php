<?php
    include "db.class.php";
class User extends Database{
    public $username;
    public $password;
    protected $mysqli;


    public function __construct(){
        $this->username = $username;
        $this->password = $password;
        $this->mysqli = $this->connect();
    }
        public function checkUser($uname, $pwd){
            $res = $this->execute("SELECT *
                                    FROM users
                                    WHERE username = '" . $uname . "'
                                    AND password = '" . $pwd . "'");
            if($res){
                $this->login();
            }else{
                echo "No such user!";
            }
        }

    public function login(){
        session_start();
        $_SESSION['user'] = md5($this->username);
        echo $this->username;
    }
}
?>
