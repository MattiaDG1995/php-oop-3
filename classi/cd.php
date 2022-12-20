<?php
include_once __DIR__ . '/prodotto.php';

class cd extends prodotto {
    public $durata;
    public $artista;

    public function __construct(
        String $nome,
        String $autore,
        Float $prezzo,
        Generi $generi,
        Bool $pubblicato,
        String $immagine,
    
        Int $durata,
        String $artista
        ) {
        $this->durata = $durata;
        $this->artista = $artista;
        parent::__construct($nome,$autore,$prezzo,$generi,$pubblicato,$immagine );
      }

      public function setDurata($_durata){

        if(!is_numeric($_durata)){
            throw new Exception("Attento, $_durata non è un numero!");

        }else if($_durata < 0){
            throw new Exception("Attento, $_durata è minore di zero!");

        }else{
            $this->durata = $_durata;
        }
      }
} 
?>