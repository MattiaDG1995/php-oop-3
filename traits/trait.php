<?php

trait Comune{
    public $sponsor;
    public $peso;

    public function getComune(){
        return "$this->sponsor $this->peso";
    }
}

?>