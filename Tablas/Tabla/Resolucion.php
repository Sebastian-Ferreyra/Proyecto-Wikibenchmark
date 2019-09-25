<?php

namespace Tablas\Tabla;

/**
* @Entity
*
**/

class Resolucion {

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
    private $ResolucionGrafica; 


    
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
     * Set resolucionGrafica.
     *
     * @param string $resolucionGrafica
     *
     * @return Resolucion
     */
    public function setResolucionGrafica($resolucionGrafica)
    {
        $this->ResolucionGrafica = $resolucionGrafica;

        return $this;
    }

    /**
     * Get resolucionGrafica.
     *
     * @return string
     */
    public function getResolucionGrafica()
    {
        return $this->ResolucionGrafica;
    }
}
