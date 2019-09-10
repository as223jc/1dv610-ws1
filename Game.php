<?php


class Game {

    private $players;

    private $sticks = 21;

    public function __construct($players) {
        $this->players = $players;
        
    }

    function removeSticks($numberOfSticks) {
        $this->sticks -= $numberOfSticks 
    }
}
