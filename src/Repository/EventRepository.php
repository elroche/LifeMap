<?php

namespace App\Repository;

use App\Entity\Event;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class EventRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Event::class);
    }

    /**
     * Retourne uniquement les événements auxquels l'utilisateur est rattaché.
     *
     * @return Event[]
     */
    public function findByUser(User $user): array
    {
        return $this->createQueryBuilder('e')
            ->innerJoin('e.users', 'u')
            ->andWhere('u = :user')
            ->setParameter('user', $user)
            ->orderBy('e.startDate', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Retourne un événement uniquement s'il appartient à l'utilisateur.
     */
    public function findOneByUser(int $eventId, User $user): ?Event
    {
        return $this->createQueryBuilder('e')
            ->innerJoin('e.users', 'u')
            ->andWhere('e.id = :eventId')
            ->andWhere('u = :user')
            ->setParameter('eventId', $eventId)
            ->setParameter('user', $user)
            ->getQuery()
            ->getOneOrNullResult();
    }
}