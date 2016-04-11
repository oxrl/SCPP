<?php

namespace fpo\BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Actividades
 *
 * @ORM\Table(name="actividades")
 * @ORM\Entity
 */
class Actividades
{
    /**
     * @var integer
     *
     * @ORM\Column(name="diagnostico", type="integer", nullable=true)
     */
    private $diagnostico;

    /**
     * @var integer
     *
     * @ORM\Column(name="profilaxis", type="integer", nullable=true)
     */
    private $profilaxis;

    /**
     * @var integer
     *
     * @ORM\Column(name="operatoria", type="integer", nullable=true)
     */
    private $operatoria;

    /**
     * @var integer
     *
     * @ORM\Column(name="endodoncia", type="integer", nullable=true)
     */
    private $endodoncia;

    /**
     * @var integer
     *
     * @ORM\Column(name="exodoncia", type="integer", nullable=true)
     */
    private $exodoncia;

    /**
     * @var integer
     *
     * @ORM\Column(name="rx", type="integer", nullable=true)
     */
    private $rx;

    /**
     * @var integer
     *
     * @ORM\Column(name="sellantes", type="integer", nullable=true)
     */
    private $sellantes;

    /**
     * @var integer
     *
     * @ORM\Column(name="fluorizacion", type="integer", nullable=true)
     */
    private $fluorizacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="periodoncia", type="integer", nullable=true)
     */
    private $periodoncia;

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
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=1, nullable=false)
     */
    private $estado;

    /**
     * @var integer
     *
     * @ORM\Column(name="numpacientesh", type="integer", nullable=true)
     */
    private $numpacientesh;

    /**
     * @var integer
     *
     * @ORM\Column(name="numpacientesm", type="integer", nullable=true)
     */
    private $numpacientesm;

    /**
     * @var integer
     *
     * @ORM\Column(name="charlas", type="integer", nullable=true)
     */
    private $charlas;

    /**
     * @var integer
     *
     * @ORM\Column(name="codigo", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="actividades_codigo_seq", allocationSize=1, initialValue=1)
     */
    private $codigo;



    /**
     * Set diagnostico
     *
     * @param integer $diagnostico
     *
     * @return Actividades
     */
    public function setDiagnostico($diagnostico)
    {
        $this->diagnostico = $diagnostico;

        return $this;
    }

    /**
     * Get diagnostico
     *
     * @return integer
     */
    public function getDiagnostico()
    {
        return $this->diagnostico;
    }

    /**
     * Set profilaxis
     *
     * @param integer $profilaxis
     *
     * @return Actividades
     */
    public function setProfilaxis($profilaxis)
    {
        $this->profilaxis = $profilaxis;

        return $this;
    }

    /**
     * Get profilaxis
     *
     * @return integer
     */
    public function getProfilaxis()
    {
        return $this->profilaxis;
    }

    /**
     * Set operatoria
     *
     * @param integer $operatoria
     *
     * @return Actividades
     */
    public function setOperatoria($operatoria)
    {
        $this->operatoria = $operatoria;

        return $this;
    }

    /**
     * Get operatoria
     *
     * @return integer
     */
    public function getOperatoria()
    {
        return $this->operatoria;
    }

    /**
     * Set endodoncia
     *
     * @param integer $endodoncia
     *
     * @return Actividades
     */
    public function setEndodoncia($endodoncia)
    {
        $this->endodoncia = $endodoncia;

        return $this;
    }

    /**
     * Get endodoncia
     *
     * @return integer
     */
    public function getEndodoncia()
    {
        return $this->endodoncia;
    }

    /**
     * Set exodoncia
     *
     * @param integer $exodoncia
     *
     * @return Actividades
     */
    public function setExodoncia($exodoncia)
    {
        $this->exodoncia = $exodoncia;

        return $this;
    }

    /**
     * Get exodoncia
     *
     * @return integer
     */
    public function getExodoncia()
    {
        return $this->exodoncia;
    }

    /**
     * Set rx
     *
     * @param integer $rx
     *
     * @return Actividades
     */
    public function setRx($rx)
    {
        $this->rx = $rx;

        return $this;
    }

    /**
     * Get rx
     *
     * @return integer
     */
    public function getRx()
    {
        return $this->rx;
    }

    /**
     * Set sellantes
     *
     * @param integer $sellantes
     *
     * @return Actividades
     */
    public function setSellantes($sellantes)
    {
        $this->sellantes = $sellantes;

        return $this;
    }

    /**
     * Get sellantes
     *
     * @return integer
     */
    public function getSellantes()
    {
        return $this->sellantes;
    }

    /**
     * Set fluorizacion
     *
     * @param integer $fluorizacion
     *
     * @return Actividades
     */
    public function setFluorizacion($fluorizacion)
    {
        $this->fluorizacion = $fluorizacion;

        return $this;
    }

    /**
     * Get fluorizacion
     *
     * @return integer
     */
    public function getFluorizacion()
    {
        return $this->fluorizacion;
    }

    /**
     * Set periodoncia
     *
     * @param integer $periodoncia
     *
     * @return Actividades
     */
    public function setPeriodoncia($periodoncia)
    {
        $this->periodoncia = $periodoncia;

        return $this;
    }

    /**
     * Get periodoncia
     *
     * @return integer
     */
    public function getPeriodoncia()
    {
        return $this->periodoncia;
    }

    /**
     * Set fechaModificacion
     *
     * @param \DateTime $fechaModificacion
     *
     * @return Actividades
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
     * @return Actividades
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
     * Set estado
     *
     * @param string $estado
     *
     * @return Actividades
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
     * Set numpacientesh
     *
     * @param integer $numpacientesh
     *
     * @return Actividades
     */
    public function setNumpacientesh($numpacientesh)
    {
        $this->numpacientesh = $numpacientesh;

        return $this;
    }

    /**
     * Get numpacientesh
     *
     * @return integer
     */
    public function getNumpacientesh()
    {
        return $this->numpacientesh;
    }

    /**
     * Set numpacientesm
     *
     * @param integer $numpacientesm
     *
     * @return Actividades
     */
    public function setNumpacientesm($numpacientesm)
    {
        $this->numpacientesm = $numpacientesm;

        return $this;
    }

    /**
     * Get numpacientesm
     *
     * @return integer
     */
    public function getNumpacientesm()
    {
        return $this->numpacientesm;
    }

    /**
     * Set charlas
     *
     * @param integer $charlas
     *
     * @return Actividades
     */
    public function setCharlas($charlas)
    {
        $this->charlas = $charlas;

        return $this;
    }

    /**
     * Get charlas
     *
     * @return integer
     */
    public function getCharlas()
    {
        return $this->charlas;
    }

    /**
     * Get codigo
     *
     * @return integer
     */
    public function getCodigo()
    {
        return $this->codigo;
    }
}
