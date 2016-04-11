<?php

namespace fpo\BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rolmenu
 *
 * @ORM\Table(name="rolmenu", indexes={@ORM\Index(name="fk_rolmenu_menu1", columns={"menu_id"}), @ORM\Index(name="fk_rolmenu_rol", columns={"rol_id"})})
 * @ORM\Entity
 */
class Rolmenu
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="rolmenu_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \fpo\BackendBundle\Entity\Menu
     *
     * @ORM\ManyToOne(targetEntity="fpo\BackendBundle\Entity\Menu")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="menu_id", referencedColumnName="id")
     * })
     */
    private $menu;

    /**
     * @var \fpo\BackendBundle\Entity\Rol
     *
     * @ORM\ManyToOne(targetEntity="fpo\BackendBundle\Entity\Rol")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rol_id", referencedColumnName="id")
     * })
     */
    private $rol;



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
     * Set menu
     *
     * @param \fpo\BackendBundle\Entity\Menu $menu
     *
     * @return Rolmenu
     */
    public function setMenu(\fpo\BackendBundle\Entity\Menu $menu = null)
    {
        $this->menu = $menu;

        return $this;
    }

    /**
     * Get menu
     *
     * @return \fpo\BackendBundle\Entity\Menu
     */
    public function getMenu()
    {
        return $this->menu;
    }

    /**
     * Set rol
     *
     * @param \fpo\BackendBundle\Entity\Rol $rol
     *
     * @return Rolmenu
     */
    public function setRol(\fpo\BackendBundle\Entity\Rol $rol = null)
    {
        $this->rol = $rol;

        return $this;
    }

    /**
     * Get rol
     *
     * @return \fpo\BackendBundle\Entity\Rol
     */
    public function getRol()
    {
        return $this->rol;
    }
}
