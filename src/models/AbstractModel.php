<?php
namespace App\Models;

Abstract Class AbstractModel{

	abstract static public function getAll(?array $data);

	abstract static public function get($id);

	abstract public function update(int $id, ?array $data);

	abstract public function delete(int $id);

}
