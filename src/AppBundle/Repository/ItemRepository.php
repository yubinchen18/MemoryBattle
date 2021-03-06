<?php

namespace AppBundle\Repository;

/**
 * ItemRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ItemRepository extends \Doctrine\ORM\EntityRepository
{
    public function findAllByModelId($id)
    {
        $query = $this->getEntityManager()
            ->createQuery(
                'SELECT i, m FROM AppBundle:Item i
                JOIN i.model m
                WHERE m.id = :id'
            )->setParameter('id', $id);

        try {
            return $query->getResult();
        } catch (\Doctrine\ORM\NoResultException $e) {
            return null;
        }
    }
}
