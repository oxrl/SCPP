<?php

namespace fpo\BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Estudiante
 *
 * @ORM\Table(name="estudiante")
 * @ORM\Entity
 */
class Estudiante
{
    /**
     * @var string
     *
     * @ORM\Column(name="nombres", type="string", length=60, nullable=false)
     */
    private $nombres;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidop", type="string", length=40, nullable=false)
     */
    private $apellidop;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidom", type="string", length=40, nullable=false)
     */
    private $apellidom;

    /**
     * @var string
     *
     * @ORM\Column(name="paralelo", type="string", length=10, nullable=true)
     */
    private $paralelo;

    /**
     * @var string
     *
     * @ORM\Column(name="anolectivo", type="string", length=9, nullable=false)
     */
    private $anolectivo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_creacion", type="datetimetz", nullable=false)
     */
    private $fechaCreacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_modificacion", type="datetimetz", nullable=true)
     */
    private $fechaModificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=1, nullable=false)
     */
    private $estado;

    /**
     * @var string
     *
     * @ORM\Column(name="cedula", type="string", length=10)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="estudiante_cedula_seq", allocationSize=1, initialValue=1)
     */
    private $cedula;



    /**
     * Set nombres
     *
     * @param string $nombres
     *
     * @return Estudiante
     */
    public function setNombres($nombres)
    {
        $this->nombres = $nombres;

        return $this;
    }

    /**
     * Get nombres
     *
     * @return string
     */
    public function getNombres()
    {
        return $this->nombres;
    }

    /**
     * Set apellidop
     *
     * @param string $apellidop
     *
     * @return Estudiante
     */
    public function setApellidop($apellidop)
    {
        $this->apellidop = $apellidop;

        return $this;
    }

    /**
     * Get apellidop
     *
     * @return string
     */
    public function getApellidop()
    {
        return $this->apellidop;
    }

    /**
     * Set apellidom
     *
     * @param string $apellidom
     *
     * @return Estudiante
     */
    public function setApellidom($apellidom)
    {
        $this->apellidom = $apellidom;

        return $this;
    }

    /**
     * Get apellidom
     *
     * @return string
     */
    public function getApellidom()
    {
        return $this->apellidom;
    }

    /**
     * Set paralelo
     *
     * @param string $paralelo
     *
     * @return Estudiante
     */
    public function setParalelo($paralelo)
    {
        $this->paralelo = $paralelo;

        return $this;
    }

    /**
     * Get paralelo
     *
     * @return string
     */
    public function getParalelo()
    {
        return $this->paralelo;
    }

    /**
     * Set anolectivo
     *
     * @param string $anolectivo
     *
     * @return Estudiante
     */
    public function setAnolectivo($anolectivo)
    {
        $this->anolectivo = $anolectivo;

        return $this;
    }

    /**
     * Get anolectivo
     *
     * @return string
     */
    public function getAnolectivo()
    {
        return $this->anolectivo;
    }

    /**
     * Set fechaCreacion
     *
     * @param \DateTime $fechaCreacion
     *
     * @return Estudiante
     */
    public function setFechaCreacion($fechaCreacion)
    {
        $this->fechaCreacion = $fechaCreacion;

        return $this;
    }

    /**
     * Get fechaCreacion
     *
     * @return \DateTime
     */
    public function getFechaCreacion()
    {
        return $this->fechaCreacion;
    }

    /**
     * Set fechaModificacion
     *
     * @param \DateTime $fechaModificacion
     *
     * @return Estudiante
     */
    public function setFechaModificacion($fechaModificacion)
    {
        $this->fechaModificacion = $fechaModificacion;

        return $this;
    }

    /**
     * Get fechaModificacion
     *
     * @return \DateTime
     */
    public function getFechaModificacion()
    {
        return $this->fechaModificacion;
    }

    /**
     * Set estado
     *
     * @param string $estado
     *
     * @return Estudiante
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Get cedula
     *
     * @return string
     */
    public function getCedula()
    {
        return $this->cedula;
    }
}
