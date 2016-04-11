<?php

namespace fpo\BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Registro
 *
 * @ORM\Table(name="registro", uniqueConstraints={@ORM\UniqueConstraint(name="u_actividades_actividades", columns={"actividades"})}, indexes={@ORM\Index(name="IDX_397CA85BF751F7C3", columns={"institucion"}), @ORM\Index(name="IDX_397CA85B7BF39BE0", columns={"cedula"}), @ORM\Index(name="IDX_397CA85B8C0E9BD3", columns={"grupo"})})
 * @ORM\Entity
 */
class Registro
{
    /**
     * @var integer
     *
     * @ORM\Column(name="horasacreditadas", type="integer", nullable=true)
     */
    private $horasacreditadas;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=1, nullable=false)
     */
    private $estado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_inicio", type="date", nullable=true)
     */
    private $fechaInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_fin", type="date", nullable=true)
     */
    private $fechaFin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_modificacion", type="datetimetz", nullable=true)
     */
    private $fechaModificacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_creacion", type="datetimetz", nullable=false)
     */
    private $fechaCreacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="registro_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \fpo\BackendBundle\Entity\Grupos
     *
     * @ORM\ManyToOne(targetEntity="fpo\BackendBundle\Entity\Grupos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="grupo", referencedColumnName="id")
     * })
     */
    private $grupo;

    /**
     * @var \fpo\BackendBundle\Entity\Actividades
     *
     * @ORM\ManyToOne(targetEntity="fpo\BackendBundle\Entity\Actividades")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="actividades", referencedColumnName="codigo")
     * })
     */
    private $actividades;

    /**
     * @var \fpo\BackendBundle\Entity\Estudiante
     *
     * @ORM\ManyToOne(targetEntity="fpo\BackendBundle\Entity\Estudiante")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cedula", referencedColumnName="cedula")
     * })
     */
    private $cedula;

    /**
     * @var \fpo\BackendBundle\Entity\Institucion
     *
     * @ORM\ManyToOne(targetEntity="fpo\BackendBundle\Entity\Institucion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="institucion", referencedColumnName="codigo")
     * })
     */
    private $institucion;



    /**
     * Set horasacreditadas
     *
     * @param integer $horasacreditadas
     *
     * @return Registro
     */
    public function setHorasacreditadas($horasacreditadas)
    {
        $this->horasacreditadas = $horasacreditadas;

        return $this;
    }

    /**
     * Get horasacreditadas
     *
     * @return integer
     */
    public function getHorasacreditadas()
    {
        return $this->horasacreditadas;
    }

    /**
     * Set estado
     *
     * @param string $estado
     *
     * @return Registro
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
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     *
     * @return Registro
     */
    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    /**
     * Get fechaInicio
     *
     * @return \DateTime
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }

    /**
     * Set fechaFin
     *
     * @param \DateTime $fechaFin
     *
     * @return Registro
     */
    public function setFechaFin($fechaFin)
    {
        $this->fechaFin = $fechaFin;

        return $this;
    }

    /**
     * Get fechaFin
     *
     * @return \DateTime
     */
    public function getFechaFin()
    {
        return $this->fechaFin;
    }

    /**
     * Set fechaModificacion
     *
     * @param \DateTime $fechaModificacion
     *
     * @return Registro
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
     * Set fechaCreacion
     *
     * @param \DateTime $fechaCreacion
     *
     * @return Registro
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set grupo
     *
     * @param \fpo\BackendBundle\Entity\Grupos $grupo
     *
     * @return Registro
     */
    public function setGrupo(\fpo\BackendBundle\Entity\Grupos $grupo = null)
    {
        $this->grupo = $grupo;

        return $this;
    }

    /**
     * Get grupo
     *
     * @return \fpo\BackendBundle\Entity\Grupos
     */
    public function getGrupo()
    {
        return $this->grupo;
    }

    /**
     * Set actividades
     *
     * @param \fpo\BackendBundle\Entity\Actividades $actividades
     *
     * @return Registro
     */
    public function setActividades(\fpo\BackendBundle\Entity\Actividades $actividades = null)
    {
        $this->actividades = $actividades;

        return $this;
    }

    /**
     * Get actividades
     *
     * @return \fpo\BackendBundle\Entity\Actividades
     */
    public function getActividades()
    {
        return $this->actividades;
    }

    /**
     * Set cedula
     *
     * @param \fpo\BackendBundle\Entity\Estudiante $cedula
     *
     * @return Registro
     */
    public function setCedula(\fpo\BackendBundle\Entity\Estudiante $cedula = null)
    {
        $this->cedula = $cedula;

        return $this;
    }

    /**
     * Get cedula
     *
     * @return \fpo\BackendBundle\Entity\Estudiante
     */
    public function getCedula()
    {
        return $this->cedula;
    }

    /**
     * Set institucion
     *
     * @param \fpo\BackendBundle\Entity\Institucion $institucion
     *
     * @return Registro
     */
    public function setInstitucion(\fpo\BackendBundle\Entity\Institucion $institucion = null)
    {
        $this->institucion = $institucion;

        return $this;
    }

    /**
     * Get institucion
     *
     * @return \fpo\BackendBundle\Entity\Institucion
     */
    public function getInstitucion()
    {
        return $this->institucion;
    }
}
