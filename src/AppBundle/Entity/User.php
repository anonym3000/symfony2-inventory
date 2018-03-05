<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM,
    FOS\UserBundle\Entity\User as BaseUser;
    
/**
 * User
 *
 * @ORM\Table(name="`user`")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id; 

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
}