<?php

namespace afijos\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Subtransmision
 *
 * @ORM\Table(name="categoria_lsubtransmision")
 * @ORM\Entity
 */
class Subtransmision
{
    /**
     * @var integer
     *
     * @ORM\Column(name="clsub_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


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
     * @ORM\ManyToOne(targetEntity="Subestacion", inversedBy="subtransmisionS")
     * @ORM\JoinColumn(name="csubest_id_salida", referencedColumnName="csubest_id", onDelete="RESTRICT")
     * @return integer
     */
    private $subestacionSalida;
    public function setSubestacionSalida(\afijos\MainBundle\Entity\Subestacion $subestacionSalida=null){
            $this->subestacionSalida=$subestacionSalida;
    }

    public function getSubestacionSalida(){
            return $this->subestacionSalida;
    }

    /**
     * @ORM\ManyToOne(targetEntity="Subestacion", inversedBy="subtransmisionL")
     * @ORM\JoinColumn(name="csubest_id_llegada", referencedColumnName="csubest_id" ,onDelete="RESTRICT")
     * @return integer
     */
    private $subestacionLlegada;
    public function setSubestacionLlegada(\afijos\MainBundle\Entity\Subestacion $subestacionLlegada=null){
            $this->subestacionLlegada=$subestacionLlegada;
    }

    public function getSubestacionLlegada(){
            return $this->subestacionLlegada;
    }
    
    public function __toString(){
        return  $this->subestacionSalida." - ".$this->subestacionLlegada;
    }
    
}
