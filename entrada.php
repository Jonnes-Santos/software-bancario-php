<?php

$saldo = 1_000;
$titularConta = 'Jonnes Santos';
echo "-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=\n";
echo "Cliente da Conta: $titularConta\n";
echo "Saldo Atual: R$ $saldo\n";
echo "-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-\n";

do {
    echo "1 - Consultar Saldo Atual\n";
    echo "2 - Sacar Valor Disponível\n";
    echo "3 - Depositar Valor\n";
    echo "4 - Sair\n";

    $opcao = (int) fgets(STDIN);

    switch ($opcao) {
        case '1':
            echo "-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=\n";
            echo "Cliente da Conta: $titularConta\n";
            echo "Saldo Atual: R$ $saldo\n";
            echo "-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-\n";
            break;

        case '2':
            echo "Qual valor deseja sacar?\n";
            $valorASacar = (float) fgets(STDIN);
            if ($valorASacar > $saldo) {
                echo "Saldo Insuficiente\n";
            } else {
                $saldo -= $valorASacar;
            }
            break;
        case '3':
            echo "Quanto deseja depositar?\n";
            $valorADepositar = (float) fgets(STDIN);
            $saldo += $valorADepositar; 
            break;
        case '4'
            echo "Obrigado. Adeus.";

        default:
            "Opção Invalida"
            break;
    }
} while ($opcao != 4);

