<?php

require_once("HTMLPageView.php");
require_once("Player.php");
require_once("Game.php");

$players = [1 => new Player('Pelle'), 2 => new Player('Stina')];

$newGame = new Game($players);


