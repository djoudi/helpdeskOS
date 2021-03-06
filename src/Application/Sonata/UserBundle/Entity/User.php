<?php

/**
 * This file is part of the <name> project.
 *
 * (c) <yourname> <youremail>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Application\Sonata\UserBundle\Entity;

use Sonata\UserBundle\Entity\BaseUser as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * This file has been generated by the Sonata EasyExtends bundle ( http://sonata-project.org/bundles/easy-extends )
 *
 * References :
 *   working with object : http://www.doctrine-project.org/projects/orm/2.0/docs/reference/working-with-objects/en
 *
 * @author <yourname> <youremail>
 * 
 * @ORM\Entity()
 */
class User extends BaseUser
{
    /**
     * @var integer $id
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     *
     * @var Object $unidad_administrativa
     */
    protected $unidad_administrativa;
    
    /**
     *
     * @var ArrayCollection
     * 
     * @ORM\OneToMany(targetEntity="Recchia\HelpdeskBundle\Entity\Incidencia", mappedBy="tecnico", cascade={"remove"}, orphanRemoval=true)
     */
    private $incidencias;
    

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->incidencias = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Get id
     *
     * @return integer $id
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * Set unidad_administrativa
     *
     * @param \Recchia\HelpdeskBundle\Entity\UnidadAdministrativa $unidadAdministrativa
     * @return Usuario
     */
    public function setUnidadAdministrativa(\Recchia\HelpdeskBundle\Entity\UnidadAdministrativa $unidadAdministrativa = null) {
        $this->unidad_administrativa = $unidadAdministrativa;

        return $this;
    }

    /**
     * Get unidad_administrativa
     *
     * @return Recchia\HelpdeskBundle\Entity\UnidadAdministrativa
     */
    public function getUnidadAdministrativa() {
        return $this->unidad_administrativa;
    }
    
    /**
     * Add incidencias
     *
     * @param \Recchia\HelpdeskBundle\Entity\Incidencia $incidencias
     * @return Categoria
     */
    public function addIncidencia(\Recchia\HelpdeskBundle\Entity\Incidencia $incidencias)
    {
        $this->incidencias[] = $incidencias;
    
        return $this;
    }

    /**
     * Remove incidencias
     *
     * @param \Recchia\HelpdeskBundle\Entity\Incidencia $incidencias
     */
    public function removeIncidencia(\Recchia\HelpdeskBundle\Entity\Incidencia $incidencias)
    {
        $this->incidencias->removeElement($incidencias);
    }

    /**
     * Get incidencias
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIncidencias()
    {
        return $this->incidencias;
    }
    
    public function __toString() {
        return $this->firstname . ' ' . $this->lastname . ' (' . $this->username . ')';
    }
}