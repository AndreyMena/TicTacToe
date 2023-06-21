<?php
require_once 'TicTacToe.php';

$TicTacToe = new TicTacToe();

//echo $TicTacToe->board[0][0];

echo $TicTacToe->tick(1, 1, 2);

$TicTacToe->playComputer(1);

//echo $TicTacToe->tick(1, 1, 2);


echo "<br />";

echo $TicTacToe->PrintBoard();

echo "<br />";

//echo $TicTacToe->board[1][1];
?>