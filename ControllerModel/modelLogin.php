<?php

class login
{
    private $idLogin;
    private $login;
    private $senha;
    private $DataCadastro;
    private $dataUIAlteracao;

    public function getIdLogin()
    {
        return $this->idLogin;
    }
    public function setIdLogin($idLogin)
    {
        $this->idLogin = $idLogin;
    }

    /**
     * @return mixed
     */
    public function getDataCadastro()
    {
        return $this->DataCadastro;
    }

    /**
     * @return mixed
     */
    public function getDataUIAlteracao()
    {
        return $this->dataUIAlteracao;
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param mixed $senha
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    /**
     * @param mixed $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * @param mixed $dataUIAlteracao
     */
    public function setDataUIAlteracao($dataUIAlteracao)
    {
        $this->dataUIAlteracao = $dataUIAlteracao;
    }

    /**
     * @param mixed $DataCadastro
     */
    public function setDataCadastro($DataCadastro)
    {
        $this->DataCadastro = $DataCadastro;
    }

    /**
     * @return mixed
     */
    public function getSenha()
    {
        return $this->senha;
    }
}

