<?php


class Player {

    private $name;

    public function getName() {
        return $this->name;
    }

    public function __construct(string $name) {
        $this->name = $name;
    }
}
