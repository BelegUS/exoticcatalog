<?php

namespace ExoticCarParts\CrawlerBundle\Repository;

use Doctrine\ORM\EntityRepository;

class PartsGroupRepository extends EntityRepository {

    public function checkIfExistByModelIdAndPartsGroupName($modelId, $partsGroupName)
    {
        $query = $this->getEntityManager()
                ->createQuery(
                 'SELECT pg
                 FROM CrawlerBundle:PartsGroup pg
                 WHERE pg.model = :modelId
                 AND pg.name = :partsGroupName'
                )
                ->setParameter('modelId', $modelId)
                ->setParameter('partsGroupName', $partsGroupName);

        try {
            return $query->getSingleResult();
        } catch (\Doctrine\ORM\NoResultException $e) {
            return null;
        }
    }

}

?>
