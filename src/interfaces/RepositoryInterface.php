<?php

interface RepositoryInterface
{
    public function all($entity);
    public function find($entity, $id, $field = "id");
}