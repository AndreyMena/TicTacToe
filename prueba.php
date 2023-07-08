<?php
require_once 'TicTacToe.class.php';


$ttt = new TicTacToe();

$matriz = $ttt->playComputerRand(1);
echo $ttt->getBoardStr();
echo "<br />";

$ttt->playComputerRand(2);
echo $ttt->getBoardStr();
echo "<br />";
$ttt->playComputerRand(1);
echo $ttt->getBoardStr();
echo "<br />";
$ttt->playComputerRand(2);
echo $ttt->getBoardStr();
echo "<br />";
$ttt->playComputerRand(1);
echo $ttt->getBoardStr();
echo "<br />";

$ttt->playComputerRand(2);
echo $ttt->getBoardStr();
echo "<br />";
$ttt->playComputerRand(1);
echo $ttt->getBoardStr();
echo "<br />";
$ttt->playComputerRand(2);
echo $ttt->getBoardStr();
echo "<br />";
$ttt->playComputerRand(1);
echo $ttt->getBoardStr();
echo "<br />";

echo $ttt->checkWin(2);
?>