<?php

$aPlayers = [1 => 'Pelle', 2 => 'Stina'];
$iSticks = $_GET['totalSticks'] ?? 21;
$iCurrentPlayer = $_GET['currentPlayer'] ?? 1;
$bGameOver = false;

if (!empty($_GET['numSticks'])) {
    $iSticks -= $_GET['numSticks'];
    $iCurrentPlayer = (int)$iCurrentPlayer === 1 ? 2 : 1;

    if ($iSticks <= 0) {
        $bGameOver = true;
    }
}

function getHtml($bGameOver, $iSticks, $aPlayers, $iCurrentPlayer) {
 if($bGameOver) {
    return "<p>Game over! $aPlayers[$iCurrentPlayer] vann!</p>
                                <button name=\"playAgain\" value=\"true\">Spela igen?</button>";
 } else {
    return "<p>$aPlayers[$iCurrentPlayer]s tur</p>
                                                   <p>Välj antal stick</p>
                                                       <input type=\"number\" min=\"1\" max=\"3\" value=\"1\" name=\"numSticks\">
                                                       <input type=\"hidden\" value=\"$iSticks\" name=\"totalSticks\">
                                                       <input type=\"hidden\" value=\"$iCurrentPlayer\" name=\"currentPlayer\">
                                                       <button>Spela!</button>
                                                   <p>Antal stick kvar: $iSticks</p>";
 }
}

if (isset($_GET['playAgain'])) {
    $iCurrentPlayer = 1;
    $bGameOver = false;
    $iSticks = 21;
}

$sBaseHtml = "<html>
                    <head></head>
                    <body>
                    <form>
                    " . getHtml($bGameOver, $iSticks, $aPlayers, $iCurrentPlayer) . "
                    </form>
                    </body>
                    </html>";

echo $sBaseHtml;
