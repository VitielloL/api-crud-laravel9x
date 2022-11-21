<?php

namespace App\Base\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface BaseRepositoryInterface
{
    /**
     * @param int $id
     * @return Model|null
     */
    public function find(int $id): ?Model;

    /**
     * @return Collection|null
     */
    public function all(): ?Collection;

    /**
     * @param array $data
     * @return Model|null
     */
    public function create(array $data): ?Model;

    /**
     * @param int $id
     * @return bool|null
     */
    public function delete(int $id): ?bool;

    /**
     * @param array $data
     * @param int $id
     * @return Model|null
     */
    public function update(array $data, int $id): ?Model;
}
