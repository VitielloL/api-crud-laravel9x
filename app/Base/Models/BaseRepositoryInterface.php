<?php

namespace App\Base\Models;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

interface BaseRepositoryInterface
{
    public function find(int $id): ?Model;
    public function all(): ?Collection;
    public function create(array $data): ?Model;
    public function delete(int $id): void;
    public function update(array $data, int $id): ?Model;
}
