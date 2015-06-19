<?php

namespace Symposium\Bundle\EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recur
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Recur
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
     * @ORM\Column(name="frequence", type="string", length=255)
     */
    protected $frequence;

    /**
     * @var integer
     *
     * @ORM\Column(name="count", type="integer")
     */
    protected $count;

    /**
     * @var integer
     *
     * @ORM\Column(name="intervalValue", type="integer")
     */
    protected $intervalValue;

    /**
     * @var array
     *
     * @ORM\Column(name="by_second", type="simple_array")
     */
    protected $bySecond;

    /**
     * @var array
     *
     * @ORM\Column(name="by_minute", type="simple_array")
     */
    protected $byMinute;

    /**
     * @var array
     *
     * @ORM\Column(name="by_hour", type="simple_array")
     */
    protected $byHour;

    /**
     * @var array
     *
     * @ORM\Column(name="by_day", type="simple_array")
     */
    protected $byDay;

    /**
     * @var array
     *
     * @ORM\Column(name="by_month_day", type="simple_array")
     */
    protected $byMonthDay;

    /**
     * @var array
     *
     * @ORM\Column(name="by_year_day", type="simple_array")
     */
    protected $byYearDay;

    /**
     * @var array
     *
     * @ORM\Column(name="by_week_no", type="simple_array")
     */
    protected $byWeekNo;

    /**
     * @var array
     *
     * @ORM\Column(name="by_month", type="simple_array")
     */
    protected $byMonth;

    /**
     * @var string
     *
     * @ORM\Column(name="wkst", type="string", length=255)
     */
    protected $wkst;

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
     * @ORM\ManyToMany(targetEntity="AbstractEvent", mappedBy="exceptionRule")
     * @ORM\JoinColumn(nullable=false)
     **/
    protected $abstractEventsWithExceptionRule;

    /**
     * @ORM\ManyToMany(targetEntity="AbstractEvent", mappedBy="recurenceRule")
     * @ORM\JoinColumn(nullable=false)
     **/
    protected $abstractEventsWithRecurenceRule;
}
