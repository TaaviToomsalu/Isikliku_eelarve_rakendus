<?php

namespace App\Repositories\Implementation\Doctrine;

use App\Repositories\Contracts\Site\SiteVisitRepositoryInterface;
use Doctrine\ORM\EntityRepository;

class AccountRepository extends EntityRepository implements SiteVisitRepositoryInterface
{
    // Class implementation here
}

