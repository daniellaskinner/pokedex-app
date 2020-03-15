<?php

class PokemonEntity {
    public $id;
    public $name;
    public $type_1;
    public $type_2;

    public function displayPokemon() {
        if($this->type_2==NULL) {
            return "<div> $this->id $this->name <br> Type 1:$this->type_1 <br> <br> <img src='https://pokeres.bastionbot.org/images/pokemon/$this->id.png'/> <br> </div>";
        } else {
            return "<div> $this->id $this->name <br> Type 1:$this->type_1 <br> Type 2:$this->type_2  <br> <br> <img src='https://pokeres.bastionbot.org/images/pokemon/$this->id.png'/> <br> </div>";
        }
    }
}