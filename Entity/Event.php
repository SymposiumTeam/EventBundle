<?php

namespace Symposium\Bundle\EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Event
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Event extends AbstractEvent
{
	/**
     * @ORM\OneToMany(targetEntity="AbstractEvent", mappedBy="event")
     * @ORM\JoinColumn(nullable=false)
     */
    protected $abstractEvents;
}
