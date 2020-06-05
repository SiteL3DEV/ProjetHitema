<?php
namespace App\Repository;
use App\Entity\Avis;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class AvisRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Avis::class);
    }

    /**
     * @return Avis[]
     */
    public function findAvisByCom($comment): array
    {
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT a
            FROM App\Entity\Avis a
            WHERE a.commentaire = :comment'
        )->setParameter('comment', $comment);

        // returns an array of Product objects
        return $query->getResult();
    }
}