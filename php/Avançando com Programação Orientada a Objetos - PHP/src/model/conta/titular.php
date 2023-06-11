<?php
namespace Alura\marcelo\model\conta;

use Alura\marcelo\model\{autenticar, endereco, cpf, pessoa};

class titular extends pessoa implements autenticar
{
    private $endereco;

    public function __construct(cpf $cpf, string $nome,endereco $endereco)
    {
        parent::__construct($nome,$cpf);
        $this->endereco = $endereco;
    }

    public function recuperaEndereco():endereco
    {
        return $this->endereco;
    }
    public function podeAutenticar(string $senha): bool
    {
        return $senha === 'abcd';
    }
}