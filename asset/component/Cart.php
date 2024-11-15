<?php
    class Cart{
        private $conn;
        private $id;
        private $name;
        private $brand;
        private $description;
        private $price;
        private $photo_url;
        private $created_time;
        private $stock;
        private $modified_time;
        private $category_id;
        public $table = "product";

        public function __construct($conn, $id, $name, $price, $stock){
            $this->conn = $conn;
            $this->id = $id;
            $this->name = $name;
            $this->price = $price;
            $this->stock = $stock;
        }
        public function addProduct($conn, $name, $brand, $description, $price, $photo_url, $created_time, $stock, $categoryID){
            $sql = "INSERT INTO $this->table (name, brand,description, photo_url, created_time, price, stock, categoryID) VALUES ('$name', '$brand', '$description','$photo_url','$created_time', '$price', '$stock', $categoryID)";
            $query =  $this->conn->query($sql);
            if($query){
                return true;
            } else {
                return false;
            }
        }
        public function displayProduct(){
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
        public function getProductByID($id){
            $sql = "SELECT * FROM $this->table WHERE productID = $id";
            $query = $this->conn->query($sql);
            if($query->num_rows > 0){
                $row = $query->fetch_asssoc();
                return $row;
            } else {
                return false;
            }
        }
        public function getProductByWhere($where){
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
        public function totalNoStock(){
            $sql = "SELECT * FROM $this->table WHERE stock = 0";
            $query = $this->conn->query($sql);
            $rowCount = $query->num_rows;
            return $rowCount;
        }
        public function updateProduct($id, $name, $brand, $description, $photo_url, $modified_time,$price, $stock, $categoryID){
            $sql = "UPDATE $this->table SET productName = '$name', brand = '$brand', description = '$description', photo_url = '$photo_url', modified_time = '$modified_time', price = '$price', stock = '$stock', categoryID = '$categoryID' WHERE productID = $id";
            $query = $this->conn->query($sql);
            if($query){
                return true;
            } else {
                return false;
            }
        }
        public function deleteProduct($id){
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