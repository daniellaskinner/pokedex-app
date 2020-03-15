<?php

class DB {
private $db;

public function __construct() {
$this->db = new PDO('mysql:host=db; dbname=pokedex_hb', 'root', 'password');
}

public function getConnection() {
return $this->db;
}
}