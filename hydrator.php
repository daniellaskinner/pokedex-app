<?php

class PokemonHydrator {
    private $db;

    public function __construct(PDO $db) {
        $this->db = $db;
    }

    public function getPokemonEntities() {
        $query = $this->db->prepare("SELECT * FROM `pokemon`;");
        $query->setFetchMode(PDO::FETCH_CLASS, 'PokemonEntity');
        $query->execute();
        return $query-> fetchAll();
    }
}

