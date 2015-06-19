<?php

namespace Symposium\Bundle\EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="event")
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="discr", type="string")
 * @ORM\DiscriminatorMap({"event" = "Event", "sub_event" = "SubEvent"})
 */
class AbstractEvent
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    protected $name;

    /**
     * @ORM\Column(name="started_at", type="datetime")
     */
    protected $startedAt;

    /**
     * @ORM\Column(name="ended_at", type="datetime")
     */
    protected $endedAt;

    /**
     * @ORM\Column(name="duration", type="string", length=255)
     */
    protected $duration;

    /**
     * @ORM\Column(name="description", type="text")
     */
    protected $description;

    /**
     * @ORM\Column(name="visibility", type="string", length=255)
     */
    protected $visibility;

    /**
     * @ORM\Column(name="comment", type="string", length=255)
     */
    protected $comment;

    /**
     * @ORM\Column(name="priority", type="integer")
     */
    protected $priority;

    /**
     * @ORM\Column(name="resources", type="string", length=255)
     */
    protected $resources;

    /**
     * @ORM\Column(name="summary", type="string", length=255)
     */
    protected $summary;

    /**
     * @ORM\Column(name="transparency", type="string", length=255)
     */
    protected $transparency;

    /**
     * @ORM\Column(name="created_at", type="datetime")
     */
    protected $createdAt;

    /**
     * @ORM\Column(name="updated_at", type="datetime")
     */
    protected $updatedAt;

    /**
     * @ORM\ManyToOne(targetEntity="EventStatus" ,inversedBy="abstractEvents")
     * @ORM\JoinColumn(name="event_status_id", referencedColumnName="id")
     */
    protected $eventStatus;

    /**
     * @ORM\ManyToMany(targetEntity="EventCategory", inversedBy="abstractEvents")
     * @ORM\JoinTable(name="event_event_category")
     **/
    protected $eventCategory;

    /**
     * @ORM\ManyToOne(targetEntity="Location" ,inversedBy="abstractEvents")
     * @ORM\JoinColumn(name="location_id", referencedColumnName="id")
     */
    protected $location;

    /**
     * @ORM\ManyToOne(targetEntity="Event" ,inversedBy="abstractEvents")
     * @ORM\JoinColumn(name="event_id", referencedColumnName="id")
     */
    protected $event;

    /**
     * @ORM\ManyToMany(targetEntity="Recur", inversedBy="abstractEventsWithExceptionRule")
     * @ORM\JoinTable(name="event_event_exception_rule")
     **/
    protected $exceptionRule;

    /**
     * @ORM\ManyToMany(targetEntity="Recur", inversedBy="abstractEventsWithRecurenceRule")
     * @ORM\JoinTable(name="event_event_recurence_rule")
     **/
    protected $recurenceRule;
}