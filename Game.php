<?php


class Game {

    private $players;

    private $sticks = 21;

    public function __construct($players) {
        $this->players = $players;
    }

    public function removeSticks(int $numberOfSticks) {
        $this->sticks -= $numberOfSticks;
    }

    public function toString() {
        return $this->sticks;
    }
}
