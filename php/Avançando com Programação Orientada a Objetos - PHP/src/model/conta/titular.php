<?php
namespace Alura\marcelo\model\conta;

use Alura\marcelo\model\{endereco,cpf,pessoa};

class titular extends pessoa
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
}