<?php 

/**
* 
*/
class Caneta 
{
	private $ponta;
	private $cor;
	private $nome;
	private $tampa;
	private $carga;

	public function escrever(){
		if ($this->carga > 0 || 
			$this->tampa == false) {
			echo "Escrevendo";
			$this->descarregar();
		}else{
			echo "SEM CARGA OU TAMPADA";
		}

	}
	public function tampado(){
		$this->tampa = true;
	}
	public function destampado(){
		$this->tampa = false;
	}
	public function descarregar(){
		if ($this->carga > 0) {
			$this->carga--;
		}else{
			echo "SEM CARGA!";
		}
	}

	public function __construct(){
		$this->carga = 100;
		$this->tampa = true;	
	}
    /**
     * Gets the value of ponta.
     *
     * @return mixed
     */
    public function getPonta()
    {
    	return $this->ponta;
    }

    /**
     * Sets the value of ponta.
     *
     * @param mixed $ponta the ponta
     *
     * @return self
     */
    public function _setPonta($ponta)
    {
    	$this->ponta = $ponta;

    	return $this;
    }

    /**
     * Gets the value of cor.
     *
     * @return mixed
     */
    public function getCor()
    {
    	return $this->cor;
    }

    /**
     * Sets the value of cor.
     *
     * @param mixed $cor the cor
     *
     * @return self
     */
    public function _setCor($cor)
    {
    	$this->cor = $cor;

    	return $this;
    }

    /**
     * Gets the value of nome.
     *
     * @return mixed
     */
    public function getNome()
    {
    	return $this->nome;
    }

    /**
     * Sets the value of nome.
     *
     * @param mixed $nome the nome
     *
     * @return self
     */
    public function _setNome($nome)
    {
    	$this->nome = $nome;

    	return $this;
    }

    /**
     * Gets the value of tampa.
     *
     * @return mixed
     */
    public function getTampa()
    {
    	return $this->tampa;
    }

    /**
     * Sets the value of tampa.
     *
     * @param mixed $tampa the tampa
     *
     * @return self
     */
    public function _setTampa($tampa)
    {
    	$this->tampa = $tampa;

    	return $this;
    }

    /**
     * Gets the value of carga.
     *
     * @return mixed
     */
    public function getCarga()
    {
    	return $this->carga;
    }

    /**
     * Sets the value of carga.
     *
     * @param mixed $carga the carga
     *
     * @return self
     */
    public function _setCarga($carga)
    {
    	$this->carga = $carga;

    	return $this;
    }
}


?>