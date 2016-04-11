<?php

namespace fpo\BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Totales
 *
 * @ORM\Table(name="totales")
 * @ORM\Entity
 */
class Totales
{
    /**
     * @var string
     *
     * @ORM\Column(name="nombres", type="string", nullable=false)
     */
    private $nombres;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidos", type="string", nullable=false)
     */
    private $apellidos;

    /**
     * @var string
     *
     * @ORM\Column(name="grupo", type="string", nullable=false)
     */
    private $grupo;

    /**
     * @var integer
     *
     * @ORM\Column(name="tdiagnostico", type="integer", nullable=true)
     */
    private $tdiagnostico;

    /**
     * @var integer
     *
     * @ORM\Column(name="tprofilaxis", type="integer", nullable=true)
     */
    private $tprofilaxis;

    /**
     * @var integer
     *
     * @ORM\Column(name="toperatoria", type="integer", nullable=true)
     */
    private $toperatoria;

    /**
     * @var integer
     *
     * @ORM\Column(name="tendodoncia", type="integer", nullable=true)
     */
    private $tendodoncia;

    /**
     * @var integer
     *
     * @ORM\Column(name="texodoncia", type="integer", nullable=true)
     */
    private $texodoncia;

    /**
     * @var integer
     *
     * @ORM\Column(name="trx", type="integer", nullable=true)
     */
    private $trx;

    /**
     * @var integer
     *
     * @ORM\Column(name="tsellantes", type="integer", nullable=true)
     */
    private $tsellantes;

    /**
     * @var integer
     *
     * @ORM\Column(name="tfluorizacion", type="integer", nullable=true)
     */
    private $tfluorizacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="tperiodoncia", type="integer", nullable=true)
     */
    private $tperiodoncia;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_modificacion", type="datetimetz", nullable=false)
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
     * @ORM\Column(name="tnumpacientesh", type="integer", nullable=true)
     */
    private $tnumpacientesh;

    /**
     * @var integer
     *
     * @ORM\Column(name="tnumpacientesm", type="integer", nullable=true)
     */
    private $tnumpacientesm;

    /**
     * @var integer
     *
     * @ORM\Column(name="thorasacreditadas", type="integer", nullable=true)
     */
    private $thorasacreditadas;

    /**
     * @var integer
     *
     * @ORM\Column(name="tactvidades", type="integer", nullable=true)
     */
    private $tactvidades;

    /**
     * @var integer
     *
     * @ORM\Column(name="tpacientes", type="integer", nullable=true)
     */
    private $tpacientes;

    /**
     * @var string
     *
     * @ORM\Column(name="institucion", type="string", nullable=false)
     */
    private $institucion;

    /**
     * @var string
     *
     * @ORM\Column(name="cedula", type="string")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="totales_cedula_seq", allocationSize=1, initialValue=1)
     */
    private $cedula;



    /**
     * Set nombres
     *
     * @param string $nombres
     *
     * @return Totales
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
     * Set apellidos
     *
     * @param string $apellidos
     *
     * @return Totales
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set grupo
     *
     * @param string $grupo
     *
     * @return Totales
     */
    public function setGrupo($grupo)
    {
        $this->grupo = $grupo;

        return $this;
    }

    /**
     * Get grupo
     *
     * @return string
     */
    public function getGrupo()
    {
        return $this->grupo;
    }

    /**
     * Set tdiagnostico
     *
     * @param integer $tdiagnostico
     *
     * @return Totales
     */
    public function setTdiagnostico($tdiagnostico)
    {
        $this->tdiagnostico = $tdiagnostico;

        return $this;
    }

    /**
     * Get tdiagnostico
     *
     * @return integer
     */
    public function getTdiagnostico()
    {
        return $this->tdiagnostico;
    }

    /**
     * Set tprofilaxis
     *
     * @param integer $tprofilaxis
     *
     * @return Totales
     */
    public function setTprofilaxis($tprofilaxis)
    {
        $this->tprofilaxis = $tprofilaxis;

        return $this;
    }

    /**
     * Get tprofilaxis
     *
     * @return integer
     */
    public function getTprofilaxis()
    {
        return $this->tprofilaxis;
    }

    /**
     * Set toperatoria
     *
     * @param integer $toperatoria
     *
     * @return Totales
     */
    public function setToperatoria($toperatoria)
    {
        $this->toperatoria = $toperatoria;

        return $this;
    }

    /**
     * Get toperatoria
     *
     * @return integer
     */
    public function getToperatoria()
    {
        return $this->toperatoria;
    }

    /**
     * Set tendodoncia
     *
     * @param integer $tendodoncia
     *
     * @return Totales
     */
    public function setTendodoncia($tendodoncia)
    {
        $this->tendodoncia = $tendodoncia;

        return $this;
    }

    /**
     * Get tendodoncia
     *
     * @return integer
     */
    public function getTendodoncia()
    {
        return $this->tendodoncia;
    }

    /**
     * Set texodoncia
     *
     * @param integer $texodoncia
     *
     * @return Totales
     */
    public function setTexodoncia($texodoncia)
    {
        $this->texodoncia = $texodoncia;

        return $this;
    }

    /**
     * Get texodoncia
     *
     * @return integer
     */
    public function getTexodoncia()
    {
        return $this->texodoncia;
    }

    /**
     * Set trx
     *
     * @param integer $trx
     *
     * @return Totales
     */
    public function setTrx($trx)
    {
        $this->trx = $trx;

        return $this;
    }

    /**
     * Get trx
     *
     * @return integer
     */
    public function getTrx()
    {
        return $this->trx;
    }

    /**
     * Set tsellantes
     *
     * @param integer $tsellantes
     *
     * @return Totales
     */
    public function setTsellantes($tsellantes)
    {
        $this->tsellantes = $tsellantes;

        return $this;
    }

    /**
     * Get tsellantes
     *
     * @return integer
     */
    public function getTsellantes()
    {
        return $this->tsellantes;
    }

    /**
     * Set tfluorizacion
     *
     * @param integer $tfluorizacion
     *
     * @return Totales
     */
    public function setTfluorizacion($tfluorizacion)
    {
        $this->tfluorizacion = $tfluorizacion;

        return $this;
    }

    /**
     * Get tfluorizacion
     *
     * @return integer
     */
    public function getTfluorizacion()
    {
        return $this->tfluorizacion;
    }

    /**
     * Set tperiodoncia
     *
     * @param integer $tperiodoncia
     *
     * @return Totales
     */
    public function setTperiodoncia($tperiodoncia)
    {
        $this->tperiodoncia = $tperiodoncia;

        return $this;
    }

    /**
     * Get tperiodoncia
     *
     * @return integer
     */
    public function getTperiodoncia()
    {
        return $this->tperiodoncia;
    }

    /**
     * Set fechaModificacion
     *
     * @param \DateTime $fechaModificacion
     *
     * @return Totales
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
     * @return Totales
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
     * @return Totales
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
     * Set tnumpacientesh
     *
     * @param integer $tnumpacientesh
     *
     * @return Totales
     */
    public function setTnumpacientesh($tnumpacientesh)
    {
        $this->tnumpacientesh = $tnumpacientesh;

        return $this;
    }

    /**
     * Get tnumpacientesh
     *
     * @return integer
     */
    public function getTnumpacientesh()
    {
        return $this->tnumpacientesh;
    }

    /**
     * Set tnumpacientesm
     *
     * @param integer $tnumpacientesm
     *
     * @return Totales
     */
    public function setTnumpacientesm($tnumpacientesm)
    {
        $this->tnumpacientesm = $tnumpacientesm;

        return $this;
    }

    /**
     * Get tnumpacientesm
     *
     * @return integer
     */
    public function getTnumpacientesm()
    {
        return $this->tnumpacientesm;
    }

    /**
     * Set thorasacreditadas
     *
     * @param integer $thorasacreditadas
     *
     * @return Totales
     */
    public function setThorasacreditadas($thorasacreditadas)
    {
        $this->thorasacreditadas = $thorasacreditadas;

        return $this;
    }

    /**
     * Get thorasacreditadas
     *
     * @return integer
     */
    public function getThorasacreditadas()
    {
        return $this->thorasacreditadas;
    }

    /**
     * Set tactvidades
     *
     * @param integer $tactvidades
     *
     * @return Totales
     */
    public function setTactvidades($tactvidades)
    {
        $this->tactvidades = $tactvidades;

        return $this;
    }

    /**
     * Get tactvidades
     *
     * @return integer
     */
    public function getTactvidades()
    {
        return $this->tactvidades;
    }

    /**
     * Set tpacientes
     *
     * @param integer $tpacientes
     *
     * @return Totales
     */
    public function setTpacientes($tpacientes)
    {
        $this->tpacientes = $tpacientes;

        return $this;
    }

    /**
     * Get tpacientes
     *
     * @return integer
     */
    public function getTpacientes()
    {
        return $this->tpacientes;
    }

    /**
     * Set institucion
     *
     * @param string $institucion
     *
     * @return Totales
     */
    public function setInstitucion($institucion)
    {
        $this->institucion = $institucion;

        return $this;
    }

    /**
     * Get institucion
     *
     * @return string
     */
    public function getInstitucion()
    {
        return $this->institucion;
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
