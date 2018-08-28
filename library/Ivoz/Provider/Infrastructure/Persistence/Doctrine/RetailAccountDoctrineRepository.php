<?php

namespace Ivoz\Provider\Infrastructure\Persistence\Doctrine;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Ivoz\Provider\Domain\Model\RetailAccount\RetailAccountRepository;
use Ivoz\Provider\Domain\Model\RetailAccount\RetailAccount;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * RetailAccountRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class RetailAccountDoctrineRepository extends ServiceEntityRepository implements RetailAccountRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, RetailAccount::class);
    }
}