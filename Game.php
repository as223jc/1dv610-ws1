<?php

require_once("Player.php");

class Game {

    private $players;

    private $sticks = 21;

    private $currentPlayer;

    public function __construct($players) {
        $this->players = $players;
        $this->currentPlayer = $players[1];
    }

    public function removeSticks(int $numberOfSticks) {
        $this->sticks -= $numberOfSticks;
        $this->currentPlayer = $this->currentPlayer === $this->players[1] ? $this->players[2] : $this->players[1];
    }

    public function toString() {
        return "<p>Spelare: {$this->currentPlayer->getName()}</p>
        <p>Antal sticks kvar: {$this->sticks}</p>";
    }
}
