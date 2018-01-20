<?php 
require_once 'pessoa.php';
/**
* 
*/
class Professor extends Pessoa
{
	private $especialidade;
	private $salario;

	public function aumentoSal($valor){
		$this->_setSalario(getSalario() + $valor);
	}

    /**
     * Gets the value of especialidade.
     *
     * @return mixed
     */
    public function getEspecialidade()
    {
        return $this->especialidade;
    }

    /**
     * Sets the value of especialidade.
     *
     * @param mixed $especialidade the especialidade
     *
     * @return self
     */
    public function _setEspecialidade($especialidade)
    {
        $this->especialidade = $especialidade;

        return $this;
    }

    /**
     * Gets the value of salario.
     *
     * @return mixed
     */
    public function getSalario()
    {
        return $this->salario;
    }

    /**
     * Sets the value of salario.
     *
     * @param mixed $salario the salario
     *
     * @return self
     */
    public function _setSalario($salario)
    {
        $this->salario = $salario;

        return $this;
    }
}
 ?>