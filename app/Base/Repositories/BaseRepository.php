<?php

namespace App\Base\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use App\Base\Models\BaseRepositoryInterface;

class BaseRepository implements BaseRepositoryInterface
{
    protected string $model;

    public function find(int $id): ?Model
    {
        return $this->model::findOrFail($id);
    }

    public function all(): ?Collection
    {
        return $this->model::all();
    }

    public function create(array $data): ?Model
    {
        return $this->model::create($data);
    }

    public function delete(int $id): void
    {
        $model = $this->find($id);
        $model->delete();
    }

    public function update(array $data, int $id): ?Model
    {
        $model = $this->find($id);
        $model->update($data);
        return $model;
    }
}
