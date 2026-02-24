<?php

class Note{
    private $conn;
    private $table = "notes";

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function getAll(){
        $result = $this->conn->query("SELECT * FROM $this->table");
        return $result;
    }

    public function create($title ,$description){
        $stmt = $this->conn->prepare("INSERT INTO $this->table(title, description) VALUES(?,?)");
        $stmt->bind_param("ss",$title,$description);
        return $stmt->execute();
    }

    public function update($sno,$title,$description){
        $stmt = $this->conn->prepare("UPDATE $this->table SET title=? , description = ? WHERE sno=?");
        $stmt->bind_param("ssi",$title,$description,$sno);
        return $stmt->execute();
    }

    public function delete($sno){
        $stmt = $this->conn->prepare("DELETE FROM $this->table WHERE sno=? ");

    $stmt->bind_param("i",$sno);
    return $stmt->execute();
    }
}