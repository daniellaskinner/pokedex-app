<?php
require_once 'db.php';
require_once 'pokemonEntity.php';
require_once 'hydrator.php';

$db = new DB();
$PDOconnection = $db->getConnection();
$pokemonHydrator = new PokemonHydrator($PDOconnection);
$pokemonsArray = $pokemonHydrator->getPokemonEntities();

foreach($pokemonsArray as $pokemon) {
    $pokemonEntity = new PokemonEntity();
    echo $pokemonEntity->displayPokemon($pokemon);
}

?>

<html>
<head>
    <title>Pokedex!</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Pokemon, gotta catch 'em all!</h1>
</body>
</html>
