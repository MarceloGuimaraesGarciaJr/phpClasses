<?php
namespace Alura\marcejo\model\conta;

use Alura\marcejo\model\{endereco,cpf,pessoa};

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