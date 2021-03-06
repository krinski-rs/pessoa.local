<?php

namespace App\Entity\Pessoas;

/**
 * Nome
 */
class Nome
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var pessoas.tipo_nome_pessoa
     */
    private $tipo;

    /**
     * @var string
     */
    private $nome;

    /**
     * @var \App\Entity\Pessoas\Pessoa
     */
    private $pessoa;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set tipo.
     *
     * @param pessoas.tipo_nome_pessoa $tipo
     *
     * @return Nome
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo.
     *
     * @return pessoas.tipo_nome_pessoa
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set nome.
     *
     * @param string $nome
     *
     * @return Nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome.
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set pessoa.
     *
     * @param \App\Entity\Pessoas\Pessoa|null $pessoa
     *
     * @return Nome
     */
    public function setPessoa(\App\Entity\Pessoas\Pessoa $pessoa = null)
    {
        $this->pessoa = $pessoa;

        return $this;
    }

    /**
     * Get pessoa.
     *
     * @return \App\Entity\Pessoas\Pessoa|null
     */
    public function getPessoa()
    {
        return $this->pessoa;
    }
}
