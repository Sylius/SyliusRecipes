<?php

declare(strict_types=1);

namespace App\Repository;

use Sylius\B2BKit\Organization\Repository\OrderRepositoryTrait as B2BKitOrderRepositoryTrait;
use Sylius\B2BKit\Organization\Repository\OrderRepositoryInterface as B2BKitOrderRepositoryInterface;
use Sylius\Bundle\CoreBundle\Doctrine\ORM\OrderRepository as BaseOrderRepository;

class OrderRepository extends BaseOrderRepository implements B2BKitOrderRepositoryInterface
{
    use B2BKitOrderRepositoryTrait;
}
