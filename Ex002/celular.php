<?php 


/**
* 
*/
class Celular 
{
	
	private $nome;
	private $modelo;
	private $tela;
	private $sitema;
	private $bateria;


	public function ligacao(){
		$this->descarregar();
		echo "Ligando....</br>";
	}
	public function mensagem(){
		$this->descarregar();
		echo "digitando...</br>";
	}
	public function foto(){
		$this->descarregar();
		echo "TIC</br>";
	}
	public function descarregar(){
			if ($this->bateria > 0) {
				# code...
			$this-> bateria --;
		}else{
			echo "DESLIGANDO";
		 }

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
     * Gets the value of modelo.
     *
     * @return mixed
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Sets the value of modelo.
     *
     * @param mixed $modelo the modelo
     *
     * @return self
     */
    public function _setModelo($modelo)
    {
        $this->modelo = $modelo;

        return $this;
    }

    /**
     * Gets the value of tela.
     *
     * @return mixed
     */
    public function getTela()
    {
        return $this->tela;
    }

    /**
     * Sets the value of tela.
     *
     * @param mixed $tela the tela
     *
     * @return self
     */
    public function _setTela($tela)
    {
        $this->tela = $tela;

        return $this;
    }

    /**
     * Gets the value of sitema.
     *
     * @return mixed
     */
    public function getSitema()
    {
        return $this->sitema;
    }

    /**
     * Sets the value of sitema.
     *
     * @param mixed $sitema the sitema
     *
     * @return self
     */
    public function _setSitema($sitema)
    {
        $this->sitema = $sitema;

        return $this;
    }

    /**
     * Gets the value of bateria.
     *
     * @return mixed
     */
    public function getBateria()
    {
        return $this->bateria;
    }

    /**
     * Sets the value of bateria.
     *
     * @param mixed $bateria the bateria
     *
     * @return self
     */
    public function _setBateria($bateria)
    {
        $this->bateria = $bateria;

        return $this;
    }
}

 ?>