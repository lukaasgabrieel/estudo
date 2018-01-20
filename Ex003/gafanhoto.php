<?php 
require_once "pessoa.php";
class Gafanhoto extends Pessoa

{
	private $login;
	private $totAssistido;
	
	public function __construct($nome, $idade, $sexo, $login){
		parent::__construct($nome,$idade,$sexo);
		$this->login = $login;
		$this->totAssistido = 0;
	}
	
	public function assistirMaisUm(){
		$this->totAssistido ++;
	}
	


    /**
     * Gets the value of login.
     *
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Sets the value of login.
     *
     * @param mixed $login the login
     *
     * @return self
     */
    public function _setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Gets the value of totAssistido.
     *
     * @return mixed
     */
    public function getTotAssistido()
    {
        return $this->totAssistido;
    }

    /**
     * Sets the value of totAssistido.
     *
     * @param mixed $totAssistido the tot assistido
     *
     * @return self
     */
    public function _setTotAssistido($totAssistido)
    {
        $this->totAssistido = $totAssistido;

        return $this;
    }
}
	
 ?>