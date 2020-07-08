<?php

namespace App\Repository;

use App\Entity\Annonce;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Annonce|null find($id, $lockMode = null, $lockVersion = null)
 * @method Annonce|null findOneBy(array $criteria, array $orderBy = null)
 * @method Annonce[]    findAll()
 * @method Annonce[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AnnonceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Annonce::class);
    }

    // /**
    //  * @return Annonce[] Returns an array of Annonce objects
    //  */

    public function findByNom($value, $filtre)
    {
        $col = 'annonce.id';
        $sort = 'ASC';
        if($filtre == "croissant"){
            $col = 'annonce.tarif';
        }
        if($filtre == "décroissant"){
            $col = 'annonce.tarif';
            $sort = 'DESC';
        }
        if($value == "aucun"){
            return $this->createQueryBuilder('annonce')
            ->orderBy($col, $sort)
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
            ; 
        }else{
            return $this->createQueryBuilder('annonce')
            ->andWhere('annonce.nom like :nom')
            ->setParameter('nom', '%'.$value.'%')
            ->orderBy($col, $sort)
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
            ;
        }
            

    }

    public function byUser($idUser)
    {
        $query =  $this->getEntityManager()->createQuery(
            'SELECT a
            FROM App\Entity\Annonce a
            INNER JOIN a.utilisateur u
            WHERE u.id = :id'
        )
        ->setParameters(array('id'=> $idUser));

        return $query->getResult();
    }
}
