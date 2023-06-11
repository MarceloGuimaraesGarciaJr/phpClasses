<?php

namespace Alura\marcelo\model;

interface autenticar
{
    public function podeAutenticar(string $senha):bool;
}