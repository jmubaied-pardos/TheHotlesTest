<?php

namespace App\Repositories\Hotel;

use App\Interfaces\HotelRepositoryInterface;
use App\Models\Hotel;
use App\Repositories\BaseRepository;

class HotelRepository extends BaseRepository implements HotelRepositoryInterface
{
    public function __construct(Hotel $model)
    {
        parent::__constructor($model);
    }

    public function all()
    {
        return $this->model->all();
    }

    public function create(array $attributes):Hotel
    {
        return $this->model->create($attributes);
    }

    public function update(array $data, $id)
    {
        // TODO: Implement update() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }

    public function find($id)
    {
        // TODO: Implement find() method.
    }
}
