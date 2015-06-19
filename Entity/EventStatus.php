<?php

namespace Symposium\Bundle\EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EventStatus
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class EventStatus
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
     * @ORM\OneToMany(targetEntity="AbstractEvent", mappedBy="eventStatus")
     * @ORM\JoinColumn(nullable=false)
     */
    protected $abstractEvents;
}
