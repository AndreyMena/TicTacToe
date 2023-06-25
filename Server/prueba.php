<?php
    require_once 'TicTacToe.php';

    require __DIR__ . "/vendor/autoload.php"; // Biblioteca cargada mediante composer

    use PhpXmlRpc\Client;
    use PhpXmlRpc\Request;
    use PhpXmlRpc\Value;


    if (count($_POST))
    {
        /*
        $TicTacToe = new Value($_POST['play'], Value::$xmlrpcInt);
        $f=new Request("TicTacToe.play", [$factorial]);
        $c=new Client("http://localhost:84/TicTacToe/TicTacToe.php"); // Asumiendo que el servidor está ahí
        $c->setDebug(0); // Si se cambia a 1 o 2 se pueden depurar problemas en la comunicación
        $r=$c->send($f);
        if (!$r) { die("Hubo un fallo."); }
        $v=$r->value();
        echo "El factorial da: " . $v->scalarval();
        */
    }
    else
    {
        ?>

        <form method="post">
            <label>Inserte un numero para calcular factorial</label>
            <input type="number" name="factorial" id="factorial" required>
            <input type="submit"/>
        </form>

        <?php
    }


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