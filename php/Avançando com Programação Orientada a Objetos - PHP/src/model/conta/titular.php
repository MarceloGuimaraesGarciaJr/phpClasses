<?php
namespace Alura\marcejo\model\conta;

use Alura\marcejo\model\endereco;
use Alura\marcejo\model\cpf;
use Alura\marcejo\model\pessoa;

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