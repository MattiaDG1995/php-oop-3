<?php
include_once __DIR__ . '/prodotto.php';

class dvd extends prodotto {
    public $formato;
    public $premi;

    public function __construct(
        String $nome,
        String $autore,
        Float $prezzo,
        Generi $generi,
        Bool $pubblicato,
        String $immagine,
    
        string $formato,
        String $premi
        ) {
        $this->formato = $formato;
        $this->premi = $premi;
        parent::__construct($nome,$autore,$prezzo,$generi,$pubblicato,$immagine );
      }
} 
?>