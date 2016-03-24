<?php

namespace AppBundle\Repository;

/**
 * MatchesRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class MatchesRepository extends \Doctrine\ORM\EntityRepository
{
        public function findAllMatchsByTeam($id)//Find all the matchs by the id of team 
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT m FROM AppBundle:Matches m WHERE m.homeTeamId=:id OR m.awayTeamId=:id'
            )//get every matchs this team are in.
            ->setParameter('id',$id)
            ->getResult();
    }
     public function findSchedule($id)
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT m FROM AppBundle:Matches m WHERE m.eventId=:id ORDER BY m.eventOrder ASC'
            )//get every matchs of this Event, then order by eventOrder
            ->setParameter('id',$id)
            ->getResult();
    }
}
