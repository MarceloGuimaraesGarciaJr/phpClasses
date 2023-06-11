<?php

namespace Alura\marcelo\model\conta;

abstract class Conta
{
    private $titular;
    protected $saldo;
    private static $numeroDeContas = 0;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function sacarValor(float $valorASacar): void
    {   $tarifaSaque = $valorASacar * $this->percentualTarifa();
        if ($valorASacar > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saldo -= ($valorASacar+$tarifaSaque);
    }

    public function depositarValor(float $valorADepositar)
    {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
            return;
        }

        $this->saldo += $valorADepositar;
    }

    public function recuperaSaldo(): float
    {
        return $this->saldo;
    }

    public function recuperaNomeTitular(): string
    {
        return $this->titular->recuperaNome();
    }

    public function recuperaCpfTitular(): string
    {
        return $this->titular->recuperaCpf();
    }

    public static function recuperaNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }

    abstract public function percentualTarifa():float;
}