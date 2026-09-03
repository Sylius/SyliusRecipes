<?php

declare(strict_types=1);

namespace App\Repository;

use Sylius\B2BKit\Organization\Repository\CustomerRepositoryInterface as B2BKitCustomerRepositoryInterface;
use Sylius\B2BKit\Organization\Repository\CustomerRepositoryTrait as B2BKitCustomerRepositoryTrait;
use Sylius\Bundle\CoreBundle\Doctrine\ORM\CustomerRepository as BaseCustomerRepository;

class CustomerRepository extends BaseCustomerRepository implements B2BKitCustomerRepositoryInterface
{
    use B2BKitCustomerRepositoryTrait;
}
