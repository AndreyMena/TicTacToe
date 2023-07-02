<?php
    //namespace PhpXmlRpc;
    require __DIR__ . "/vendor/autoload.php"; // Biblioteca cargada mediante composer


    use PhpXmlRpc\Client;
    use PhpXmlRpc\Request;
    use PhpXmlRpc\Value;
    if (count($_POST))
    {
        $myString = new Value("Hello, World!");

        $factorial=new Value($_POST['factorial'], Value::$xmlrpcInt);
        $f=new Request("tictactoe.factorial", [$factorial]);
        $c=new Client("http://localhost:84/TicTacToe/prueba2/matematica.php"); // Asumiendo que el servidor está ahí
        $c->setDebug(1); // Si se cambia a 1 o 2 se pueden depurar problemas en la comunicación
        $r=$c->send($f);
        if (!$r) { die("Hubo un fallo."); }
        $v=$r->value();
        echo "El factorial da: " . $v->scalarval();

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

  
    

