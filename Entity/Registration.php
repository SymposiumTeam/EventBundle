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

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime")
     */
    private $updatedAt;
}
