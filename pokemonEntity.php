<?php

class PokemonEntity {
    public $id;
    public $name;
    public $type_1;
    public $type_2;
    public $image_url;

    public function displayPokemon($pokemonFromDB) {
        if($pokemonFromDB->type_2==NULL) {
            return "<div> $pokemonFromDB->id $pokemonFromDB->name <br> Type 1:$pokemonFromDB->type_1 <br> <br> <img src='$pokemonFromDB->image_url'> <br> </div>";
        } else {
            return "<div> $pokemonFromDB->id $pokemonFromDB->name <br> Type 1:$pokemonFromDB->type_1 <br> Type 2:$pokemonFromDB->type_2  <br> <br> <img src='$pokemonFromDB->image_url'> <br> </div>";
        }
    }
}