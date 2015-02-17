<?php

namespace afijos\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Usuario
 *
 * @ORM\Table(name="usuario")
 * @ORM\Entity
 */
class Usuario extends Empleado implements UserInterface
{
    /**
     * @var string
     *
     * @ORM\Column(name="us_nombre", type="string", length=50, nullable=true)
     */
    protected $username;

    /**
     * @var string
     *
     * @ORM\Column(name="us_clave", type="string", length=50, nullable=true)
     */
    protected $password;
    
    /**
     * @var string
     *
     * @ORM\Column(name="us_salt", type="string", length=50, nullable=true)
     */
    protected $salt;
    
    /**
     *
     * @ORM\ManyToMany(targetEntity="afijos\MainBundle\Entity\Rol")
     * @ORM\JoinTable(name="permisos",
     *   joinColumns={
     *     @ORM\JoinColumn(name="emp_id", referencedColumnName="emp_id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="rol_id", referencedColumnName="rol_id")
     *   }
     * )
     */
    protected $userRoles;
    
    public function __construct() {
        $this->userRoles=new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /*
     * Set  username
     * 
     * @param string $username
     */
    public function setUsername($username)    {
        $this->username = $username;   
    }

    /*
     * Get username
     * 
     * @return string
     */
    public function getUsername()    {
        return $this->username;
    }

    /*
     * Set password
     * 
     * @param string $password
     */
    public function setPassword($password)    {
        $this->password = $password;    
     }
    
     /*
      * Get password
      * 
      * @return string
      */
    public function getPassword()    {
        return $this->password;
    }
    
    /*
     * Set salt
     * 
     * @param string $salt
     */
    public function setSalt($salt){
      $this->salt=$salt;
    }            
    /*
     * Get salt
     * 
     * @return string
     */
    public function getSalt(){
        return $this->salt;
    }
    
    /*
     * Add userRoles
     * @param afijos\MainBundle\Entity\Rol $roles
     */
    public function addUserRoles(\afijos\MainBundle\Entity\Rol $roles){
        $this->userRoles[]=$roles;
    }
    public function setUserRoles($roles){
        $this->userRoles=$roles;
    }
    /*
     * Get userRoles
     * 
     * @return Doctrine\Common\Collections\Collection
     */
    public function getUserRoles() {
        return $this->userRoles;
    }
    /*
     * Get userRoles
     * 
     * @return Doctrine\Common\Collections\Collection
     */
    public function getRoles(){
        //return $this->userRoles->toArray();
        //return array('ROLE_ADMIN');
        $roles = array();
        foreach ($this->userRoles as $role) {
            $roles[] = $role->getRole();
        }
        return $roles;
    }

    public function eraseCredentials() {        
    }
}