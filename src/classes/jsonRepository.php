<?php

class jsonRepository implements RepositoryInterface
{
    protected $file;

    public function __construct($file)
    {
        $this->file = $file;
    }

    public function all($entity)
    {
        $data = json_decode(file_get_contents($this->file));
        return $data->entity;
    }
}