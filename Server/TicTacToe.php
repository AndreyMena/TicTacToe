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
	 * @return $board
	 **/	
	public function searchWin($jugador) {
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
	public function playComputer() {
	}
	
	/**
	 * Metodo controlador del juego
	 * 
	 **/
	public function play() {
	}
}

?>