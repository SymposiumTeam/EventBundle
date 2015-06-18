<?php

namespace Symposium\Bundle\EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\MappedSuperclass
 *
 */
class AbstractEvent
{
    /**
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(name="started_at", type="datetime")
     */
    private $startedAt;

    /**
     * @ORM\Column(name="ended_at", type="datetime")
     */
    private $endedAt;

    /**
     * @ORM\Column(name="duration", type="string", length=255)
     */
    private $duration;

    /**
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @ORM\Column(name="visibility", type="string", length=255)
     */
    private $visibility;

    /**
     * @ORM\Column(name="comment", type="string", length=255)
     */
    private $comment;

    /**
     * @ORM\Column(name="priority", type="integer")
     */
    private $priority;

    /**
     * @ORM\Column(name="resources", type="string", length=255)
     */
    private $resources;

    /**
     * @ORM\Column(name="summary", type="string", length=255)
     */
    private $summary;

    /**
     * @ORM\Column(name="transparency", type="string", length=255)
     */
    private $transparency;

    /**
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\Column(name="updated_at", type="datetime")
     */
    private $updatedAt;
}