<?php

namespace Tablas\Tabla;

/**
* @Entity
*
**/

class Componente {

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
    private $detalle;

    /**
    * @var string
    * @Column(length=150)
    */
    private $Tipo;



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
     * @return Componente
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
     * Set detalle.
     *
     * @param string $detalle
     *
     * @return Componente
     */
    public function setDetalle($detalle)
    {
        $this->detalle = $detalle;

        return $this;
    }

    /**
     * Get detalle.
     *
     * @return string
     */
    public function getDetalle()
    {
        return $this->detalle;
    }

    /**
     * Set tipo.
     *
     * @param string $tipo
     *
     * @return Componente
     */
    public function setTipo($tipo)
    {
        $this->Tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo.
     *
     * @return string
     */
    public function getTipo()
    {
        return $this->Tipo;
    }
}
