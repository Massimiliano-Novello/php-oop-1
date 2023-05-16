<?php

class movie {
    public $nome;
    public $genere;
    public $durata;
    public $descrizione;

    function __construct($_nome, $_genere) {
        $this->nome = $_nome;
        $this->genere = $_genere;
    }

    public function nomeFilm () {
        return "Il nome del film è {$this->nome}, è un film di {$this->genere}, dalla durata di {$this->durata}";
    }
}

$film = new movie("avengers", "azione");
$film->durata = "120 minuti";
echo ($film->nomeFilm());