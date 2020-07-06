<?php

namespace App\Repository;

use App\Entity\Panier;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Panier|null find($id, $lockMode = null, $lockVersion = null)
 * @method Panier|null findOneBy(array $criteria, array $orderBy = null)
 * @method Panier[]    findAll()
 * @method Panier[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PanierRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Panier::class);
    }

    // /**
    //  * @return Panier[] Returns an array of Panier objects
    //  */

    public function findAllPanierAnnonce($id_user)
    {
        $query =  $this->getEntityManager()->createQuery(
            'SELECT p, a
            FROM App\Entity\Panier p
            INNER JOIN p.annonce a
            WHERE p.id_utilisateur = :id AND p.status = :statuspan'
        )
        ->setParameters(array('id'=> $id_user, 'statuspan' => 'impaye'));

        return $query->getResult();
    }

    public function findAllPanierPaye($id_user)
    {
        $query =  $this->getEntityManager()->createQuery(
            'SELECT p, a, u
            FROM App\Entity\Panier p
            INNER JOIN p.annonce a
            INNER JOIN a.utilisateur u
            WHERE u.id = :id AND p.status = :statuspan'
        )
        ->setParameters(array('id'=> $id_user, 'statuspan' => 'paye'));

        return $query->getResult();
    }

    public function setPanierPaye($id_user)
    {
        $query =  $this->getEntityManager()->createQuery(
            'UPDATE App\Entity\Panier p
            SET p.status = :statuspaye
            WHERE p.id_utilisateur = :id AND p.status = :statusimp'
        )
        ->setParameters(array('id'=> $id_user, 'statusimp' => 'impaye', 'statuspaye' => 'paye'));

        return $query->getResult();
    }
}
