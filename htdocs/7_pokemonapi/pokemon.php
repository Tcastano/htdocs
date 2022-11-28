<?php
$arrayNumAleatorio = [];
for ($i=0; $i <= 2; $i++) { 
    $numeroAleatorio = rand(1, 905);
    $arrayNumAleatorio[$i] = $numeroAleatorio;
}

$arrayNombrePokemon = [];
$arrayTipoPokemon = [];

$pokemon = array(
    'pokemon1' => array(
        'id' => $arrayNumAleatorio[0],
        'nombre' => sacarNombrePokemons($arrayNumAleatorio)[0],
        // 'tipo' => array(
        //     'tipo1' => sacarTipoPokemon($arrayNumAleatorio)[0][0],
        //     'tipo2' => sacarTipoPokemon($arrayNumAleatorio)[0][1],
        // )
    ),
    'pokemon2' => array(
        'id' => $arrayNumAleatorio[1],
        'nombre' => sacarNombrePokemons($arrayNumAleatorio)[1],
        // 'tipo' => array(
        //     'tipo1' => sacarTipoPokemon($arrayNumAleatorio)[1][0],
        //     'tipo2' => sacarTipoPokemon($arrayNumAleatorio)[1][1],
        // )
    ),
    'pokemon3' => array(
        'id' => $arrayNumAleatorio[2],
        'nombre' => sacarNombrePokemons($arrayNumAleatorio)[2],
        // 'tipo' => array(
        //     'tipo1' => sacarTipoPokemon($arrayNumAleatorio)[2][0],
        //     'tipo2' => sacarTipoPokemon($arrayNumAleatorio)[2][1],
        // )
    )
);
print("<pre>".print_r($pokemon,true)."</pre>");

function sacarNombrePokemons($arrayNumAleatorio){
    for ($i=0; $i < count($arrayNumAleatorio); $i++) { 
        $pokemonJSON = file_get_contents("https://pokeapi.co/api/v2/pokemon/$arrayNumAleatorio[$i]");
        $arrayPokemon = json_decode($pokemonJSON, true, 512, JSON_UNESCAPED_UNICODE);
        $arrayNombrePokemon[$i] = $arrayPokemon['species']['name'];
    }
    return $arrayNombrePokemon;
}

function sacarTipoPokemon($arrayNumAleatorio){
    $tipos = [];
    for ($i=0; $i < count($arrayNumAleatorio); $i++) { 
        $pokemonJSON = file_get_contents("https://pokeapi.co/api/v2/pokemon/$arrayNumAleatorio[$i]");
        $arrayPokemon = json_decode($pokemonJSON, true, 512, JSON_UNESCAPED_UNICODE);

        for ($j = 0; $j < count($arrayPokemon['types']); $j++) { 
            
            $tipo = $arrayPokemon['types'][$j]['type']['name'];
            
            $tipos[$i][$j] = $tipo;
        }    
    }
    return $tipos;
}
echo'<br>';
echo'<br>';
print("<pre>".print_r(sacarTipoPokemon($arrayNumAleatorio),true)."</pre>");
echo '<br>';
echo '<br>';


//array con posicion nombre = nombre, posicion tipos = array de tipos

// for ($i=0; $i < count($arrayNumAleatorio); $i++) { 
//     $pokemonJSON = file_get_contents("https://pokeapi.co/api/v2/pokemon/$arrayNumAleatorio[$i]");
//     $arrayPokemon = json_decode($pokemonJSON, true, 512, JSON_UNESCAPED_UNICODE);
//     $arrayNombrePokemon[$i] = $arrayPokemon['species']['name'];

//     for ($i=0; $i < count($arrayPokemon['types']); $i++) { 
//             $arrayTipoPokemon[$i] = $arrayPokemon['types'][$i]['type']['name'];
//             print("<pre>".print_r($arrayTipoPokemon,true)."</pre>");
//         }
//     }
    
// print("<pre>".print_r($arrayNombrePokemon,true)."</pre>");
// print("<pre>".print_r($arrayTipoPokemon,true)."</pre>");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🐢Mis Pokemons🐢</title>
</head>
<body>
    <div id="contenedorPrincipal">
        <div class="cartapokemon">
            
        </div>
    </div>
</body>
</html>