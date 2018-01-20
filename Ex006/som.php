<?php 

/**
* 
*/
class Som
{
	private $caixas;
	private $volume;
	private $musica;
	private $wattes;

	function __construct()
	{
		$this->caixas = 0;
		$this->volume = 0;
	}
	public function aumentar(){
		$this->volume ++;
	}
	public function diminuir(){
		$this->volume --;
	}
    /**
     * Gets the value of caixas.
     *
     * @return mixed
     */
    public function getCaixas()
    {
        return $this->caixas;
    }

    /**
     * Sets the value of caixas.
     *
     * @param mixed $caixas the caixas
     *
     * @return self
     */
    public function _setCaixas($caixas)
    {
        $this->caixas = $caixas;

        return $this;
    }

    /**
     * Gets the value of volume.
     *
     * @return mixed
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * Sets the value of volume.
     *
     * @param mixed $volume the volume
     *
     * @return self
     */
    public function _setVolume($volume)
    {
        $this->volume = $volume;

        return $this;
    }

    /**
     * Gets the value of musica.
     *
     * @return mixed
     */
    public function getMusica()
    {
        return $this->musica;
    }

    /**
     * Sets the value of musica.
     *
     * @param mixed $musica the musica
     *
     * @return self
     */
    public function _setMusica($musica)
    {
        $this->musica = $musica;

        return $this;
    }

    /**
     * Gets the value of wattes.
     *
     * @return mixed
     */
    public function getWattes()
    {
        return $this->wattes;
    }

    /**
     * Sets the value of wattes.
     *
     * @param mixed $wattes the wattes
     *
     * @return self
     */
    public function _setWattes($wattes)
    {
        $this->wattes = $wattes;

        return $this;
    }
}

 ?>