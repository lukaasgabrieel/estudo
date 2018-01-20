<?php 

require_once 'pessoa.php';

/**
* 
*/
class Aluno extends Pessoa
{
	private $mat;
	private $curso;

	public function cancelarMat(){
		echo "Matricula Cancelada";
	}

	

    /**
     * Gets the value of mat.
     *
     * @return mixed
     */
    public function getMat()
    {
        return $this->mat;
    }

    /**
     * Sets the value of mat.
     *
     * @param mixed $mat the mat
     *
     * @return self
     */
    public function _setMat($mat)
    {
        $this->mat = $mat;

        return $this;
    }

    /**
     * Gets the value of curso.
     *
     * @return mixed
     */
    public function getCurso()
    {
        return $this->curso;
    }

    /**
     * Sets the value of curso.
     *
     * @param mixed $curso the curso
     *
     * @return self
     */
    public function _setCurso($curso)
    {
        $this->curso = $curso;

        return $this;
    }
}

 ?>