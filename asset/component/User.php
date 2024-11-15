<?php
    class User extends Show{
        private $conn;
        private $createdTime;
        public $table = "user";

        public function addUser($name, $email, $phoneNumber, $photoUrl, $password, $confirmPassword, $roleID){
            $sql = "INSERT INTO $this->table (name, email, phone_number, photo_url, created_time, roleID, password) VALUES ('$name', '$email', '$phoneNumber', '$photoUrl', '$this->createdTime', '$password', 'roleID')";
            $query =  $this->conn->query($sql);
            if($query){
                return true;
            } else {
                return false;
            }
        }
        public function displayUser(){
            $sql = "SELEXT * FROM $this->table";
            $query = $this->conn->query($sql);
            $data = array();
            if($query->num_rows > 0){
                while($row = $query->fetch_assoc()){
                    $data[] = $row;
                }
                return $data;
            }
        }
        public function getUsertByID($id){
            $sql = "SELECT * FROM $this->table WHERE uid = $id";
            $query = $this->conn->query($sql);
            if($query->num_rows > 0){
                $row = $query->fetch_asssoc();
                return $row;
            } else {
                return false;
            }
        }
        public function getUserByWhere($where){
            $sql = "SELECT * FROM $this->table WHERE $where"; 
            return $this->sqlExecute($sql);
        }
        public function auth($email, $password){
            $data = $this->getUserByWhere("email = '$email'");
            if(count($data) > 0){
                if(password_verify($password, $data[0][6])){
                    $_SESSION['uid'] = $data[0][0];
                    return true;
                } else {
                    return false;
                }
            } else{
                return false;
            }
        }
        public function totalRowCount(){
            $sql = "SELECT * FROM $this->table";
            $query = $this->conn->query($sql);
            $rowCount = $query->num_rows;
            return $rowCount;
        }
        public function totalAdmin(){
            $sql = "SELECT * FROM $this->table WHERE roleID = 0";
            $query = $this->conn->query($sql);
            $rowCount = $query->num_rows;
            return $rowCount;
        }
        public function totalUser(){
            $sql = "SELECT * FROM $this->table WHERE stock = 0";
            $query = $this->conn->query($sql);
            $rowCount = $query->num_rows;
            return $rowCount;
        }
        public function updateProfile($id, $name, $email, $phoneNumber, $photoUrl, $roleID){
            $sql = "UPDATE $this->table SET name = '$name', email = '$email', phone_number = '$phoneNumber', photo_url = '$photoUrl', roleID = '$roleID' WHERE uid = $id";
            $query = $this->conn->query($sql);
            if($query){
                return true;
            } else {
                return false;
            }
        }
        public function deleteUser($id){
            $sql = "DELETE FROM $this->table WHERE uid = '$id'";
            $query = $this->conn->query($sql);
            if($query){
                return true;
            } else {
                return false;
            }
        }
    }
?>