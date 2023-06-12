<?php

namespace Alura\marcelo\model;
final class endereco

{
    private $cidade;
    private $bairro;
    private $rua;
    private $numero;

    public function __construct($cidade, $bairro, $rua, $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }

    public function recuperaCidade()
    {
        return $this->cidade;
    }
public function recuperaBairro()
    {
        return $this->bairro;
    }
    public function recuperaRua()
    {
        return $this->rua;
    }
    public function recuperaNumero()
    {
        return $this->numero;
    }
    private function setNumero($numero): void
    {
        $this->numero = $numero;
    }

    public function __toString():string
    {
        return "{$this->rua}, {$this->numero}, {$this->bairro}, {$this->cidade} \n";
    }

    public function __get($atributo):string
    {
        $nomeMetodo ='recupera'.ucfirst($atributo);
        return $this->$nomeMetodo().PHP_EOL;
    }

    public function __set($atributo,$valor)
    {
        $nomeMetodo = 'set'.ucfirst($atributo);
        return $this->$nomeMetodo($valor);
    }

}