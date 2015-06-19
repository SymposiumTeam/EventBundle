<?php

namespace Symposium\Bundle\EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RegistrationStatus
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class RegistrationStatus
{   
    /**
     * @ORM\OneToMany(targetEntity="Registration", mappedBy="registrationStatus")
     * @ORM\JoinColumn(nullable=false)
     */
    protected $registrations;
    
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
     * @ORM\OneToMany(targetEntity="Registration", mappedBy="registrationStatus")
     * @ORM\JoinColumn(nullable=false)
     */
    protected $registrations;
}
