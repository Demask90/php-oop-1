<!-- Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php

    class Movie {
        public $name;
        public $director;
        public $duration;
        public $description;
        public $genre;
        public $valutation;
        public $country;
        public $date;
        
        function __construct($_name, $_director, $_duration, $_description, $_genre, $_valutation, $_country, $_date)
        {
            $this->name = $_name;
            $this->director = $_director;
            $this->duration = $_duration;
            $this->description = $_description;
            $this->genre = $_genre;
            $this->valutation = $_valutation;
            $this->country = $_country;
            $this->date = $_date;
        }

    }

    $myMovie1 = new Movie('La leggenda del pianista sull\'oceano', 'Giuseppe Tornatore', 165,'Novecento è il nome che viene dato ad un trovatello abbandonato su una nave il primo mese del primo anno del secolo. Il bambino cresce sulla nave, non conosce altro. Finché scopre di avere un inverosimile talento per il piano.', 'Fantastico', 3.5, 'ITA', 1998);
   
    $myMovie2 = new Movie('Guida galattica per autostoppisti', 'Garth Jennings', 110, 'Uno straordinario e divertente viaggio ai confini dell\'universo, alla ricerca del senso della vita.', 'Fantascienza', 3.3, 'USA', 2005);

    var_dump($myMovie1);
    var_dump($myMovie2);


