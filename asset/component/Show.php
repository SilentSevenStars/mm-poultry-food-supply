<?php
    class Show{
        private $conn;
        public function __construct($conn){
            $this->conn = $conn; 
        }
        public function sqlExecute($sql){
            $result = $this->conn->query($sql);
            $data = array();
            if($result->num_rows > 0){
                while($rows = $result->fetch_assoc()){ 
                    $data_row = array();
                    foreach ($rows as $row) {
                        array_push($data_row, $row);
                    }                
                    array_push($data,$data_row);
                }
            }
            return $data;
        }
        public function showRecords($tbl, $where=null, $order=null, $limit=null){
            $sql = "SELECT * FROM $tbl"; 
            if($where!=null){
                $sql.=" WHERE $where"; 
            }
            if($order != null){
                $sql .= " ORDER BY $order" ; 
            }
            if($limit!=null){
                $sql .= " LIMIT $limit"; 
            }
            return $this->sqlExecute($sql);
        }
    }
?>