<?php

namespace Tablas\Tabla;

/**
* @Entity
*
**/

class Juego {

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
    private $nombre;

    /**
    * @var string
    * @Column(type="text")
    */
    private $requerimientos;

    
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
     * Set nombre.
     *
     * @param string $nombre
     *
     * @return Juego
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre.
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set requerimientos.
     *
     * @param string $requerimientos
     *
     * @return Juego
     */
    public function setRequerimientos($requerimientos)
    {
        $this->requerimientos = $requerimientos;

        return $this;
    }

    /**
     * Get requerimientos.
     *
     * @return string
     */
    public function getRequerimientos()
    {
        return $this->requerimientos;
    }
}
