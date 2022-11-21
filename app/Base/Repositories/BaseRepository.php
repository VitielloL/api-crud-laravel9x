<?php

namespace App\Base\Repositories;

use App\People\Repositories\PessoaRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class BaseRepository
{
    protected string $model;

    public function find(int $id): ?Model
    {
        return $this->model::findOrFail($id);
    }
    //   /**
    //  * @var PeopleRepository
    //  */
    // private $peopleRepo;

    // public function __construct(PeopleRepository $peopleRepository)
    // {
    //     $this->peopleRepo = $peopleRepository;
    // }

    // /**
    //  * @inheritDoc
    //  */
    // public function find(int $id): ?Model
    // {
    //     return $this->peopleRepo->find($id);
    // }

    // /**
    //  * @inheritDoc
    //  */
    // public function all(): ?Collection
    // {
    //     return $this->peopleRepo->all();
    // }

    // /**
    //  * @inheritDoc
    //  */
    // public function create(array $data): ?Model
    // {
    //     return $this->peopleRepo->create($data);
    // }

    // /**
    //  * @inheritDoc
    //  */
    // public function delete(int $id): ?bool
    // {
    //     return $this->peopleRepo->delete($id);
    // }

    // /**
    //  * @inheritDoc
    //  */
    // public function update(array $data, int $id): ?Model
    // {
    //     return $this->peopleRepo->update($data, $id);
    // }
}
