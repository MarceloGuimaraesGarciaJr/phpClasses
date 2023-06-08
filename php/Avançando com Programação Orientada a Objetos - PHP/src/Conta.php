<?php

class Conta
{
    private $titular;
    private float $saldo;
    private static $numeroContas;
    private static $codAgencia;

    public function __construct(titular $titular)
    {
        echo "Criando nova conta \n";
        $this-> saldo = 0;
        $this->titular = $titular;
        self::$codAgencia = 77;
        self::$numeroContas ++;
    }

    public function __destruct()
    {
        self::$numeroContas --;
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
    public function getTitular(){
        return $this->titular->recuperaNome();
    }

    public function getCpf(){
        return $this->titular->getCpf();
    }
    public static function recuperaNumeroContas():int{
        return self::$numeroContas;
    }

    public static function recuperaCodAgencia():int{
        return self::$codAgencia;
    }
}