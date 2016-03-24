<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Events
 *
 * @ORM\Table(name="events")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EventsRepository")
 */
class Events
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=250)
     */
    private $name;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="event_start_date", type="date")
     */
    private $eventStartDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="event_end_date", type="date")
     */
    private $eventEndDate;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Events
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set eventStartDate
     *
     * @param \DateTime $eventStartDate
     *
     * @return Events
     */
    public function setEventStartDate($eventStartDate)
    {
        $this->eventStartDate = $eventStartDate;

        return $this;
    }

    /**
     * Get eventStartDate
     *
     * @return \DateTime
     */
    public function getEventStartDate()
    {
        return $this->eventStartDate;
    }

    /**
     * Set eventEndDate
     *
     * @param \DateTime $eventEndDate
     *
     * @return Events
     */
    public function setEventEndDate($eventEndDate)
    {
        $this->eventEndDate = $eventEndDate;

        return $this;
    }

    /**
     * Get eventEndDate
     *
     * @return \DateTime
     */
    public function getEventEndDate()
    {
        return $this->eventEndDate;
    }
}

