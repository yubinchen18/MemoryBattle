<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Game
 *
 * @ORM\Table(name="game")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\GameRepository")
 */
class Game
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
     * @ORM\Column(name="lvl1_goodpicks", type="string", length=255, nullable=true)
     */
    private $lvl1Goodpicks;

    /**
     * @var string
     *
     * @ORM\Column(name="lvl2_goodpicks", type="string", length=255, nullable=true)
     */
    private $lvl2Goodpicks;

    /**
     * @var string
     *
     * @ORM\Column(name="lvl3_goodpicks", type="string", length=255, nullable=true)
     */
    private $lvl3Goodpicks;

    /**
     * @var string
     *
     * @ORM\Column(name="lvl4_goodpicks", type="string", length=255, nullable=true)
     */
    private $lvl4Goodpicks;

    /**
     * @var string
     *
     * @ORM\Column(name="lvl5_goodpicks", type="string", length=255, nullable=true)
     */
    private $lvl5Goodpicks;

    /**
     * @var string
     *
     * @ORM\Column(name="lvl6_goodpicks", type="string", length=255, nullable=true)
     */
    private $lvl6Goodpicks;

    /**
     * @var string
     *
     * @ORM\Column(name="lvl7_goodpicks", type="string", length=255, nullable=true)
     */
    private $lvl7Goodpicks;

    /**
     * @var string
     *
     * @ORM\Column(name="lvl8_goodpicks", type="string", length=255, nullable=true)
     */
    private $lvl8Goodpicks;

    /**
     * @var string
     *
     * @ORM\Column(name="lvl9_goodpicks", type="string", length=255, nullable=true)
     */
    private $lvl9Goodpicks;

    /**
     * @var string
     *
     * @ORM\Column(name="lvl10_goodpicks", type="string", length=255, nullable=true)
     */
    private $lvl10Goodpicks;

    /**
     * @var string
     *
     * @ORM\Column(name="lvl1_badpicks", type="string", length=255, nullable=true)
     */
    private $lvl1Badpicks;

    /**
     * @var string
     *
     * @ORM\Column(name="lvl2_badpicks", type="string", length=255, nullable=true)
     */
    private $lvl2Badpicks;

    /**
     * @var string
     *
     * @ORM\Column(name="lvl3_badpicks", type="string", length=255, nullable=true)
     */
    private $lvl3Badpicks;

    /**
     * @var string
     *
     * @ORM\Column(name="lvl4_badpicks", type="string", length=255, nullable=true)
     */
    private $lvl4Badpicks;

    /**
     * @var string
     *
     * @ORM\Column(name="lvl5_badpicks", type="string", length=255, nullable=true)
     */
    private $lvl5Badpicks;

    /**
     * @var string
     *
     * @ORM\Column(name="lvl6_badpicks", type="string", length=255, nullable=true)
     */
    private $lvl6Badpicks;

    /**
     * @var string
     *
     * @ORM\Column(name="lvl7_badpicks", type="string", length=255, nullable=true)
     */
    private $lvl7Badpicks;

    /**
     * @var string
     *
     * @ORM\Column(name="lvl8_badpicks", type="string", length=255, nullable=true)
     */
    private $lvl8Badpicks;

    /**
     * @var string
     *
     * @ORM\Column(name="lvl9_badpicks", type="string", length=255, nullable=true)
     */
    private $lvl9Badpicks;

    /**
     * @var string
     *
     * @ORM\Column(name="lvl10_badpicks", type="string", length=255, nullable=true)
     */
    private $lvl10Badpicks;

    /**
     * @var string
     *
     * @ORM\Column(name="lvl1_bonus", type="string", length=255, nullable=true)
     */
    private $lvl1Bonus;

    /**
     * @var string
     *
     * @ORM\Column(name="lvl2_bonus", type="string", length=255, nullable=true)
     */
    private $lvl2Bonus;

    /**
     * @var string
     *
     * @ORM\Column(name="lvl3_bonus", type="string", length=255, nullable=true)
     */
    private $lvl3Bonus;

    /**
     * @var string
     *
     * @ORM\Column(name="lvl4_bonus", type="string", length=255, nullable=true)
     */
    private $lvl4Bonus;

    /**
     * @var string
     *
     * @ORM\Column(name="lvl5_bonus", type="string", length=255, nullable=true)
     */
    private $lvl5Bonus;

    /**
     * @var string
     *
     * @ORM\Column(name="lvl6_bonus", type="string", length=255, nullable=true)
     */
    private $lvl6Bonus;

    /**
     * @var string
     *
     * @ORM\Column(name="lvl7_bonus", type="string", length=255, nullable=true)
     */
    private $lvl7Bonus;

    /**
     * @var string
     *
     * @ORM\Column(name="lvl8_bonus", type="string", length=255, nullable=true)
     */
    private $lvl8Bonus;

    /**
     * @var string
     *
     * @ORM\Column(name="lvl9_bonus", type="string", length=255, nullable=true)
     */
    private $lvl9Bonus;

    /**
     * @var string
     *
     * @ORM\Column(name="lvl10_bonus", type="string", length=255, nullable=true)
     */
    private $lvl10Bonus;

    /**
     * @var int
     *
     * @ORM\Column(name="lvl1_score", type="integer", nullable=true)
     */
    private $lvl1Score;

    /**
     * @var int
     *
     * @ORM\Column(name="lvl2_score", type="integer", nullable=true)
     */
    private $lvl2Score;

    /**
     * @var int
     *
     * @ORM\Column(name="lvl3_score", type="integer", nullable=true)
     */
    private $lvl3Score;

    /**
     * @var int
     *
     * @ORM\Column(name="lvl4_score", type="integer", nullable=true)
     */
    private $lvl4Score;

    /**
     * @var int
     *
     * @ORM\Column(name="lvl5_score", type="integer", nullable=true)
     */
    private $lvl5Score;

    /**
     * @var int
     *
     * @ORM\Column(name="lvl6_score", type="integer", nullable=true)
     */
    private $lvl6Score;

    /**
     * @var int
     *
     * @ORM\Column(name="lvl7_score", type="integer", nullable=true)
     */
    private $lvl7Score;

    /**
     * @var int
     *
     * @ORM\Column(name="lvl8_score", type="integer", nullable=true)
     */
    private $lvl8Score;

    /**
     * @var int
     *
     * @ORM\Column(name="lvl9_score", type="integer", nullable=true)
     */
    private $lvl9Score;

    /**
     * @var int
     *
     * @ORM\Column(name="lvl10_score", type="integer", nullable=true)
     */
    private $lvl10Score;

    /**
     * @var int
     *
     * @ORM\Column(name="final_score", type="integer", nullable=true)
     */
    private $finalScore;
    
    /**
     * @ORM\Column(name="created", type="datetime")
     */
    private $created;

    /**
     * @var int
     * @ORM\ManyToOne(targetEntity="User", inversedBy="games")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $userId;


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
     * Set lvl1Goodpicks
     *
     * @param string $lvl1Goodpicks
     *
     * @return Game
     */
    public function setLvl1Goodpicks($lvl1Goodpicks)
    {
        $this->lvl1Goodpicks = $lvl1Goodpicks;

        return $this;
    }

    /**
     * Get lvl1Goodpicks
     *
     * @return string
     */
    public function getLvl1Goodpicks()
    {
        return $this->lvl1Goodpicks;
    }

    /**
     * Set lvl2Goodpicks
     *
     * @param string $lvl2Goodpicks
     *
     * @return Game
     */
    public function setLvl2Goodpicks($lvl2Goodpicks)
    {
        $this->lvl2Goodpicks = $lvl2Goodpicks;

        return $this;
    }

    /**
     * Get lvl2Goodpicks
     *
     * @return string
     */
    public function getLvl2Goodpicks()
    {
        return $this->lvl2Goodpicks;
    }

    /**
     * Set lvl3Goodpicks
     *
     * @param string $lvl3Goodpicks
     *
     * @return Game
     */
    public function setLvl3Goodpicks($lvl3Goodpicks)
    {
        $this->lvl3Goodpicks = $lvl3Goodpicks;

        return $this;
    }

    /**
     * Get lvl3Goodpicks
     *
     * @return string
     */
    public function getLvl3Goodpicks()
    {
        return $this->lvl3Goodpicks;
    }

    /**
     * Set lvl4Goodpicks
     *
     * @param string $lvl4Goodpicks
     *
     * @return Game
     */
    public function setLvl4Goodpicks($lvl4Goodpicks)
    {
        $this->lvl4Goodpicks = $lvl4Goodpicks;

        return $this;
    }

    /**
     * Get lvl4Goodpicks
     *
     * @return string
     */
    public function getLvl4Goodpicks()
    {
        return $this->lvl4Goodpicks;
    }

    /**
     * Set lvl5Goodpicks
     *
     * @param string $lvl5Goodpicks
     *
     * @return Game
     */
    public function setLvl5Goodpicks($lvl5Goodpicks)
    {
        $this->lvl5Goodpicks = $lvl5Goodpicks;

        return $this;
    }

    /**
     * Get lvl5Goodpicks
     *
     * @return string
     */
    public function getLvl5Goodpicks()
    {
        return $this->lvl5Goodpicks;
    }

    /**
     * Set lvl6Goodpicks
     *
     * @param string $lvl6Goodpicks
     *
     * @return Game
     */
    public function setLvl6Goodpicks($lvl6Goodpicks)
    {
        $this->lvl6Goodpicks = $lvl6Goodpicks;

        return $this;
    }

    /**
     * Get lvl6Goodpicks
     *
     * @return string
     */
    public function getLvl6Goodpicks()
    {
        return $this->lvl6Goodpicks;
    }

    /**
     * Set lvl7Goodpicks
     *
     * @param string $lvl7Goodpicks
     *
     * @return Game
     */
    public function setLvl7Goodpicks($lvl7Goodpicks)
    {
        $this->lvl7Goodpicks = $lvl7Goodpicks;

        return $this;
    }

    /**
     * Get lvl7Goodpicks
     *
     * @return string
     */
    public function getLvl7Goodpicks()
    {
        return $this->lvl7Goodpicks;
    }

    /**
     * Set lvl8Goodpicks
     *
     * @param string $lvl8Goodpicks
     *
     * @return Game
     */
    public function setLvl8Goodpicks($lvl8Goodpicks)
    {
        $this->lvl8Goodpicks = $lvl8Goodpicks;

        return $this;
    }

    /**
     * Get lvl8Goodpicks
     *
     * @return string
     */
    public function getLvl8Goodpicks()
    {
        return $this->lvl8Goodpicks;
    }

    /**
     * Set lvl9Goodpicks
     *
     * @param string $lvl9Goodpicks
     *
     * @return Game
     */
    public function setLvl9Goodpicks($lvl9Goodpicks)
    {
        $this->lvl9Goodpicks = $lvl9Goodpicks;

        return $this;
    }

    /**
     * Get lvl9Goodpicks
     *
     * @return string
     */
    public function getLvl9Goodpicks()
    {
        return $this->lvl9Goodpicks;
    }

    /**
     * Set lvl10Goodpicks
     *
     * @param string $lvl10Goodpicks
     *
     * @return Game
     */
    public function setLvl10Goodpicks($lvl10Goodpicks)
    {
        $this->lvl10Goodpicks = $lvl10Goodpicks;

        return $this;
    }

    /**
     * Get lvl10Goodpicks
     *
     * @return string
     */
    public function getLvl10Goodpicks()
    {
        return $this->lvl10Goodpicks;
    }

    /**
     * Set lvl1Badpicks
     *
     * @param string $lvl1Badpicks
     *
     * @return Game
     */
    public function setLvl1Badpicks($lvl1Badpicks)
    {
        $this->lvl1Badpicks = $lvl1Badpicks;

        return $this;
    }

    /**
     * Get lvl1Badpicks
     *
     * @return string
     */
    public function getLvl1Badpicks()
    {
        return $this->lvl1Badpicks;
    }

    /**
     * Set lvl2Badpicks
     *
     * @param string $lvl2Badpicks
     *
     * @return Game
     */
    public function setLvl2Badpicks($lvl2Badpicks)
    {
        $this->lvl2Badpicks = $lvl2Badpicks;

        return $this;
    }

    /**
     * Get lvl2Badpicks
     *
     * @return string
     */
    public function getLvl2Badpicks()
    {
        return $this->lvl2Badpicks;
    }

    /**
     * Set lvl3Badpicks
     *
     * @param string $lvl3Badpicks
     *
     * @return Game
     */
    public function setLvl3Badpicks($lvl3Badpicks)
    {
        $this->lvl3Badpicks = $lvl3Badpicks;

        return $this;
    }

    /**
     * Get lvl3Badpicks
     *
     * @return string
     */
    public function getLvl3Badpicks()
    {
        return $this->lvl3Badpicks;
    }

    /**
     * Set lvl4Badpicks
     *
     * @param string $lvl4Badpicks
     *
     * @return Game
     */
    public function setLvl4Badpicks($lvl4Badpicks)
    {
        $this->lvl4Badpicks = $lvl4Badpicks;

        return $this;
    }

    /**
     * Get lvl4Badpicks
     *
     * @return string
     */
    public function getLvl4Badpicks()
    {
        return $this->lvl4Badpicks;
    }

    /**
     * Set lvl5Badpicks
     *
     * @param string $lvl5Badpicks
     *
     * @return Game
     */
    public function setLvl5Badpicks($lvl5Badpicks)
    {
        $this->lvl5Badpicks = $lvl5Badpicks;

        return $this;
    }

    /**
     * Get lvl5Badpicks
     *
     * @return string
     */
    public function getLvl5Badpicks()
    {
        return $this->lvl5Badpicks;
    }

    /**
     * Set lvl6Badpicks
     *
     * @param string $lvl6Badpicks
     *
     * @return Game
     */
    public function setLvl6Badpicks($lvl6Badpicks)
    {
        $this->lvl6Badpicks = $lvl6Badpicks;

        return $this;
    }

    /**
     * Get lvl6Badpicks
     *
     * @return string
     */
    public function getLvl6Badpicks()
    {
        return $this->lvl6Badpicks;
    }

    /**
     * Set lvl7Badpicks
     *
     * @param string $lvl7Badpicks
     *
     * @return Game
     */
    public function setLvl7Badpicks($lvl7Badpicks)
    {
        $this->lvl7Badpicks = $lvl7Badpicks;

        return $this;
    }

    /**
     * Get lvl7Badpicks
     *
     * @return string
     */
    public function getLvl7Badpicks()
    {
        return $this->lvl7Badpicks;
    }

    /**
     * Set lvl8Badpicks
     *
     * @param string $lvl8Badpicks
     *
     * @return Game
     */
    public function setLvl8Badpicks($lvl8Badpicks)
    {
        $this->lvl8Badpicks = $lvl8Badpicks;

        return $this;
    }

    /**
     * Get lvl8Badpicks
     *
     * @return string
     */
    public function getLvl8Badpicks()
    {
        return $this->lvl8Badpicks;
    }

    /**
     * Set lvl9Badpicks
     *
     * @param string $lvl9Badpicks
     *
     * @return Game
     */
    public function setLvl9Badpicks($lvl9Badpicks)
    {
        $this->lvl9Badpicks = $lvl9Badpicks;

        return $this;
    }

    /**
     * Get lvl9Badpicks
     *
     * @return string
     */
    public function getLvl9Badpicks()
    {
        return $this->lvl9Badpicks;
    }

    /**
     * Set lvl10Badpicks
     *
     * @param string $lvl10Badpicks
     *
     * @return Game
     */
    public function setLvl10Badpicks($lvl10Badpicks)
    {
        $this->lvl10Badpicks = $lvl10Badpicks;

        return $this;
    }

    /**
     * Get lvl10Badpicks
     *
     * @return string
     */
    public function getLvl10Badpicks()
    {
        return $this->lvl10Badpicks;
    }

    /**
     * Set lvl1Bonus
     *
     * @param string $lvl1Bonus
     *
     * @return Game
     */
    public function setLvl1Bonus($lvl1Bonus)
    {
        $this->lvl1Bonus = $lvl1Bonus;

        return $this;
    }

    /**
     * Get lvl1Bonus
     *
     * @return string
     */
    public function getLvl1Bonus()
    {
        return $this->lvl1Bonus;
    }

    /**
     * Set lvl2Bonus
     *
     * @param string $lvl2Bonus
     *
     * @return Game
     */
    public function setLvl2Bonus($lvl2Bonus)
    {
        $this->lvl2Bonus = $lvl2Bonus;

        return $this;
    }

    /**
     * Get lvl2Bonus
     *
     * @return string
     */
    public function getLvl2Bonus()
    {
        return $this->lvl2Bonus;
    }

    /**
     * Set lvl3Bonus
     *
     * @param string $lvl3Bonus
     *
     * @return Game
     */
    public function setLvl3Bonus($lvl3Bonus)
    {
        $this->lvl3Bonus = $lvl3Bonus;

        return $this;
    }

    /**
     * Get lvl3Bonus
     *
     * @return string
     */
    public function getLvl3Bonus()
    {
        return $this->lvl3Bonus;
    }

    /**
     * Set lvl4Bonus
     *
     * @param string $lvl4Bonus
     *
     * @return Game
     */
    public function setLvl4Bonus($lvl4Bonus)
    {
        $this->lvl4Bonus = $lvl4Bonus;

        return $this;
    }

    /**
     * Get lvl4Bonus
     *
     * @return string
     */
    public function getLvl4Bonus()
    {
        return $this->lvl4Bonus;
    }

    /**
     * Set lvl5Bonus
     *
     * @param string $lvl5Bonus
     *
     * @return Game
     */
    public function setLvl5Bonus($lvl5Bonus)
    {
        $this->lvl5Bonus = $lvl5Bonus;

        return $this;
    }

    /**
     * Get lvl5Bonus
     *
     * @return string
     */
    public function getLvl5Bonus()
    {
        return $this->lvl5Bonus;
    }

    /**
     * Set lvl6Bonus
     *
     * @param string $lvl6Bonus
     *
     * @return Game
     */
    public function setLvl6Bonus($lvl6Bonus)
    {
        $this->lvl6Bonus = $lvl6Bonus;

        return $this;
    }

    /**
     * Get lvl6Bonus
     *
     * @return string
     */
    public function getLvl6Bonus()
    {
        return $this->lvl6Bonus;
    }

    /**
     * Set lvl7Bonus
     *
     * @param string $lvl7Bonus
     *
     * @return Game
     */
    public function setLvl7Bonus($lvl7Bonus)
    {
        $this->lvl7Bonus = $lvl7Bonus;

        return $this;
    }

    /**
     * Get lvl7Bonus
     *
     * @return string
     */
    public function getLvl7Bonus()
    {
        return $this->lvl7Bonus;
    }

    /**
     * Set lvl8Bonus
     *
     * @param string $lvl8Bonus
     *
     * @return Game
     */
    public function setLvl8Bonus($lvl8Bonus)
    {
        $this->lvl8Bonus = $lvl8Bonus;

        return $this;
    }

    /**
     * Get lvl8Bonus
     *
     * @return string
     */
    public function getLvl8Bonus()
    {
        return $this->lvl8Bonus;
    }

    /**
     * Set lvl9Bonus
     *
     * @param string $lvl9Bonus
     *
     * @return Game
     */
    public function setLvl9Bonus($lvl9Bonus)
    {
        $this->lvl9Bonus = $lvl9Bonus;

        return $this;
    }

    /**
     * Get lvl9Bonus
     *
     * @return string
     */
    public function getLvl9Bonus()
    {
        return $this->lvl9Bonus;
    }

    /**
     * Set lvl10Bonus
     *
     * @param string $lvl10Bonus
     *
     * @return Game
     */
    public function setLvl10Bonus($lvl10Bonus)
    {
        $this->lvl10Bonus = $lvl10Bonus;

        return $this;
    }

    /**
     * Get lvl10Bonus
     *
     * @return string
     */
    public function getLvl10Bonus()
    {
        return $this->lvl10Bonus;
    }

    /**
     * Set lvl1Score
     *
     * @param integer $lvl1Score
     *
     * @return Game
     */
    public function setLvl1Score($lvl1Score)
    {
        $this->lvl1Score = $lvl1Score;

        return $this;
    }

    /**
     * Get lvl1Score
     *
     * @return int
     */
    public function getLvl1Score()
    {
        return $this->lvl1Score;
    }

    /**
     * Set lvl2Score
     *
     * @param integer $lvl2Score
     *
     * @return Game
     */
    public function setLvl2Score($lvl2Score)
    {
        $this->lvl2Score = $lvl2Score;

        return $this;
    }

    /**
     * Get lvl2Score
     *
     * @return int
     */
    public function getLvl2Score()
    {
        return $this->lvl2Score;
    }

    /**
     * Set lvl3Score
     *
     * @param integer $lvl3Score
     *
     * @return Game
     */
    public function setLvl3Score($lvl3Score)
    {
        $this->lvl3Score = $lvl3Score;

        return $this;
    }

    /**
     * Get lvl3Score
     *
     * @return int
     */
    public function getLvl3Score()
    {
        return $this->lvl3Score;
    }

    /**
     * Set lvl4Score
     *
     * @param integer $lvl4Score
     *
     * @return Game
     */
    public function setLvl4Score($lvl4Score)
    {
        $this->lvl4Score = $lvl4Score;

        return $this;
    }

    /**
     * Get lvl4Score
     *
     * @return int
     */
    public function getLvl4Score()
    {
        return $this->lvl4Score;
    }

    /**
     * Set lvl5Score
     *
     * @param integer $lvl5Score
     *
     * @return Game
     */
    public function setLvl5Score($lvl5Score)
    {
        $this->lvl5Score = $lvl5Score;

        return $this;
    }

    /**
     * Get lvl5Score
     *
     * @return int
     */
    public function getLvl5Score()
    {
        return $this->lvl5Score;
    }

    /**
     * Set lvl6Score
     *
     * @param integer $lvl6Score
     *
     * @return Game
     */
    public function setLvl6Score($lvl6Score)
    {
        $this->lvl6Score = $lvl6Score;

        return $this;
    }

    /**
     * Get lvl6Score
     *
     * @return int
     */
    public function getLvl6Score()
    {
        return $this->lvl6Score;
    }

    /**
     * Set lvl7Score
     *
     * @param integer $lvl7Score
     *
     * @return Game
     */
    public function setLvl7Score($lvl7Score)
    {
        $this->lvl7Score = $lvl7Score;

        return $this;
    }

    /**
     * Get lvl7Score
     *
     * @return int
     */
    public function getLvl7Score()
    {
        return $this->lvl7Score;
    }

    /**
     * Set lvl8Score
     *
     * @param integer $lvl8Score
     *
     * @return Game
     */
    public function setLvl8Score($lvl8Score)
    {
        $this->lvl8Score = $lvl8Score;

        return $this;
    }

    /**
     * Get lvl8Score
     *
     * @return int
     */
    public function getLvl8Score()
    {
        return $this->lvl8Score;
    }

    /**
     * Set lvl9Score
     *
     * @param integer $lvl9Score
     *
     * @return Game
     */
    public function setLvl9Score($lvl9Score)
    {
        $this->lvl9Score = $lvl9Score;

        return $this;
    }

    /**
     * Get lvl9Score
     *
     * @return int
     */
    public function getLvl9Score()
    {
        return $this->lvl9Score;
    }

    /**
     * Set lvl10Score
     *
     * @param integer $lvl10Score
     *
     * @return Game
     */
    public function setLvl10Score($lvl10Score)
    {
        $this->lvl10Score = $lvl10Score;

        return $this;
    }

    /**
     * Get lvl10Score
     *
     * @return int
     */
    public function getLvl10Score()
    {
        return $this->lvl10Score;
    }

    /**
     * Set finalScore
     *
     * @param integer $finalScore
     *
     * @return Game
     */
    public function setFinalScore($finalScore)
    {
        $this->finalScore = $finalScore;

        return $this;
    }

    /**
     * Get finalScore
     *
     * @return int
     */
    public function getFinalScore()
    {
        return $this->finalScore;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return Game
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set created
     *
     * @param \timestamp $created
     *
     * @return Game
     */
    public function setCreated(\DateTime $created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \timestamp
     */
    public function getCreated()
    {
        return $this->created;
    }
}
