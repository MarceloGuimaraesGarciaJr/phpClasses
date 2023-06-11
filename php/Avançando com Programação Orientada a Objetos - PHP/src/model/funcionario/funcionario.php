<?php
namespace Alura\marcelo\model\funcionario;

use Alura\marcelo\model\cpf;
use Alura\marcelo\model\pessoa;
abstract  class funcionario extends pessoa
{
    private string $cargo;
    private float $salario;

    public function __construct(string $nome, cpf $cpf,string $salario)
    {

        parent::__construct($nome,$cpf);
        $this->salario = $salario;
    }

    public function alteraNome(string $nome):void
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }

    abstract public function calculaBonificacao():float;

    public function recuperaSalario():float
    {
        return $this->salario;
    }

    public function recebeAumento(float $valorAumento)
    {
        if($valorAumento < 0){
            echo "Valor deve ser positivo";
            return;
        }
        $this->salario+=$valorAumento;
    }
}