<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Matches
 *
 * @ORM\Table(name="matches")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MatchesRepository")
 */
class Matches
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
     * @var int
     *
     * @ORM\Column(name="home_team_id", type="integer")
     */
    private $homeTeamId;

    /**
     * @var int
     *
     * @ORM\Column(name="away_team_id", type="integer")
     */
    private $awayTeamId;

    /**
     * @var int
     *
     * @ORM\Column(name="home_score", type="integer")
     */
    private $homeScore;

    /**
     * @var int
     *
     * @ORM\Column(name="snitch", type="integer")
     */
    private $snitch;

    /**
     * @var int
     *
     * @ORM\Column(name="p", type="integer", nullable=true)
     */
    private $p;

    /**
     * @var float
     *
     * @ORM\Column(name="padj", type="float", nullable=true)
     */
    private $padj;

    /**
     * @var float
     *
     * @ORM\Column(name="swim", type="float", nullable=true)
     */
    private $swim;

    /**
     * @var int
     *
     * @ORM\Column(name="event_id", type="integer")
     */
    private $eventId;

    /**
     * @var int
     *
     * @ORM\Column(name="event_order", type="integer", nullable=true)
     */
    private $eventOrder;


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
     * Set homeTeamId
     *
     * @param integer $homeTeamId
     *
     * @return Matches
     */
    public function setHomeTeamId($homeTeamId)
    {
        $this->homeTeamId = $homeTeamId;

        return $this;
    }

    /**
     * Get homeTeamId
     *
     * @return int
     */
    public function getHomeTeamId()
    {
        return $this->homeTeamId;
    }

    /**
     * Set awayTeamId
     *
     * @param integer $awayTeamId
     *
     * @return Matches
     */
    public function setAwayTeamId($awayTeamId)
    {
        $this->awayTeamId = $awayTeamId;

        return $this;
    }

    /**
     * Get awayTeamId
     *
     * @return int
     */
    public function getAwayTeamId()
    {
        return $this->awayTeamId;
    }

    /**
     * Set homeScore
     *
     * @param integer $homeScore
     *
     * @return Matches
     */
    public function setHomeScore($homeScore)
    {
        $this->homeScore = $homeScore;

        return $this;
    }

    /**
     * Get homeScore
     *
     * @return int
     */
    public function getHomeScore()
    {
        return $this->homeScore;
    }

    /**
     * Set snitch
     *
     * @param integer $snitch
     *
     * @return Matches
     */
    public function setSnitch($snitch)
    {
        $this->snitch = $snitch;

        return $this;
    }

    /**
     * Get snitch
     *
     * @return int
     */
    public function getSnitch()
    {
        return $this->snitch;
    }

    /**
     * Set p
     *
     * @param integer $p
     *
     * @return Matches
     */
    public function setP($p)
    {
        $this->p = $p;

        return $this;
    }

    /**
     * Get p
     *
     * @return int
     */
    public function getP()
    {
        return $this->p;
    }

    /**
     * Set padj
     *
     * @param float $padj
     *
     * @return Matches
     */
    public function setPadj($padj)
    {
        $this->padj = $padj;

        return $this;
    }

    /**
     * Get padj
     *
     * @return float
     */
    public function getPadj()
    {
        return $this->padj;
    }

    /**
     * Set swim
     *
     * @param float $swim
     *
     * @return Matches
     */
    public function setSwim($swim)
    {
        $this->swim = $swim;

        return $this;
    }

    /**
     * Get swim
     *
     * @return float
     */
    public function getSwim()
    {
        return $this->swim;
    }

    /**
     * Set eventId
     *
     * @param integer $eventId
     *
     * @return Matches
     */
    public function setEventId($eventId)
    {
        $this->eventId = $eventId;

        return $this;
    }

    /**
     * Get eventId
     *
     * @return int
     */
    public function getEventId()
    {
        return $this->eventId;
    }

    /**
     * Set eventOrder
     *
     * @param integer $eventOrder
     *
     * @return Matches
     */
    public function setEventOrder($eventOrder)
    {
        $this->eventOrder = $eventOrder;

        return $this;
    }

    /**
     * Get eventOrder
     *
     * @return int
     */
    public function getEventOrder()
    {
        return $this->eventOrder;
    }
}

