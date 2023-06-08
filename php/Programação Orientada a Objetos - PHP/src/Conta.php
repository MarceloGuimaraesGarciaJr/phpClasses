<?php

class Conta
{
    private string $cpfTitular;
    private string $nomeTitular;
    private float $saldo;


    public function __construct(string $cpfTitular, string $nomeTitular)
    {
        echo "Criando nova conta \n";
        $this-> saldo = 0;
        $this->validaNomeTitular($nomeTitular);
        $this->nomeTitular = $nomeTitular;
        $this->cpfTitular = $cpfTitular;
    }
    public function sacar(float $valorASacar):void{
        if ($valorASacar > $this->saldo){
            echo "Você não possui saldo \n";
        }else{
            // $saldo = ($saldo - $valorASacar);
            $this->saldo -= $valorASacar;
        }
    }
    public function depositar(float $valorADepositar):void{
        if ($valorADepositar <= 0) {
            echo "O valor a depositar é inválido \n";
        }else{
            $this->saldo += $valorADepositar;
        }
    }
    public function transferir(float $valorATransferir, Conta $contaDestino):void{
        if ($valorATransferir > $this->saldo){
            echo "Você não possui esse valor para transferir \n";
        }else{
            $this->sacar($valorATransferir);
            $contaDestino -> depositar($valorATransferir);
        }
    }
    public function extrato():float{
        return $this ->saldo;
    }

    public function recuperaCpfTitular():string{
        return $this->cpfTitular;
    }
    public function recuperaNomeTitula():string{
        return $this->nomeTitular;
    }
    private function validaNomeTitular(string $nomeTitular):void
    {
        if(strlen($nomeTitular)< 5){
            echo "Nome deve ter pelo menos 5 caracteres";
            exit();
        }
    }
}