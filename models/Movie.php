<?php 

require_once __DIR__ . '/Vote.php';

class Movie {
    public $title;
    public $poster;
    public $vote;

    public function __construct($_title, $_poster, $_vote) {
        
        $this->title = $_title;
        $this->poster = $this->getPath($_poster);
        $this->vote = $_vote;
        
    }

    private function getPath($_poster) {
        return 'https://image.tmdb.org/t/p/w342/' . $_poster;
    }
    
}