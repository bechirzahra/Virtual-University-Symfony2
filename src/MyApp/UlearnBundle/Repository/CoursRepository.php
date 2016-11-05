<?php

namespace MyApp\UlearnBundle\Repository;

use Doctrine\ORM\EntityRepository;

class CoursRepository extends EntityRepository
{
          public function getCours()
  {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT * FROM MyAppUlearnBundle:cours ');

    return $qb->getQuery()
              ->getResult();
  }
}