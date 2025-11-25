<?php

declare(strict_types=1);

namespace App\Repository;

use Sylius\B2BKit\Organization\Repository\AddressRepositoryInterface as B2BKitAddressRepositoryInterface;
use Sylius\B2BKit\Organization\Repository\AddressRepositoryTrait as B2BKitAddressRepositoryTrait;
use Sylius\Bundle\CoreBundle\Doctrine\ORM\AddressRepository as BaseAddressRepository;

class AddressRepository extends BaseAddressRepository implements B2BKitAddressRepositoryInterface
{
    use B2BKitAddressRepositoryTrait;
}
