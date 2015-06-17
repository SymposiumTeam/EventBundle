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
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="frequence", type="string", length=255)
     */
    private $frequence;

    /**
     * @var integer
     *
     * @ORM\Column(name="count", type="integer")
     */
    private $count;

    /**
     * @var integer
     *
     * @ORM\Column(name="intervalValue", type="integer")
     */
    private $intervalValue;

    /**
     * @var array
     *
     * @ORM\Column(name="by_second", type="simple_array")
     */
    private $bySecond;

    /**
     * @var array
     *
     * @ORM\Column(name="by_minute", type="simple_array")
     */
    private $byMinute;

    /**
     * @var array
     *
     * @ORM\Column(name="by_hour", type="simple_array")
     */
    private $byHour;

    /**
     * @var array
     *
     * @ORM\Column(name="by_day", type="simple_array")
     */
    private $byDay;

    /**
     * @var array
     *
     * @ORM\Column(name="by_month_day", type="simple_array")
     */
    private $byMonthDay;

    /**
     * @var array
     *
     * @ORM\Column(name="by_year_day", type="simple_array")
     */
    private $byYearDay;

    /**
     * @var array
     *
     * @ORM\Column(name="by_week_no", type="simple_array")
     */
    private $byWeekNo;

    /**
     * @var array
     *
     * @ORM\Column(name="by_month", type="simple_array")
     */
    private $byMonth;

    /**
     * @var string
     *
     * @ORM\Column(name="wkst", type="string", length=255)
     */
    private $wkst;

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
