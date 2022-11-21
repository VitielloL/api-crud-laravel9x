<?php

namespace App\People\Repositories;

use App\People\Models\People;
use App\Base\Repositories\BaseRepository;
use App\People\Models\PeopleRepositoryInterface;

/**
 * Interface PeopleRepository.
 *
 * @package namespace App\People\Repositories;
 */
class PeopleRepository extends BaseRepository implements PeopleRepositoryInterface
{
    protected string $model = People::class;
}
