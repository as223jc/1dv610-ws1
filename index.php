<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once("HTMLPageView.php");
require_once("Player.php");
require_once("Game.php");
session_start();

$title = "Sticks";

$_SESSION['players'] = [1 => new Player('Pelle'), 2 => new Player('Stina')];

$_SESSION['game'] = new Game($_SESSION['players']); // HUR STORA DENNA I SESSION?? Skapas ny varje gång!!

$numberOfSticks = $_GET['numberOfSticks'] ?? 0;

$_SESSION['game']->removeSticks($numberOfSticks);

$body = "<form>
<p>Välj antal stick</p>
<input type='number' min='1' max='3' value='1' name='numberOfSticks'>
<button>Spela!</button>
</form>
<p>Number of sticks: {$_SESSION['game']->toString()}</p>";

$view = new HTMLPageView($title, $body);

$view->echoHTML();


