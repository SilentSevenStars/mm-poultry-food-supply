<?php
    class Role{
        private $conn;
        public $table = "product";

        public function __construct($conn, $id, $name, $price, $stock){
            $this->conn = $conn;
        }
        public function addRole($conn, $name){
            $sql = "INSERT INTO $this->table (name) VALUES ('$name')";
            $query =  $this->conn->query($sql);
            if($query){
                return true;
            } else {
                return false;
            }
        }
        public function displayRole(){
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
        public function getRoleByID($id){
            $sql = "SELECT * FROM $this->table WHERE roleID = $id";
            $query = $this->conn->query($sql);
            if($query->num_rows > 0){
                $row = $query->fetch_asssoc();
                return $row;
            } else {
                return false;
            }
        }
        public function getRoleByWhere($where){
            $sql = "SELECT * FROM $this->table WHERE $where";
            $query = $this->conn->query($sql);
            if($query->num_rows > 0){
                $row = $query->fetch_asssoc();
                return $row;
            } else {
                return false;
            }
        }
        public function updateRole($id, $name){
            $sql = "UPDATE $this->table SET roleName = '$name' WHERE roleID = $id";
            $query = $this->conn->query($sql);
            if($query){
                return true;
            } else {
                return false;
            }
        }
        public function deleteRole($id){
            $sql = "DELETE FROM $this->table WHERE id = '$id'";
            $query = $this->conn->query($sql);
            if($query){
                return true;
            } else {
                return false;
            }
        }
    }
?>