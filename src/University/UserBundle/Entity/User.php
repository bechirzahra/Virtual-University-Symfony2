<?php
namespace University\UserBundle\Entity;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
/**
* @ORM\Entity
* @ORM\Table(name="user")
*/
class User extends BaseUser
{
/**
* @ORM\Id
* @ORM\Column(type="integer")
* @ORM\GeneratedValue(strategy="AUTO")
*/
protected $id;
	/**
     * @ORM\Column(name="sexe", type="string", nullable=true)
     */
    private $sexe;

    /**
     * @ORM\Column(name="nom", type="string", nullable=true)
     */
    private $nom;
	
	/**
     * @ORM\Column(name="prenom", type="string", nullable=true)
     */
    private $prenom;
	
	
/**
     * @ORM\Column(name="naissance", type="date", nullable=true)
     */
    private $naissance;

   
    
public function __construct()
{
parent::__construct();
// your own logic
}
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
     * Set sexe
     *
     * @param string $sexe
     * @return User
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return string 
     */
    public function getSexe()
    {
        return $this->sexe;
    }
    
    /**
     * Set nom
     *
     * @param string $nom
     * @return User
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return User
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }
   
    /**
     * Get naissance
     *
     * @return date 
     */
    
    function getNaissance() {
        return $this->naissance;
    }

    
    /**
     * Set naissance
     *
     * @param date $naissance
     * @return User
     */
    
    function setNaissance($naissance) {
        $this->naissance = $naissance;
    }


    

    

}
?>