<?php

namespace Symposium\Bundle\EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Registration
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Registration
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
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    protected $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime")
     */
    protected $updatedAt;
    
    /**
     * @ORM\ManyToOne(targetEntity="RegistrationStatus", inversedBy="registrations")
     * @ORM\JoinColumn(nullable=false)
     */
    protected $registrationStatus;

    /**
     * @ORM\ManyToOne(targetEntity="Role", inversedBy="registrations")
     * @ORM\JoinColumn(nullable=false)
     */
    protected $role;

    /**
     * @ORM\ManyToOne(targetEntity="FinancialTransaction", inversedBy="registrations")
     * @ORM\JoinColumn(nullable=false)
     */
    protected $financialTransaction;
}
