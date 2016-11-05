<?php

namespace MyApp\UlearnBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QuizResponse
 *
 * @ORM\Table(name="quizreponse")
 * @ORM\Entity
 */
class QuizReponse
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=100, nullable=false)
     */
    private $description;


    /**
     * @var \QuizQuestion
     *
     * @ORM\ManyToOne(targetEntity="QuizQuestion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="questionid", referencedColumnName="id")
     * })
     */
    private $questionid;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;    

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Get questionid
     *
     * @return \MyApp\UlearnBundle\Entity\QuizQuestion
     */
    
    function getQuestionid() {
        return $this->questionid;
    }
     /**
     * Set questionid
     *
     * @param \MyApp\UlearnBundle\Entity\QuizQuestion $questionid
     * @return QuizReponse
     */
    function setQuestionid(\MyApp\UlearnBundle\Entity\QuizQuestion $questionid) {
        $this->questionid = $questionid;
    }

     /**
     * Set description
     *
     * @param string $description
     * @return Question
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Question
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $status;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    public function toArray()
    {
        return array('id'=>$this->id,
                    'description'=>$this->description,
                    'status'=>$this->status);
    }
    public function __toString() {
        try {
            return (string) $this->id;
        }
        catch (Exception $exception ){
            return '';
        }
    }
}