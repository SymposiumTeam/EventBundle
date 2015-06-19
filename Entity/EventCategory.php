<?php

namespace Symposium\Bundle\EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EventCategory
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class EventCategory
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
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    protected $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="right_border", type="integer")
     */
    protected $rightBorder;

    /**
     * @var integer
     *
     * @ORM\Column(name="left_border", type="integer")
     */
    protected $leftBorder;

    /**
     * @var integer
     *
     * @ORM\Column(name="parent_id", type="integer")
     */
    protected $parentId;

    /**
     * @ORM\ManyToMany(targetEntity="AbstractEvent", mappedBy="eventCategory")
     * @ORM\JoinColumn(nullable=false)
     **/
    protected $abstractEvents;
}
