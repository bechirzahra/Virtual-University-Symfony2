<?php
// src/MyApp/UlearnBundle/Entity/Vote.php

namespace MyApp\UlearnBundle\Entity;

use DCS\RatingBundle\Entity\Vote as BaseVote;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\ChangeTrackingPolicy("DEFERRED_EXPLICIT")
 */
class Vote extends BaseVote
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="MyApp\UlearnBundle\Entity\Rating", inversedBy="votes")
     * @ORM\JoinColumn(name="rating_id", referencedColumnName="id")
     */
    protected $rating;

    /**
     * @ORM\ManyToOne(targetEntity="University\UserBundle\Entity\User")
     */
    protected $voter;
}