<?php

require_once("Player.php");

class Game {

    private $players;

    private $sticks = 21;

    private $currentPlayer;

    private $winner;

    private $gameOver = false;

    public function __construct($players) {
        $this->players = $players;
        $this->currentPlayer = $players[1];
    }

    public function removeSticks(int $numberOfSticks) {
        $this->sticks -= $numberOfSticks;
        if ($this->sticks === 1) {
            $this->winner = $this->currentPlayer;
            $this->gameOver = true;
        }
        if (!$this->gameOver) {
            $this->currentPlayer = $this->currentPlayer === $this->players[1] ? $this->players[2] : $this->players[1];
        }
    }

    public function toString() {
        if ($this->gameOver) {
            return "<h2>GAME OVER!!!</h2>
            <p>{$this->winner->getName()} vinner spelet!</p>";
        } else {
        return "<p>Spelare: {$this->currentPlayer->getName()}</p>
        <p>Antal sticks kvar: {$this->sticks}</p>";
        }
    }
}
