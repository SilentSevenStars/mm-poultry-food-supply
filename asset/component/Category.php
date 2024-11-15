<?php
    class Category{
        private $conn;
        public $table = "product";

        public function __construct($conn){
            $this->conn = $conn;
        }
        public function addCategory($conn, $categoryName){
            $sql = "INSERT INTO $this->table (categoryName) VALUES ($categoryName)";
            $query =  $this->conn->query($sql);
            if($query){
                return true;
            } else {
                return false;
            }
        }
        public function displayCategory(){
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
        public function getCategoryByID($id){
            $sql = "SELECT * FROM $this->table WHERE categoryID = $id";
            $query = $this->conn->query($sql);
            if($query->num_rows > 0){
                $row = $query->fetch_asssoc();
                return $row;
            } else {
                return false;
            }
        }
        public function getCategoryByWhere($where){
            $sql = "SELECT * FROM $this->table WHERE $where";
            $query = $this->conn->query($sql);
            if($query->num_rows > 0){
                $row = $query->fetch_asssoc();
                return $row;
            } else {
                return false;
            }
        }
        public function totalRowCount(){
            $sql = "SELECT * FROM $this->table";
            $query = $this->conn->query($sql);
            $rowCount = $query->num_rows;
            return $rowCount;
        }
        public function updateCategory($id, $categoryName){
            $sql = "UPDATE $this->table SET categoryName = '$categoryName' WHERE categoryID = $id";
            $query = $this->conn->query($sql);
            if($query){
                return true;
            } else {
                return false;
            }
        }
        public function deleteProduct($id){
            $sql = "DELETE FROM $this->table WHERE categoryID = '$id'";
            $query = $this->conn->query($sql);
            if($query){
                return true;
            } else {
                return false;
            }
        }
    }
?>