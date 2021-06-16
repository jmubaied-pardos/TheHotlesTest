<?php


namespace App\Interfaces;


use Illuminate\Database\Eloquent\Model;


interface EloquentRepositoryInterface
{
    public function all();
    public function create(array $attributes): Model;
    public function update(array $data, $id);
    public function delete($id);
    public function find($id);
}
