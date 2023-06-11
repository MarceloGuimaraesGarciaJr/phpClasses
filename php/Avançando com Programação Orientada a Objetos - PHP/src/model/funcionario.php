<?php
namespace Alura\marcejo\model;
use Alura\marcejo\model\cpf;
use Alura\marcejo\model\pessoa;
use Alura\marcejo\model\endereco;
class funcionario extends pessoa
{
    private string $cargo;
    private float $salario;

    public function __construct(string $nome, cpf $cpf, string $cargo,string $salario)
    {

        parent::__construct($nome,$cpf);
        $this->cargo = $cargo;
        $this->salario = $salario;
    }
    public function recuperaCargo(): string
    {
        return $this->cargo;
    }

    public function alteraNome(string $nome):void
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }

    public function calculaBonificacao():float
    {
        return $this->salario * 0.1;
    }

    public function recuperaSalario():float
    {
        return $this->salario;
    }

}