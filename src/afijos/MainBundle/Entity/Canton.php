<?php

namespace afijos\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Canton
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Canton
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ctn_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="ctn_nombre", type="string", length=50)
     */
    private $nombre;

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
     * Set nombre
     *
     * @param string $nombre
     * @return Canton
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }
    
    public function __toString(){
        return  $this->nombre;
    }
    
    /**
     * @ORM\ManyToOne(targetEntity="\afijos\MainBundle\Entity\Provincia")
     * @ORM\JoinColumn(name="prv_id", referencedColumnName="prv_id", onDelete="SET NULL")
     * @return integer
     */
    private $provincia;
    public function setProvincia(\afijos\MainBundle\Entity\Provincia $provincia){
            $this->provincia=$provincia;
    }

    public function getProvincia(){
            return $this->provincia;
    }       
}
