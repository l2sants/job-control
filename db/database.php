<?php

session_start();

Class Db {
    public function conexao() {
        try {
            $conn = new PDO('mysql:host=localhost;dbname=jobcontrol', 'root', 1234);
            return $conn;
        }
        catch(PDOException $e) {
            return $e->getMessage();
        }
    }
}