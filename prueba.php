<?php
require_once 'TicTacToe.class.php';


$ttt = new TicTacToe();

$str = $ttt->getRanking();

echo $str;
/*echo "<br />";
echo $ttt->getBoardStr();
echo "<br />";
echo "<br />";
$ttt->addToRanking("AndreyAAAAA");
sleep(5);
$ttt->addToRanking("AndreyEEEE");
*/
?>