<?php

namespace Tablas\Tabla;    


/**
* @Entity
*
**/

class Benchmark {

    /**
    * @var int
    *   
    * @Id
    * @Column(type="integer")
    * @GeneratedValue
    * */
    private $id;

    /**
    * @ManyToOne (targetEntity="Componente")
    * @JoinColumn (name="id_componente",referencedColumnName="id")
    */
    private $id_componente;

    /**
    * @ManyToOne (targetEntity="Juego")
    * @JoinColumn (name="id_juego",referencedColumnName="id")
    */
    private $id_juego;


    /**
    * @ManyToOne (targetEntity="Usuario")
    * @JoinColumn (name="id_usuario",referencedColumnName="id")
    */
    private $id_usuario;

    /**
    * @ManyToOne (targetEntity="Resolucion")
    * @JoinColumn (name="id_resolucion",referencedColumnName="id")
    */
    private $id_resolucion;

    /**
    * @ManyToOne (targetEntity="Calidad")
    * @JoinColumn (name="id_calidad",referencedColumnName="id")
    */
    private $id_calidad;

     /**
    * @var int
    * @Column(type="integer")
    */
    private $fps_med;

    /**
    * @var int
    * @Column(type="integer")
    */
    private $fps_min;

    /**
    * @var int
    * @Column(type="integer")
    */
    private $fps_max;


    

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
     * Set fpsMed.
     *
     * @param int $fpsMed
     *
     * @return Benchmark
     */
    public function setFpsMed($fpsMed)
    {
        $this->fps_med = $fpsMed;

        return $this;
    }

    /**
     * Get fpsMed.
     *
     * @return int
     */
    public function getFpsMed()
    {
        return $this->fps_med;
    }

    /**
     * Set fpsMin.
     *
     * @param int $fpsMin
     *
     * @return Benchmark
     */
    public function setFpsMin($fpsMin)
    {
        $this->fps_min = $fpsMin;

        return $this;
    }

    /**
     * Get fpsMin.
     *
     * @return int
     */
    public function getFpsMin()
    {
        return $this->fps_min;
    }

    /**
     * Set fpsMax.
     *
     * @param int $fpsMax
     *
     * @return Benchmark
     */
    public function setFpsMax($fpsMax)
    {
        $this->fps_max = $fpsMax;

        return $this;
    }

    /**
     * Get fpsMax.
     *
     * @return int
     */
    public function getFpsMax()
    {
        return $this->fps_max;
    }

    /**
     * Set idComponente.
     *
     * @param \Tablas\Tabla\Componente|null $idComponente
     *
     * @return Benchmark
     */
    public function setIdComponente(\Tablas\Tabla\Componente $idComponente = null)
    {
        $this->id_componente = $idComponente;

        return $this;
    }

    /**
     * Get idComponente.
     *
     * @return \Tablas\Tabla\Componente|null
     */
    public function getIdComponente()
    {
        return $this->id_componente;
    }

    /**
     * Set idJuego.
     *
     * @param \Tablas\Tabla\Juego|null $idJuego
     *
     * @return Benchmark
     */
    public function setIdJuego(\Tablas\Tabla\Juego $idJuego = null)
    {
        $this->id_juego = $idJuego;

        return $this;
    }

    /**
     * Get idJuego.
     *
     * @return \Tablas\Tabla\Juego|null
     */
    public function getIdJuego()
    {
        return $this->id_juego;
    }

    /**
     * Set idUsuario.
     *
     * @param \Tablas\Tabla\Usuario|null $idUsuario
     *
     * @return Benchmark
     */
    public function setIdUsuario(\Tablas\Tabla\Usuario $idUsuario = null)
    {
        $this->id_usuario = $idUsuario;

        return $this;
    }

    /**
     * Get idUsuario.
     *
     * @return \Tablas\Tabla\Usuario|null
     */
    public function getIdUsuario()
    {
        return $this->id_usuario;
    }

    /**
     * Set idResolucion.
     *
     * @param \Tablas\Tabla\Resolucion|null $idResolucion
     *
     * @return Benchmark
     */
    public function setIdResolucion(\Tablas\Tabla\Resolucion $idResolucion = null)
    {
        $this->id_resolucion = $idResolucion;

        return $this;
    }

    /**
     * Get idResolucion.
     *
     * @return \Tablas\Tabla\Resolucion|null
     */
    public function getIdResolucion()
    {
        return $this->id_resolucion;
    }

    /**
     * Set idCalidad.
     *
     * @param \Tablas\Tabla\Calidad|null $idCalidad
     *
     * @return Benchmark
     */
    public function setIdCalidad(\Tablas\Tabla\Calidad $idCalidad = null)
    {
        $this->id_calidad = $idCalidad;

        return $this;
    }

    /**
     * Get idCalidad.
     *
     * @return \Tablas\Tabla\Calidad|null
     */
    public function getIdCalidad()
    {
        return $this->id_calidad;
    }
}
