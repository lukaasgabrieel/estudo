<?php 

/**
* 
*/
class Funcionario extends Pessoa
{
	
	private $setor;
	private $trabalhando;

	public function mudarTrabalho(){
		$this->trabalho =! $this->trabalho;
	}
	

    /**
     * Gets the value of setor.
     *
     * @return mixed
     */
    public function getSetor()
    {
        return $this->setor;
    }

    /**
     * Sets the value of setor.
     *
     * @param mixed $setor the setor
     *
     * @return self
     */
    public function _setSetor($setor)
    {
        $this->setor = $setor;

        return $this;
    }

    /**
     * Gets the value of trabalhando.
     *
     * @return mixed
     */
    public function getTrabalhando()
    {
        return $this->trabalhando;
    }

    /**
     * Sets the value of trabalhando.
     *
     * @param mixed $trabalhando the trabalhando
     *
     * @return self
     */
    public function _setTrabalhando($trabalhando)
    {
        $this->trabalhando = $trabalhando;

        return $this;
    }
}

 ?>