<?php

class TicTacToe {
	private $board = [
		[0, 0, 0],
		[0, 0, 0],
		[0, 0, 0]
	];
	private $turn = 0;
	
	/**
	 * TicTacToe::__construct() Constructor de la clase TicTacToe.
	 * 
	 * @param string $nombre
	 **/
	public function __construct() {
		//$this->nombre = $nombre;
	}
	
	/**
	 * Este metodo marca el tablero  de acuerdo al jugador (no se encarga de buscar cual marcar)
	 * 
	 * @param int $fila
	 * @param int $columna
	 * @param int $jugador puede ser 1 o 2
	 * @return $board
	 **/
	public function tick($fila, $columna, $jugador) {
		$this->$board[$fila][$columna] = $jugador
		return $this->$board;
	}

	/**
	 * Metodo que busca ganar en el mismo turno (unicamente por la maquina).
	 * 
	 * @param int $jugador puede ser 1 o 2
	 * @return $result[] array de 3 espacios, el primero verdadero
	 * 			si puede marcar y ganar la segunda la fila y la tercera la columna.
	 **/	
	public function searchWin($jugador) {
		//Primero verificar diagonales
		$contadorDiagonal = 0;
		$noHayDiagonal = 0;
		for ($i = 0; $i < 3; $i++) {
			if ($board[i][i] != $jugador && $board[i][i] != 0) {
				$noHayDiagonal = 1;
				break;
			}else{
				if ($board[i][i] == 0 ) {
					$contadorDiagonal++;
				}

			}
		}

		if (($board[0][0] == 0 || $board[1][1] == $jugador)  ($board[2][2] == $jugador)) {

		}

		//Luego verificar filas.
		

		//Por ultimo verificar columna.
	}

	/**
	 * Metodo que busca ganar en el turno (unicamente por la maquina).
	 * 
	 * @param int $jugador puede ser 1 o 2
	 * @return $board
	 **/	
	public function searchBlock($jugador) {
	}

	/**
	 * Metodo que busca la mejor posicion para marcar  en el turno (unicamente por la maquina).
	 * 
	 * @param int $jugador puede ser 1 o 2
	 * @return $board
	 **/
	public function searchTick($jugador) {
	}

	/**
	 * Se encarga de la logica de la maquina
	 * 
	 **/	
	public function playComputer($jugador) {
		$resultsWin = $this.searchWin($jugador);
		if ($resultsWin[0] == 1) {
			$this.tick($resultsWin[1], $resultsWin[2], $jugador);
		}else{
			$resultsBlock = $this.searchBlock($jugador);
			if ($resultsBlock[0] == 1) {
				$this.tick($resultsBlock[1], $resultsBlock[2], $jugador);
			}else{
				$resultsTick = $this.searchTick($jugador);
				if ($resultsTick[0] == 1) {
					$this.tick($resultsTick[1], $resultsTick[2], $jugador);
				}
			}
		}
	}
	
	/**
	 * Metodo controlador del juego
	 * 
	 **/
	public function play() {
	}
}

?>