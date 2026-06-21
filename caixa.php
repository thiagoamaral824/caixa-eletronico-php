<?php

    $saldo = 500.00;

    $executando = true;
    

    while($executando){

    echo "Titular da conta: Thiago Amaral\n \n************************\n
    1. Consultar saldo atual\n
    2. Sacar valor\n
    3. Depositar valor\n
    4. Sair\n";

    $numero = (int) fgets(STDIN);

    if($numero == 1){
        echo "Saldo atual é de: $saldo\n";
    } elseif($numero == 2){
        echo "Qual valor deseja sacar?\n";
        $saque = (float) fgets(STDIN);
        if ($saque <= $saldo && $saque> 0){
        $saldo -= $saque;
        echo "Seu novo saldo é de: $saldo\n";
    } else {
    echo "Saldo insuficiente\n";
    };
    } elseif($numero == 3){
        echo "Qual valor deseja depositar?\n";
        $deposito = (float) fgets(STDIN);
        if ($deposito > 0){
        $saldo += $deposito;
        echo "Seu novo saldo é de: $saldo\n";
    }else {
    echo "Digite um valor válido\n";
    };
        
    } elseif($numero == 4){
        echo "Obrigado por utilizar nosso caixa eletrônico!\n";
        $executando = false;
    } else {
    echo "Opção inválida\n";
}
    };

