<?php

namespace Tablas\Tabla;

/**
* @Entity
*
**/

class Calidad {

    /**
    * @var int
    *   /**
    * @Id
    * @Column(type="integer")
    * @GeneratedValue
    * */
    private $id;

    /**
    * @var string
    * @Column(length=150)
    */
    private $CalidadGrafica;    

    
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Benchmark = new \Doctrine\Common\Collections\ArrayCollection();
    }

    

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set calidadGrafica.
     *
     * @param string $calidadGrafica
     *
     * @return Calidad
     */
    public function setCalidadGrafica($calidadGrafica)
    {
        $this->CalidadGrafica = $calidadGrafica;

        return $this;
    }

    /**
     * Get calidadGrafica.
     *
     * @return string
     */
    public function getCalidadGrafica()
    {
        return $this->CalidadGrafica;
    }
}
