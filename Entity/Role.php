<?php

namespace Symposium\Bundle\EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Role
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Role
{  
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    protected $name;

    /**
    * @ORM\OneToMany(targetEntity="Registration", mappedBy="role")
    * @ORM\JoinColumn(nullable=false)
    */
    protected $registrations;
}
