<?php 

class Movie {

    public $title;
    public $genre;
    public $description;
    public $time;
    public $watchable = true;


    function __construct($title, $genre, $description, $time){
        $this->title = $title;
        $this->genre = $genre;
        $this->description = $description;
        $this->time = $time;
    }

    public function setMinAge($age) {
        if($age < 15) {
            $this->watchable = false;
        }
    }
}

// $iRobot = new Movie('I Robot', 'fantasy', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse quae, aliquid fuga animi quam inventore temporibus praesentium. Fugiat doloremque illo ab et debitis alias ipsam, beatae itaque neque 
// voluptate? Facilis.', 134);

// $nightmare = new Movie('Nightmare', 'horror', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse quae, aliquid fuga animi quam inventore temporibus praesentium. Fugiat doloremque illo ab et debitis alias ipsam, beatae itaque neque 
// voluptate? Facilis.', 97);

// $meetTheParents = new Movie('Meet the parents', 'commedy', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse quae, aliquid fuga animi quam inventore temporibus praesentium. Fugiat doloremque illo ab et debitis alias ipsam, beatae itaque neque 
// voluptate? Facilis.', 93);

// $jurassicPark = new Movie('Jurassic Park', 'fantasy', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse quae, aliquid fuga animi quam inventore temporibus praesentium. Fugiat doloremque illo ab et debitis alias ipsam, beatae itaque neque 
// voluptate? Facilis.', 112);

$movies = [
    new Movie('I Robot', 'fantasy', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse quae, aliquid fuga animi quam inventore temporibus praesentium. Fugiat doloremque illo ab et debitis alias ipsam, beatae itaque neque 
voluptate? Facilis.', 134),

new Movie('Nightmare', 'horror', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse quae, aliquid fuga animi quam inventore temporibus praesentium. Fugiat doloremque illo ab et debitis alias ipsam, beatae itaque neque 
voluptate? Facilis.', 97),

new Movie('Meet the parents', 'commedy', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse quae, aliquid fuga animi quam inventore temporibus praesentium. Fugiat doloremque illo ab et debitis alias ipsam, beatae itaque neque 
voluptate? Facilis.', 93),

new Movie('Jurassic Park', 'fantasy', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse quae, aliquid fuga animi quam inventore temporibus praesentium. Fugiat doloremque illo ab et debitis alias ipsam, beatae itaque neque 
voluptate? Facilis.', 112)
];

// var_dump($movies)
