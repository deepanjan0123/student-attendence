<?php
class Database {
    public function getConnection() {
        $conn = null;
        $conn = mysqli_connect("localhost","root","","student-attendence");
        
        return $conn;
    }
}
?>