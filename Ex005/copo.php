<?php 

/**
* 
*/
class Copo {
	private $cor;
	private $volume;
	private $cheio;
	private $dono;



	function __construct(){
		$this->cheio = false;
		$this->volume = 0;
		
	}

	public function encherCopo(){
		$this->cheio = true;
		$this->volume = 100;
	}
	public function beber(){
		$this->volume--;
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
     * Gets the value of cheio.
     *
     * @return mixed
     */
    public function getCheio()
    {
    	return $this->cheio;
    }

    /**
     * Sets the value of cheio.
     *
     * @param mixed $cheio the cheio
     *
     * @return self
     */
    public function _setCheio($cheio)
    {
    	$this->cheio = $cheio;

    	return $this;
    }

    /**
     * Gets the value of dono.
     *
     * @return mixed
     */
    public function getDono()
    {
    	return $this->dono;
    }

    /**
     * Sets the value of dono.
     *
     * @param mixed $dono the dono
     *
     * @return self
     */
    public function _setDono($dono)
    {
    	$this->dono = $dono;

    	return $this;
    }
}

?>