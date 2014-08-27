<?php

namespace ExoticCarParts\CrawlerBundle\Repository;

use Doctrine\ORM\EntityRepository;

class ModelRepository extends EntityRepository {

    public function checkIfExistByBrandIdAndModelName($brandId, $modelName)
    {
        $query = $this->getEntityManager()
                ->createQuery(
                 'SELECT m
                 FROM CrawlerBundle:Model m
                 WHERE m.brand = :brandId
                 AND m.name = :modelName'
                )
                ->setParameter('brandId', $brandId)
                ->setParameter('modelName', $modelName);

        try {
            return $query->getSingleResult();
        } catch (\Doctrine\ORM\NoResultException $e) {
            return null;
        }
    }

}

?>
