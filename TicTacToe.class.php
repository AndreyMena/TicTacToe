<?php
class TicTacToe {
	private $board = [
		[0, 0, 0],
		[0, 0, 0],
		[0, 0, 0]
	];

	private $first;
	/**
	 * TicTacToe::__construct() Constructor from TicTacToe
	 **/
	public function __construct() {
		$this->first = microtime(true);
	}

	/**
	 * This method resets the variables to play again
	 **/	
	public function playAgain() {
		$this->board = [
			[0, 0, 0],
			[0, 0, 0],
			[0, 0, 0]
		];
		$this->first = microtime(true);
	}

	/**
	 * This method tick the board according to the player
	 * 
	 * @param int $row
	 * @param int $column
	 * @param int $player could be 1 or 2
	 **/
	public function tick($row, $column, $player) {
		$this->board[$row][$column] = $player;
	}

	/**
	 * This method returns the board in a strings
	 * 
	 * @return string
	 **/
	public function getBoardStr() {
		$result = "";
		for ($i=0; $i < 3; $i++) { 
			for ($j=0; $j < 3; $j++) { 
				$result .= strval($this->board[$i][$j]);
			}
		}
		return $result;
	}

	/**
	 * This method check if the player wins.
	 * 
	 * @param int $player could be 1 or 2
	 * @return bool
	 **/	
	public function checkWin($player) {
		if ($this->board[0][0] == $player && $this->board[1][1] == $player && $this->board[2][2] == $player) {
			return true;
		}
		if ($this->board[0][2] == $player && $this->board[1][1] == $player && $this->board[2][0] == $player) {
			return true;
		}
		for ($i=0; $i < 3; $i++) { 
			if ($this->board[$i][0] == $player && $this->board[$i][1] == $player && $this->board[$i][2] == $player) {
				return true;
			}
			if ($this->board[0][$i] == $player && $this->board[1][$i] == $player && $this->board[2][$i] == $player) {
				return true;
			}
		}
		return false;
	}

	/**
	 * This method check if board is full.
	 * 
	 * @param int $player could be 1 or 2
	 * @return bool
	 **/	
	public function isFull($player) {
        for ($i=0; $i<3; $i++) {
            for ($j=0; $j<3; $j++) {
				if ($this->board[$i][$j] == 0) {
					return false;
				}
            }
        }
		return true;
	}	

	/**
	 * This method make the computer play a position random.
	 * 
	 * @param int $player could be 1 or 2
	 * @return string
	 **/	
	public function playComputerRand($player) {
		$positions = array();
		$result = "";
        for ($i=0; $i<3; $i++) {
            for ($j=0; $j<3; $j++) {
				if ($this->board[$i][$j] == 0) {
					$positions[] = array($i, $j);
				}
            }
        }
		$numberpositions = count($positions);
		$posRand = rand(0, $numberpositions - 1);
		$this->tick($positions[$posRand][0], $positions[$posRand][1], $player);
		$result .= strval($positions[$posRand][0]);
		$result .= strval($positions[$posRand][1]);
		return $result;
	}

	/**
	 * This method add to the ranking a player with the time
	 * 
	 * @param string $name name from a player
	 **/	
	public function addToRanking($name) {
		$nameTxt = "ranking.txt";
		$content = strval($name);
		$content = strval($name);
		$end = microtime(true);
		$totalTime = $end - $this->first;
		$content .= " ";
		$content .= number_format($totalTime, 6);
		$content .= "s\n";

		file_put_contents($nameTxt, $content, FILE_APPEND);
	}

	/**
	 * This method get the time from the input
	 * 
	 * @param string $name name from a player
	 **/
	private function getTime($input) {
		$parts = explode(" ", $input);
		$time = floatval($parts[1]);
		return $time;
	}

	/**
	 * This method returns the ranking in a string
	 * 
	 * @return string
	 **/	
	public function getRanking() {
		$ranking = file("./ranking.txt", FILE_IGNORE_NEW_LINES);
		usort($ranking, function ($a, $b) {
			$timeA = $this->getTime($a);
			$timeB = $this->getTime($b);

			if ($timeA == $timeB) {
				return 0;
			}
			return ($timeA < $timeB) ? -1 : 1;
		});

		$result = "";
		foreach ($ranking as $input) {
			$result .= strval($input);
			$result .= "\n";
		}
		return $result;
	}
}

?>
