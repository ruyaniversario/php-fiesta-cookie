<?php

    $spaceinvader = array(
        array('1', 'Bulbasaur', 'Grass', 'Poison', 'Overgrow', 45, 49, 49),
        array('2', 'Ivysaur', 'Grass', 'Poison', 'Overgrow', 60, 62, 63),
        array('3', 'Venusaur', 'Grass', 'Poison', 'Overgrow', 80, 82, 83),
        array('4', 'Charmander', 'Fire', 'N/A', 'Blaze', 39, 52, 43),
        array('5', 'Charmeleon', 'Fire', 'N/A', 'Blaze', 58, 64, 58),
        array('6', 'Charizard', 'Fire', 'Flying', 'Blaze', 78, 84, 78),
        array('7', 'Squirtle', 'Water', 'N/A', 'Torrent', 44, 48, 65),
        array('8', 'Wartortle', 'Water', 'N/A', 'Torrent', 59, 63, 80),
        array('9', 'Blastoise', 'Water', 'N/A', 'Torrent', 79, 83, 100),
        array('10', 'Caterpie', 'Bug', 'N/A', 'Shield Dust', 50, 20, 55)
    );

    $favorite = array(
        array('Bulbasaur',''),
        array('Ivysaur',''),
        array('Venusaur',''),
        array('Charmander',''),
        array('Charmeleon',''),
        array('Charizard',''),
        array('Squirtle',''),
        array('Wartortle',''),
        array('Blastoise',''),
        array('Caterpie','')   
    );

    echo $spaceinvader[0][0].": species: ".$spaceinvader[0][1].", type1: ".$spaceinvader[0][2].", type2: ".$spaceinvader[0][3].", ability: ".$spaceinvader[0][4].", hp: ".$spaceinvader[0][5].", attack: ".$spaceinvader[0][6].", defense: ".$spaceinvader[0][7].".<br>";

    echo $spaceinvader[1][0].": species: ".$spaceinvader[1][1].", type1: ".$spaceinvader[1][2].", type2: ".$spaceinvader[1][3].", ability: ".$spaceinvader[1][4].", hp: ".$spaceinvader[1][5].", attack: ".$spaceinvader[1][6].", defense: ".$spaceinvader[1][7].".<br>";

    echo $spaceinvader[2][0].": species: ".$spaceinvader[2][1].", type1: ".$spaceinvader[2][2].", type2: ".$spaceinvader[2][3].", ability: ".$spaceinvader[2][4].", hp: ".$spaceinvader[2][5].", attack: ".$spaceinvader[2][6].", defense: ".$spaceinvader[2][7].".<br>";

    echo $spaceinvader[3][0].": species: ".$spaceinvader[3][1].", type1: ".$spaceinvader[3][2].", type2: ".$spaceinvader[3][3].", ability: ".$spaceinvader[3][4].", hp: ".$spaceinvader[3][5].", attack: ".$spaceinvader[3][6].", defense: ".$spaceinvader[3][7].".<br>";

    echo $spaceinvader[4][0].": species: ".$spaceinvader[4][1].", type1: ".$spaceinvader[4][2].", type2: ".$spaceinvader[4][3].", ability: ".$spaceinvader[4][4].", hp: ".$spaceinvader[4][5].", attack: ".$spaceinvader[4][6].", defense: ".$spaceinvader[4][7].".<br>";

    echo $spaceinvader[5][0].": species: ".$spaceinvader[5][1].", type1: ".$spaceinvader[5][2].", type2: ".$spaceinvader[5][3].", ability: ".$spaceinvader[5][4].", hp: ".$spaceinvader[5][5].", attack: ".$spaceinvader[5][6].", defense: ".$spaceinvader[5][7].".<br>";

    echo $spaceinvader[6][0].": species: ".$spaceinvader[6][1].", type1: ".$spaceinvader[6][2].", type2: ".$spaceinvader[6][3].", ability: ".$spaceinvader[6][4].", hp: ".$spaceinvader[6][5].", attack: ".$spaceinvader[6][6].", defense: ".$spaceinvader[6][7].".<br>";

    echo $spaceinvader[7][0].": species: ".$spaceinvader[7][1].", type1: ".$spaceinvader[7][2].", type2: ".$spaceinvader[7][3].", ability: ".$spaceinvader[7][4].", hp: ".$spaceinvader[7][5].", attack: ".$spaceinvader[7][6].", defense: ".$spaceinvader[7][7].".<br>";

    echo $spaceinvader[8][0].": species: ".$spaceinvader[8][1].", type1: ".$spaceinvader[8][2].", type2: ".$spaceinvader[8][3].", ability: ".$spaceinvader[8][4].", hp: ".$spaceinvader[8][5].", attack: ".$spaceinvader[8][6].", defense: ".$spaceinvader[8][7].".<br>";

    echo $spaceinvader[9][0].": species: ".$spaceinvader[9][1].", type1: ".$spaceinvader[9][2].", type2: ".$spaceinvader[9][3].", ability: ".$spaceinvader[9][4].", hp: ".$spaceinvader[9][5].", attack: ".$spaceinvader[9][6].", defense: ".$spaceinvader[9][7].".<br>"."<br>";

    echo count($spaceinvader);

    echo '<br>';
    echo '<br>';

    echo " My favorite specie: ".$favorite[8][0];

    echo '<br>';
    echo '<br>';    

    $species = array('Bulbasaur', 'Ivysaur', 'Venusaur', 'Charmander', 'Charmeleon', 'Charizard', 'Squirtle', 'Wartortle', 'Blastoise', 'Caterpie');

    foreach($species as $species){
        echo $species;
        echo '<br>';
    }

?>
    