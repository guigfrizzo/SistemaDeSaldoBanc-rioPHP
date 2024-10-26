<?php
function fim() {
    echo "****************************************\n";
    echo "Escolha uma nova opção:\n\n";
}

echo "Qual o seu nome? ";
$nome = fgets(STDIN); 
echo "Qual seu saldo inicial? ";
$saldo = (float) fgets(STDIN);

echo "******************\n";
echo "Titular: $nome\n";
echo "Saldo inicial: $saldo\n";
echo "******************\n";

menu();

function menu() {
    global $saldo; 
    echo "Digite 1 para ver o saldo:\nDigite 2 para sacar:\nDigite 3 para depositar:\nDigite 4 para sair:\n";
    $opcao = fgets(STDIN);

    switch ($opcao) {
        case 1:
            echo "Seu saldo é $saldo\n";
            fim();
            return menu();

        case 2:
            echo "Quanto quer sacar? ";
            $saque = (float) fgets(STDIN);
            if ($saque <= $saldo) {
                $saldo -= $saque;
                echo "Saque realizado. Seu saldo agora é $saldo\n";
            } else {
                echo "Saldo insuficiente!\n";
            }
            fim();
            return menu();

        case 3:
            echo "Quanto quer depositar? ";
            $deposito = (float) fgets(STDIN);
            if($deposito!=0){
            $saldo += $deposito;    
            }
            else{
            echo "Depósito irrelevante. Seu saldo é o mesmo.\n";
            }
            echo "Depósito realizado. Seu saldo agora é $saldo\n";
            fim();
            return menu();

        case 4:
            echo "Adeus!\n";
            exit();

        default:
            echo "Opção inválida\n";
            fim();
            return menu();
    }
}
?>