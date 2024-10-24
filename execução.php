<?php

require_once("modelo/Residencial.php");
require_once("modelo/Comercial.php");
require_once("modelo/Industrial.php");

$escolha = 0;

do {
    echo "************** MENU *******************" . "\n";
    echo " 1. ******* RESIDENCIAL ************" . "\n";
    echo " 2. ******* COMERCIAL **************" . "\n";
    echo " 3. ******* INDUSTRIAL *************" . "\n";
    echo " 0 *********** SAIR *******************" . "\n";

    $escolha = readline("Qual o tipo do seu consumo? ");

    switch ($escolha){

        case 0:
            echo "O PROGRAMA SERÁ ENCERRADO...." . "\n";

        case 1:
            echo "*** RESIDENCIAL ***" . "\n";

            $consumo = new Residencial();
            $consumo->setConsumo(readline("Informe quantos KWh foram consumidos: ")) . "\n";
            echo "O valor está sendo calculado...". "\n";
            break;

        
        case 2: 
            echo "*** COMERCIAL ***" . "\n";
            
            $consumo = new Comercial();
            $consumo->setConsumo(readline("Informe quantos KWh foram consumidos: ")) . "\n";
            echo "O valor está sendo calculado..." . "\n";
            break;

        case 3:
            echo "*** INDUSTRIAL ***" . "\n;

            $consumo = new Industrial();
            $consumo->setConsumo(readline("Informe quantos KWh foram consumidos: ")) . "\n";
            echo "O valor está sendo calculado..." . "\n";
            break;

        default:
            break;
    }

    sleep(2);
    echo "O valor da fatura será:  ";
    echo "R$ " .  $consumo->getValorFatura() . "." . "\n";

} while ($escolha !=0);
