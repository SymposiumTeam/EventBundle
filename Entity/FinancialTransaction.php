<?php

namespace Symposium\Bundle\EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FinancialTransaction
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class FinancialTransaction
{
    /**
     * @ORM\OneToMany(targetEntity="Registration", mappedBy="financialTransaction")
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
     * @var integer
     *
     * @ORM\Column(name="value", type="integer")
     */
    protected $value;

    /**
     * @var string
     *
     * @ORM\Column(name="method", type="string", length=255)
     */
    protected $method;

    /**
     * @var string
     *
     * @ORM\Column(name="currency_code", type="string", length=255)
     */
    protected $currencyCode;

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
     * @ORM\OneToMany(targetEntity="Registration", mappedBy="financialTransaction")
     * @ORM\JoinColumn(nullable=false)
     */
    protected $registrations;
}
