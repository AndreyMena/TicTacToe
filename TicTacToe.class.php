<?php

/**
 * Clase que implementa el el juego de TicTacToe 
 * 
 * @package SoapDiscovery
 * @author Andrey Mena Espinoza
 * @copyright Copyright (c) 2023 Andrey Mena Espinoza
 * @version $Id$
 * @access public
 **/
class TicTacToe {

	private $board = [
		[0, 0, 0],
		[0, 0, 0],
		[0, 0, 0]
	];

	private $turn = 0;

	/**
	 * TicTacToe::__construct() Constructor de la clase TicTacToe.
	 **/
	public function __construct() {
	}

	/**
	 * Este metodo marca el tablero  de acuerdo al jugador (no se encarga de buscar cual marcar)
	 * 
	 * @param int $fila
	 * @param int $columna
	 * @param int $jugador puede ser 1 o 2
	 **/
	public function tick($fila, $columna, $jugador) {
		$this->board[$fila][$columna] = $jugador;
	}
	

	/**
	 * Metodo que busca ganar en el mismo turno (unicamente por la maquina).
	 * 
	 * @param int $jugador puede ser 1 o 2
	 * @return string string con filacolumna
	 **/	
	public function searchWin($jugador) {
		//Primero verificar diagonales
		$contadorDiagonal = 0;
		$disponible = "";

		for ($i = 0; $i < 3; $i++) {
			if ($this->board[$i][$i] != $jugador && $this->board[$i][$i] != 0) {
				$contadorDiagonal = 0;
				break;
			}else{
				if ($this->board[$i][$i] == $jugador) {
					$contadorDiagonal++;
				}else{
					$disponible = strval($i) . strval($i); //verificar actualizacion
				}

			}
		}
		if ($contadorDiagonal == 2) {
			return $disponible;
		}
		//Luego verificar filas.
		
		//Por ultimo verificar columna.
		
		//No hay win
		return "FF";
	}	

	/**
	 * Metodo que busca ganar en el turno (unicamente por la maquina).
	 * 
	 * @param int $jugador puede ser 1 o 2
	 * @return string
	 **/	
	public function searchBlock($jugador) {
		return "F";
	}
	
	/**
	 * Metodo que busca la mejor posicion para marcar  en el turno (unicamente por la maquina).
	 * 
	 * @param int $jugador puede ser 1 o 2
	 * @return string
	 **/
	public function searchTick($jugador) {
		//Centro
		if ($this->board[1][1] == 0) {
			return "11";
		}

		//Esquina Randomizar seleccion de esquna
		if ($this->board[0][0] == 0) {
			return "00";
		}
		if ($this->board[0][2] == 0) {
			return "02";
		}
		if ($this->board[2][0] == 0) {
			return "20";
		}
		if ($this->board[2][2] == 0) {
			return "22";
		}

		//Randomizar luego
		for ($i=0; $i < 3; $i++) { 
			for ($j=0; $j < 3; $j++) { 
				if ($this->board[$i][$j] == 0) {
					return strval($i) . strval($j);
				}
			}
		}

		return "FF";
	}	

	/**
	 * Metodo que busca la mejor posicion para marcar  en el turno (unicamente por la maquina).
	 * 
	 * @param int $jugador puede ser 1 o 2
	 **/	
	public function playComputer($jugador) {
		$resultsWin = $this->searchWin($jugador);
		if ($resultsWin != "F") {
			$this->tick(intval(substr($resultsWin, 0, 1)), intval(substr($resultsWin, 1, 1)), $jugador);
		}else{
			$resultsTick = $this->searchTick($jugador);
			$this->tick(intval(substr($resultsTick, 0, 1)), intval(substr($resultsTick, 1, 1)), $jugador);


			/*
			//Descomentar cuando este searchBlock
			$resultsBlock = $this->searchBlock($jugador);
			if ($resultsBlock[0] == 1) {
				$this->tick($resultsBlock[1], $resultsBlock[2], $jugador);
			}else{
				$resultsTick = $this->searchTick($jugador);
				if ($resultsTick[0] == 1) {
					$this->tick($resultsTick[1], $resultsTick[2], $jugador);
				}
			}
			*/
		}
	}

	/**
	 * Metodo que busca la mejor posicion para marcar  en el turno (unicamente por la maquina).
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
	 * Metodo que busca la mejor posicion para marcar  en el turno (unicamente por la maquina).
	 * 
	 * @return string
	 **/
	public function prueba() {
		$result = "Hola";
		return $result;
	}

	/**
	 * Metodo que busca ganar en el turno (unicamente por la maquina).
	 * Verdadero si el jugador gano, falso si aun no ha ganado.
	 * 
	 * @param int $jugador puede ser 1 o 2
	 * @return bool
	 **/	
	public function checkWin($jugador) {
		if ($this->board[0][0] == $jugador && $this->board[1][1] == $jugador && $this->board[2][2] == $jugador) {
			return true;
		}
		if ($this->board[0][2] == $jugador && $this->board[1][1] == $jugador && $this->board[2][0] == $jugador) {
			return true;
		}
		for ($i=0; $i < 3; $i++) { 
			if ($this->board[$i][0] == $jugador && $this->board[$i][1] == $jugador && $this->board[$i][2] == $jugador) {
				return true;
			}
			if ($this->board[0][$i] == $jugador && $this->board[1][$i] == $jugador && $this->board[2][$i] == $jugador) {
				return true;
			}
		}
		return false;
	}

	/**
	 * Metodo que verifica si ya no hay mas posiciones que marcar
	 * Verdadero si esta lleno, falso si hay espacios.
	 * 
	 * @param int $jugador puede ser 1 o 2
	 * @return bool
	 **/	
	public function isFull($jugador) {
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
	 * Metodo que busca la mejor posicion para marcar  en el turno (unicamente por la maquina).
	 * 
	 * @param int $jugador puede ser 1 o 2
	 * @return string
	 **/	
	public function playComputerRand($jugador) {
		$posiciones = array();
		$result = "";
        for ($i=0; $i<3; $i++) {
            for ($j=0; $j<3; $j++) {
				if ($this->board[$i][$j] == 0) {
					$posiciones[] = array($i, $j);
				}
            }
        }
		$numeroPosiciones = count($posiciones);
		$posRand = rand(0, $numeroPosiciones - 1);
		//return $posiciones;
		$this->tick($posiciones[$posRand][0], $posiciones[$posRand][1], $jugador);
		$result = strval($posiciones[$posRand][0]);
		$result .= strval($posiciones[$posRand][1]);
		return $result;
		//return $posiciones[$posRand];
	}
}

?>
