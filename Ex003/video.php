<?php 

require_once 'acoesvideo.php';
class video implements AcoesVideo
{
	private $titulo;
	private $avaliacao;
	private $views;
	private $curtidas;
	private $reproduzindo;

	public function __construct($titulo){
		$this->titulo = $titulo;
		$this->avaliacao = 1;
		$this->views = 0;
		$this->curtidas = 0;
		$this->reproduzindo = false;
	}


	public function like(){
		$this->curtidas ++;
	}
	public function pause(){
		$this->reproduzindo = false;
	}
	public function play(){
		$this->reproduzindo = true;
	}
	

    /**
     * Gets the value of titulo.
     *
     * @return mixed
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Sets the value of titulo.
     *
     * @param mixed $titulo the titulo
     *
     * @return self
     */
    public function _setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Gets the value of avaliacao.
     *
     * @return mixed
     */
    public function getAvaliacao()
    {
        return $this->avaliacao;
    }

    /**
     * Sets the value of avaliacao.
     *
     * @param mixed $avaliacao the avaliacao
     *
     * @return self
     */
    public function _setAvaliacao($avaliacao)
    {
        $this->avaliacao = $avaliacao;

        return $this;
    }

    /**
     * Gets the value of views.
     *
     * @return mixed
     */
    public function getViews()
    {
        return $this->views;
    }

    /**
     * Sets the value of views.
     *
     * @param mixed $views the views
     *
     * @return self
     */
    public function _setViews($views)
    {
        $this->views = $views;

        return $this;
    }

    /**
     * Gets the value of curtidas.
     *
     * @return mixed
     */
    public function getCurtidas()
    {
        return $this->curtidas;
    }

    /**
     * Sets the value of curtidas.
     *
     * @param mixed $curtidas the curtidas
     *
     * @return self
     */
    public function _setCurtidas($curtidas)
    {
        $this->curtidas = $curtidas;

        return $this;
    }

    /**
     * Gets the value of reproduzindo.
     *
     * @return mixed
     */
    public function getReproduzindo()
    {
        return $this->reproduzindo;
    }

    /**
     * Sets the value of reproduzindo.
     *
     * @param mixed $reproduzindo the reproduzindo
     *
     * @return self
     */
    public function _setReproduzindo($reproduzindo)
    {
        $this->reproduzindo = $reproduzindo;

        return $this;
    }
}
 ?>