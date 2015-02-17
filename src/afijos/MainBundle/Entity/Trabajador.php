<?php

namespace afijos\MainBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Trabajador
 *
 * @ORM\Table(name="trabajador")
 * @ORM\Entity
 */
class Trabajador extends Empleado
{    
    /**
     * @var string
     *
     * @ORM\Column(name="emp_codigo", type="string", length=10)
     */
    private $codigo;
    
    /**
     * Set codigo
     *
     * @param string $codigo
     * @return Trabajador
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return string 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }
    /**
     * @ORM\ManyToOne(targetEntity="\afijos\MainBundle\Entity\Departamento", inversedBy="trabajador")
     * @ORM\JoinColumn(name="dpto_id", referencedColumnName="dpto_id", onDelete="SET NULL")
     * @return integer
     */
    private $departamento;
    public function setDepartamento(\afijos\MainBundle\Entity\Departamento $departamento){
            $this->departamento=$departamento;
    }
    public function getDepartamento(){
            return $this->departamento;
    }
}
