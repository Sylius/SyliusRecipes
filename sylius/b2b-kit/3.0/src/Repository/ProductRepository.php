<?php

declare(strict_types=1);

namespace App\Repository;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Mapping\ClassMetadata;
use Doctrine\ORM\QueryBuilder;
use Sylius\B2BKit\Organization\Checker\ProductVisibilityFilteringCheckerInterface as B2BKitProductVisibilityFilteringCheckerInterface;
use Sylius\B2BKit\Organization\Doctrine\ORM\CreateProductQueryBuilderTrait as B2BKitCreateProductQueryBuilderTrait;
use Sylius\Bundle\CoreBundle\Doctrine\ORM\ProductRepository as BaseProductRepository;
use Sylius\Component\Customer\Context\CustomerContextInterface;

class ProductRepository extends BaseProductRepository
{
    use B2BKitCreateProductQueryBuilderTrait;

    public function __construct(
        EntityManagerInterface $entityManager,
        ClassMetadata $class,
        protected B2BKitProductVisibilityFilteringCheckerInterface $productVisibilityFilteringChecker,
        protected CustomerContextInterface $customerContext,
    ) {
        parent::__construct($entityManager, $class);
    }

    public function createQueryBuilder($alias, $indexBy = null): QueryBuilder
    {
        return $this->createFilteredQueryBuilder(
            parent::createQueryBuilder($alias, $indexBy),
        );
    }
}
