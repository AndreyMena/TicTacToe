<?php
    /*
	require __DIR__ . "/vendor/autoload.php"; // Biblioteca cargada mediante composer

    use PhpXmlRpc\Server;
    use PhpXmlRpc\Response;
    use PhpXmlRpc\Value;
*/

class TicTacToe {
	public $board = [
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
		$this->board[$fila][$columna] = $jugador;
		//return $this->board;
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
		return "F";
	}

	/**
	 * Metodo que busca ganar en el turno (unicamente por la maquina).
	 * 
	 * @param int $jugador puede ser 1 o 2
	 * @return $board
	 **/	
	public function searchBlock($jugador) {


		return "F";
	}

	/**
	 * Metodo que busca la mejor posicion para marcar  en el turno (unicamente por la maquina).
	 * 
	 * @param int $jugador puede ser 1 o 2
	 * @return $board
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
	}

	/**
	 * Se encarga de la logica de la maquina
	 * 
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
	 * Metodo controlador del juego
	 * 
	 **/
	public function play() {
	}

	//Metodo de pruebas
	public function PrintBoard() {
		for ($i=0; $i < 3; $i++) { 
			for ($j=0; $j < 3; $j++) { 
				echo strval($this->board[$i][$j]);
			}
			echo "<br />";
		}
	}
}

/*
$server = new Laminas\XmlRpc\Server();
//$server->setClass('My\Service\Class');
$server->setClass('TicTacToe');

echo $server->handle();*/
?>