<?php
require_once 'TicTacToe.class.php';


$ttt = new TicTacToe();

$str = $ttt->playComputerRand(1);
echo $str;
echo "<br />";
echo $ttt->getBoardStr();


echo $ttt->checkWin(2);
?>