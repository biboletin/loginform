<?php
class Database{
    private $host = 'localhost';
    private $user = '';
    private $password = '';
    private $db = 'testbase';
    public $connected;

    public function connect(){
        $mysqli = mysqli_connect($this->host, $this->user, $this->password, $this->db);
        if(!$mysqli){
            echo 'Faild to connect to MySQL: (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error;
        }else{
            $this->connected = $mysqli;
        }
        return $this->connected;
    }

    public function close(){
        mysqli_close($this->connected);
    }

    public function execute($q){
$query = $this->connect()->query($q);
    $users = array();
        if($query){
            while($row = mysqli_fetch_assoc($query)){
                array_push($users, $row);
            }
            return $users;
        }else{
            echo "Error: " . $q . "<br/>" . $this->connected->error;
        }
    }
}
?>
