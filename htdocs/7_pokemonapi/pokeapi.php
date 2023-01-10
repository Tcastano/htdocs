<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokemons</title>
    <link rel="stylesheet" href="./pokeapi.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" defer></script>
</head>

<body>
    <div class="container text-center">

        <?php

        /*Generar 4 números aleatorios entre 1 y 900.
Hacer 4 llamadas a la pokeapi a la siguiente url: 
https://pokeapi.co/api/v2/pokemon/${id} donde ${id} 
hay que sustituirlo por cada número aleatorio generado.
Almacenar cada llamada en una variable y a su vez generar
un array de pokemons.

Iterar sobre el array de pokemons y crear 4 cartas pokemon con:
Foto
Nombre del pokemon
Tipo -> con letras y el fondo de la carta 
(rojo si es tipo fuego, amarillo, azul o verde)
vida del pokemon*/

        //array de  4 ids aleatorios 
        $ids = [];

        //array en el que se guardaran los pokemons
        $pokemonArray = [];

        //ocntador el cual se utilizara para los bucles
        $contador;

        //bucle el cual saca 4 valores aleatorios y se meten en el array ids
        for ($i = 0; $i < 4; $i++) {
            $ids[$i] = rand(1, 905);
        }
        //url de la api
        for ($i = 0; $i < 4; $i++) {

            $pokemonJSON = file_get_contents("https://pokeapi.co/api/v2/pokemon/" . $ids[$i]);
            $pokemon = json_decode($pokemonJSON, true, 512, JSON_UNESCAPED_UNICODE);
            $pokemonArray[$i] = $pokemon;
        }
        ?>
        <div class="row justify-content-center mt-0 " >
            <?php
            //blucle el cual imprimirá todas las cartas pokemon
            foreach ($pokemonArray as $key => $datos_pokemons) {
                //Div en el que se almacena cada pokemon
                ?>
            <div class="col-xl-3 col-md-6 col-sm-12 col-lg-6 mt-0">
                <?php
                 $distintos_tipos = $datos_pokemons["types"];
                    foreach ($distintos_tipos as $key => $tipo){
                        $tipo["type"]["name"];
                    }
                    switch ($distintos_tipos[0]['type']['name']) {
                        case 'water':
                            $colorTipo="#3b83bd";
            
                            break;
                        case 'electric':
                            $colorTipo="#FFFF00";
            
                            break;
                        case 'fire':
                            $colorTipo="#f80000 ";
            
                            break;
                        case 'dark':
                            $colorTipo="#000000";
            
                            break;
                        case 'dragon':
                            $colorTipo="#ffa500";
            
                            break;
                        case 'steel':
                            $colorTipo="#474b4e";
            
                            break;
                        case 'grass':
                            $colorTipo="#008f39";
            
                        break;
                        case 'rock':
                            $colorTipo="#804000";
            
                        break;
                        case 'bug':
                            $colorTipo="#ffc0cb";
            
                        break;
                        case 'ice':
                            $colorTipo="#DBF1FD";
            
                        break;
                        case 'psychic':
                            $colorTipo="#881799";
            
                        break;
                        case 'ghost':
                            $colorTipo="#695865";
            
                        break;
                        case 'ground':
                            $colorTipo="#7A3800";
            
                        break;
                        case 'poison':
                            $colorTipo="#A924FF";
            
                        break;
                        case 'fairy':
                            $colorTipo="#FFA2F1";
            
                        break;
                        case 'fighting':
                            $colorTipo="#734222";
            
                        break;
                        case 'flying':
                            $colorTipo="#00FFF3";
            
                        break;
            
                        default:
                            $colorTipo="blanco";
                            break;
                    }
            
            ?>
            <div id="carta" class="card mt-0" style="background-color:<?=$colorTipo?>">
                    <h1> <u> <?php
                                $nombre = strtoupper($datos_pokemons["name"]);
                                echo "<h2>$nombre</h2>" ?></u></h1>
                    <img src="<?php
                                $distintos_tipos = $datos_pokemons["types"];
                                $url = $datos_pokemons["sprites"]["other"]["home"]["front_default"];
                                echo "$url" ?>" class="card-img-top" alt="Foto Pokemon">
                    <div class="card-body">
                        <h4><?php foreach ($distintos_tipos as $key => $tipo) {
                                echo $tipo["type"]["name"];
                                echo "<br>";
                            } ?></h4>
                        <p class="card-text"><?php
                                                $habilidades =  $datos_pokemons["abilities"];
                                                echo "<br>";
                                                foreach ($habilidades as $key => $habilidad) {
                                                    echo $habilidad["ability"]["name"];
                                                    echo "<br>";
                                                }
                                                ?></p>
                    </div>
                </div>
            </div>
                
            <?php
            }
            ?>
        </div>
    </div>

</body>

</html>