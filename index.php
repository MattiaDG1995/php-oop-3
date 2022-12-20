<?php

include_once __DIR__ . '/classi/generi.php';
include_once __DIR__ . '/classi/libro.php';
include_once __DIR__ . '/classi/audiolibro.php';
include_once __DIR__ . '/classi/cd.php';
include_once __DIR__ . '/classi/dvd.php';
include_once __DIR__ . '/classi/employee.php';
include_once __DIR__ . '/traits/trait.php';


$generi = [
  'giallo' => new Generi('giallo', 'icon-font-awesome-giallo'),
  'horror' => new Generi('horror', 'icon-font-awesome-horror'),
  'pop' => new Generi('pop', 'icon-font-awesome-horror'),
  'fantasy' => new Generi('fantasy', 'icon-font-awesome-horror')

];

var_dump( $generi );

$prodotti = [
  new Libro( 'La scelta di Natan', 'Antonio Puccio', 23.40, $generi['giallo'], true, 'https://immagine-copertina.com', 250, 'flessibile' ),
  new audioLibro('La scelta di Natan', 'Antonio Puccio', 23.40, $generi['giallo'], true, 'https://immagine-copertina.com', 120, 'spotify', 'https://spotify-libri.com'),
  $employee = new employee('mattia', '27'),
  $employee->peso = "100",
  $cd = new cd('bubbaaa', 'bruno', 12.40, $generi['pop'], true, 'https://immagine-copertina.com', 130 , 'elvis'),
  new dvd('starwars', 'georgelucas', 19.20, $generi['fantasy'], true, 'https://immagine-copertina.com', 'blueray', 'oscar'),
];

var_dump( $prodotti );

foreach( $prodotti as $elem ){
  echo get_class($elem);
  echo "<br>";
}

try{
    $cd->setDurata(130);

    }catch(Exception $e){
        echo "errore: " . $e->getMessage();
    }

    var_dump($cd)


?>

