<?php

namespace App\Base\Models;

use Illuminate\Database\Eloquent\Model;

interface BaseRepositoryInterface
{
    public function find(int $id): ?Model;
    public function all(int $id): ?Collection;
    public function create(array $data): ?Model;
    public function delete(int $id): ?bool;
    public function update(array $data, int $id): ?Model;
}
